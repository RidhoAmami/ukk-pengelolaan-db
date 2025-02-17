<?php

namespace Database\Seeders;

use App\Models\Penjualan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Penjualan::insert([
            [
                'tanggal' => now(),
                'total_harga' => 200000,
                'pelanggan_id' => 1
            ],
        ]);
    }
}
