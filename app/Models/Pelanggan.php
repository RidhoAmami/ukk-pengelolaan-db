<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    //
    protected $fillable = ['nama', 'alamat', 'telepon'];

    // Relationships
    public function penjualan()
    {
        return $this->hasMany(Penjualan::class);
    }
}
