<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pakets extends Model
{
    protected $table = 'pakets'; // Pastikan ini sesuai dengan nama tabel di database

    protected $fillable = [
        'nama_paket',
        'harga',
        'gambar',
        'deskripsi_paket',
        'detail_paket'
    ];
}
