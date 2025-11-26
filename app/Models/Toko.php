<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Toko extends Model
{
    protected $table = 'toko';

    protected $fillable = [
        'user_id',
        'nama_toko',
        // kolom lain
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id'); // sesuaikan dengan nama kolom FK
    }

    public function produks()
    {
        return $this->hasMany(Produk::class, 'store_id');
    }
}
