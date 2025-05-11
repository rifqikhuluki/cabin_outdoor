<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table = 'products';

    protected $primaryKey = 'id_produk';

    protected $fillable = [
        'nama_produk',
        'id_kategori',
        'harga',
        'deskripsi_produk',
        'detail_produk',
        'gambar',
    ];

    public function category()
    {
        return $this->belongsTo(Categories::class, 'id_kategori', 'id_kategori');
    }
}
