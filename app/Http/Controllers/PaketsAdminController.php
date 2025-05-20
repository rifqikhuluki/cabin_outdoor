<?php

namespace App\Http\Controllers;

use App\Models\pakets;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class PaketsAdminController extends Controller
{
    function paket()
    {
        $dataPaket = pakets::get();

        $paket = [
            'dataPaket' => $dataPaket
        ];

        return view('admin.paket.paketlist', $paket);
    }
    function create()
    {
        return view('admin.paket.paketCreate');
    }
    function insert(Request $request)
    {
        $dataInsert = $request->validate([
            'nama_paket' => 'required|string',
            'harga' => 'required|numeric',
            'deskripsi_paket' => 'required|string',
            'detail_paket' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg',
        ]);
    
        $filename = $request->file('gambar')->getClientOriginalName();
        Storage::putFileAs('public/images', $request->file('gambar'), $filename);
        $dataInsert['gambar'] = $filename;
    
        pakets::create($dataInsert);
    
        return redirect()->route('admin.paket');
    }    
    function edit($id_paket)
    {
        $paket = pakets::where('id_paket', $id_paket)->first();
        
        $data = [
            'pakets' => $paket
        ];

        return view('admin.paket.paketEdit', $data);
    }
    function update(Request $request, $id_paket)
    {
        $nama = $request->input('nama_paket');
        $harga = $request->input('harga');
        $deskripsi = $request->input('deskripsi_paket');
        $detail = $request->input('detail_paket');

        $dataUpdate = [
            'nama_paket' => $nama,
            'harga' => $harga,
            'deskripsi_paket' => $deskripsi,
            'detail_paket' => $detail,
        ];

        if ($request->hasFile('gambar')) {
            $filename = $request->file('gambar')->getClientOriginalName();
            Storage::putFileAs('public/images', $request->file('gambar'), $filename);
            $dataUpdate['gambar'] = $filename;
        }

        pakets::where('id_paket', $id_paket)->update($dataUpdate);

        return redirect()->route('admin.paket');
    }
    function delete($id_paket)
    {
        $gambar = pakets::where('id_paket', $id_paket)->value('gambar');
        pakets::where('id_paket', $id_paket)->delete();

        Storage::delete('public/images/' .$gambar);

        return redirect()->route('admin.paket');
    }
}
