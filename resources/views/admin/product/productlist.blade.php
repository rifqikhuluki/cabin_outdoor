@extends('admin.layout')

@section('content')

    <!--begin::App Main-->
    <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
            <div class="col-sm-6"><h3 class="mb-0">List Produk</h3></div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">List Produk</li>
                </ol>
            </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
            <div class="col-md-12">
                <div class="card mb-6">
                <div class="card-header"><h3 class="card-title">List Produk</h3>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('admin.product.create') }}" type="button" class="btn btn-success">Tambah Data</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="table-responsive">
                    <table class="table font-md-small table-bordered" >
                    <thead>
                        <tr>
                        <th style="width: 10px">id</th>
                        <th>Gambar</th>
                        <th>Kategori</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Deskripsi</th>
                        <th>Detail</th>
                        <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataProduk as $row)
                        <tr >
                            <td>{{ $row->id_produk }}.</td>
                            <td>
                                <img src="{{ asset('/storage/images/' . $row->gambar) }}" 
                                    alt="foto produk"
                                    class="img-fluid d-block mx-auto"
                                    style="max-width: 200px; width: 100%;">
                            </td>
                            <td>{{ $row->id_kategori }}</td>
                            <td>{{ $row->nama_produk }}</td>
                            <td>{{ $row->harga }}</td>
                            <td>{{ $row->deskripsi_produk }}</td>
                            <td>
                                <ul>
                                @foreach (explode(',', $row->detail_produk) as $detail)
                                    <li>{{ trim($detail) }}</li>
                                @endforeach
                                </ul>
                            </td>
                            <td>
                                <div class="btn-group mb-2" role="group" aria-label="Basic mixed styles example">
                                    <a href="{{ route('admin.product.edit', ['id_produk' => $row->id_produk]) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ route('admin.product.delete', ['id_produk' => $row->id_produk]) }}"type="button" class="btn btn-danger">Delete</a>
                                  </div>
                            </td>

                        </tr>
                            
                        @endforeach
                    </tbody>
                    </table>
                </div>
        <!--end::Container-->
        </div>
        <!--end::App Content-->
    </main>
    <!--end::App Main-->    

@endsection