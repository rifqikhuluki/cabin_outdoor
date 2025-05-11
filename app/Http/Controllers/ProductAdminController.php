<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ProductAdminController extends Controller
{
    function product()
    {
        $dataProduk = products::get();

        $produk = [
            'dataProduk' => $dataProduk
        ];

        return view('admin.product.productlist', $produk);
    }
    function create()
    {
        return view('admin.product.productCreate');
    }
    function insert(Request $request)
    {
        $dataInsert = $request->except('_token');
    
        $filename = $request->file('gambar')->getClientOriginalName();
        Storage::putFileAs('public/images', $request->file('gambar'), $filename);
        $dataInsert['gambar'] = $filename;
    
        products::create($dataInsert);
    
        return redirect()->route('admin.product');
    }    
    function edit($id_produk)
    {
        $produk = products::where('id_produk', $id_produk)->first();
        
        $data = [
            'produk' => $produk
        ];

        return view('admin.product.productEdit', $data);
    }
    function update(Request $request, $id_produk)
    {
        $nama = $request->input('nama_produk');
        $kategori = $request->input('id_kategori');
        $harga = $request->input('harga');
        $deskripsi = $request->input('deskripsi_produk');
        $detail = $request->input('detail_produk');

        $dataUpdate = [
            'nama_produk' => $nama,
            'id_kategori' => $kategori,
            'harga' => $harga,
            'deskripsi_produk' => $deskripsi,
            'detail_produk' => $detail,
        ];

        if ($request->hasFile('gambar')) {
            $filename = $request->file('gambar')->getClientOriginalName();
            Storage::putFileAs('public/images', $request->file('gambar'), $filename);
            $dataUpdate['gambar'] = $filename;
        }

        products::where('id_produk', $id_produk)->update($dataUpdate);

        return redirect()->route('admin.product');
    }
    function delete($id_produk)
    {
        $gambar = products::where('id_produk', $id_produk)->value('gambar');
        products::where('id_produk', $id_produk)->delete();

        Storage::delete('public/images/' .$gambar);

        return redirect()->route('admin.product');
    }
}
