<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    protected $primaryKey = 'id_kategori';

    public function products()
    {
        return $this->hasMany(Products::class, 'id_kategori', 'id_kategori');
    }
}
