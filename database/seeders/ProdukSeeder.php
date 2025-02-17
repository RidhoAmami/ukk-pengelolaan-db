<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Produk::insert([
            [
                'nama' => 'Kemeja',
                'harga' => 50000,
                'stok' => 100
            ], [
                'nama' => 'Celana Jeans',
                'harga' => 150000,
                'stok' => 50
            ]
        ]);
    }
}
