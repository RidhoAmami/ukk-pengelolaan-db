<?php

namespace Database\Seeders;

use App\Models\DetailPenjualan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailPenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DetailPenjualan::insert([
            [
                'penjualan_id' => 1,
                'produk_id' => 1,
                'jumlah' => 2
            ], [
                'penjualan_id' => 1,
                'produk_id' => 2,
                'jumlah' => 1
            ]
        ]);
    }
}
