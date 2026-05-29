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

    public function show($id)
    {
        $product = Product::with('images')->findOrFail($id);
        return response()->json($product);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required',
            'nama_produk' => 'required',
            'deskripsi' => 'required',
            'ukuran' => 'required',
            'harga' => 'required|numeric',
            'kondisi' => 'required',
            'gambar.*' => 'image|mimes:jpeg,png|max:2048'
        ]);

        $product = Product::create($request->except('gambar'));

        if ($request->hasFile('gambar')) {
            foreach ($request->file('gambar') as $file) {
                // Simpan gambar ke folder storage/app/public/products
                $path = $file->store('products', 'public');
                
                ProductImage::create([
                    'product_id' => $product->id,
                    'url_gambar' => $path // <--- UBAH 'gambar' menjadi 'url_gambar' di sini
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