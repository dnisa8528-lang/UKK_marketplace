<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProdukGambar;
use App\Models\Toko;

class Produk extends Model
{
    protected $table = 'produk';

    protected $fillable = [
        'nama_produk',
        'harga',
        'stok',
        'store_id',
    ];

    // public function gambars()
    // {
    //     return $this->hasMany(ProdukGambar::class, 'produk_id');
    // }

    public function toko()
    {
        return $this->belongsTo(Toko::class, 'store_id');
    }
}
