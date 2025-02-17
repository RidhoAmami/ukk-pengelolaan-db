<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    //
    protected $fillable = [
        'nama', 'harga', 'stok'
    ];

    protected $casts = [
        'harga' => 'decimal:2'
    ];

    public function getPrice(){
        return 'Rp ' . number_format($this->harga, 2, ',', '.');
    }

    public function details(){
        return $this->hasMany(DetailPenjualan::class);
    }
}
