<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Admin;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('images')->where('status', 'available')->paginate(10);
        return response()->json($products);
    }

public function home(Request $request)
{
    // 1. Ambil daftar warna unik dari database
    $availableColors = Product::where('status', 'available')
        ->whereNotNull('warna')
        ->where('warna', '!=', '')
        ->distinct()
        ->pluck('warna')
        ->sort()
        ->values();

    // 2. Bangun query filter produk
    $query = Product::with('images')->where('status', 'available');

    if ($request->filled('kategori')) {
        $query->where('kategori', $request->kategori);
    }

    if ($request->filled('ukuran')) {
        $query->where('ukuran', $request->ukuran);
    }

    if ($request->filled('warna')) {
        $query->where('warna', $request->warna);
    }

    $products = $query->get();

// 3. JIKA REQUEST ADALAH AJAX: Kembalikan file home utama tetapi HANYA bagian fragment 'product_list'
if ($request->ajax()) {
    return view('public.home.home', compact('products'))->fragment('product_list');
}

    // 4. JIKA REQUEST BIASA: Buka halaman seperti biasa
    return view('public.home.home', compact('products', 'availableColors'));
}

    public function show($id)
    {
        $product = Product::with('images')->findOrFail($id);
        return response()->json($product);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required|in:T-Shirt,Kemeja,Blouse,Crop Top,Hoodie,Sweater,Cardigan,Jaket,Kaos,Tank Top,Tunikan',
            'nama_produk' => 'required|string|max:150',
            'deskripsi' => 'required|string',
            'ukuran' => 'required|in:XS,S,M,L,XL,XXL,All Size',
            'warna' => 'nullable|string|max:50', 
            'harga' => 'required|numeric',
            'kondisi' => 'required|in:Like New,Good,Fair',
            'catatan_kondisi' => 'nullable|string', 
            'gambar.*' => 'image|mimes:jpeg,png|max:2048'
        ]);

        $product = Product::create($request->except('gambar'));

        if ($request->hasFile('gambar')) {
            foreach ($request->file('gambar') as $file) {
                // Simpan gambar ke folder storage/app/public/products
                $path = $file->store('products', 'public');
                
                ProductImage::create([
                    'product_id' => $product->id,
                    'url_gambar' => $path
                ]);
            }
        }

        return response()->json(['message' => 'Produk berhasil ditambahkan', 'data' => $product], 201);
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate(['status' => 'required|in:available,reserved,sold']);
        $product = Product::findOrFail($id);
        $product->update(['status' => $request->status]);

        return response()->json(['message' => "Status diubah menjadi {$request->status}"]);
    }


    public function checkout($id)
    {
        $product = Product::findOrFail($id);
        $admin = Admin::first();

        if (!$admin || !$admin->no_wa) {
            return response()->json(['error' => 'Data nomor WhatsApp Admin belum disetel.'], 500);
        }

        $hargaFormat = number_format($product->harga, 0, ',', '.');
        $textMessage = "Halo Admin Toko Preloved, saya tertarik dengan:\nProduk: *{$product->nama_produk}*\nHarga: Rp{$hargaFormat}\n\nApakah barang ini masih tersedia?";
                     
        $encodedMessage = rawurlencode($textMessage);
        $waUrl = "https://wa.me/{$admin->no_wa}?text={$encodedMessage}";

        return response()->json(['whatsapp_url' => $waUrl]);
    }
}