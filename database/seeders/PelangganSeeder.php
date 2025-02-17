<?php

namespace Database\Seeders;

use App\Models\Pelanggan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Pelanggan::insert([
            [
                'nama' => 'Budi Santoso',
                'alamat' => 'Jl. Merdeka No. 10',
                'no_telp' => '081234567890'
            ],
            [
                'nama' => 'Ani Rahmawati',
                'alamat' => 'Jl. Mawar No. 15',
                'no_telp' => '081298765432'
            ]
        ]);
    }
}
