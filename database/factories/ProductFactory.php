<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'kategori' => fake()->randomElement(['T-Shirt', 'Kemeja', 'Blouse', 'Crop Top', 'Hoodie', 'Sweater', 'Cardigan', 'Jaket', 'Kaos', 'Tank Top', 'Tunikan']),
            'nama_produk' => 'Baju Preloved ' . fake()->word(),
            'deskripsi' => fake()->sentence(10),
            'ukuran' => fake()->randomElement(['XS', 'S', 'M', 'L', 'XL', 'XXL', 'All Size']),
            'warna' => fake()->safeColorName(),
            'harga' => fake()->numberBetween(35000, 250000),
            'kondisi' => fake()->randomElement(['Like New', 'Good', 'Fair']), // Menyesuaikan ENUM kondisi
            'catatan_kondisi' => 'Pemakaian wajar, warna masih pekat.',
            'stok' => 1,
            'status' => 'available',
        ];
    }
}