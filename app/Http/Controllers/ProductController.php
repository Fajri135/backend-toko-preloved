<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Admin;

class ProductController extends Controller
{
    // 1. Menampilkan katalog (hanya yang available)
    public function index()
    {
        $products = Product::with('images')->where('status', 'available')->get();
        return response()->json($products);
    }

    // 2. Menampilkan detail 1 produk
    public function show($id)
    {
        $product = Product::with('images')->findOrFail($id);
        return response()->json($product);
    }

    // 3. Menambah produk baru (Beserta Upload Gambar)
    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required',
            'nama_produk' => 'required',
            'deskripsi' => 'required',
            'ukuran' => 'required',
            'harga' => 'required|numeric',
            'kondisi' => 'required',
            'gambar.*' => 'image|mimes:jpeg,png|max:2048' // Max 2MB
        ]);

        $product = Product::create($request->except('gambar'));

        // Proses penyimpanan gambar
        if ($request->hasFile('gambar')) {
            foreach ($request->file('gambar') as $file) {
                $path = $file->store('products', 'public');
                ProductImage::create([
                    'product_id' => $product->id,
                    'gambar' => $path
                ]);
            }
        }

        return response()->json(['message' => 'Produk berhasil ditambahkan', 'data' => $product], 201);
    }

    // 4. Update status cepat (Reserved / Sold)
    public function updateStatus(Request $request, $id)
    {
        $request->validate(['status' => 'required|in:available,reserved,sold']);
        $product = Product::findOrFail($id);
        $product->update(['status' => $request->status]);

        return response()->json(['message' => "Status diubah menjadi {$request->status}"]);
    }

    // 5. Generate URL WhatsApp untuk Checkout
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