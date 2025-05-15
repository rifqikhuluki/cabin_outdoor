<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pakets extends Model
{
    protected $table = 'pakets';

    protected $fillable = [
        'nama_paket',
        'harga',
        'gambar',
        'deskripsi_paket',
        'detail_paket'
    ];
}
