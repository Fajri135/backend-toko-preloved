<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            // Hanya baju atasan sesuai request
            $table->enum('kategori', ['T-Shirt', 'Kemeja', 'Blouse', 'Crop Top', 'Hoodie', 'Sweater', 'Cardigan', 'Jaket', 'Kaos', 'Tank Top', 'Tunikan']);
            $table->string('nama_produk', 150);
            $table->text('deskripsi');
            $table->enum('ukuran', ['XS', 'S', 'M', 'L', 'XL', 'XXL', 'All Size']);
            $table->string('warna', 50)->nullable();
            $table->decimal('harga', 10, 2);
            $table->enum('kondisi', ['Like New', 'Good', 'Fair']);
            $table->text('catatan_kondisi')->nullable();
            $table->tinyInteger('stok')->default(1);
            $table->enum('status', ['available', 'reserved', 'sold'])->default('available');
            $table->timestamps();
        });
    }
    public function down(): void {
        Schema::dropIfExists('products');
    }
};