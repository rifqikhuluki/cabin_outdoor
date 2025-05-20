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
            <div class="col-sm-6"><h3 class="mb-0">List Paket</h3></div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">List Paket</li>
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
                <div class="card-header"><h3 class="card-title">List Paket</h3>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('admin.paket.create') }}" type="button" class="btn btn-success">Tambah Data</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="table-responsive">
                    <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th style="width: 10px">id</th>
                        <th class="d-none d-sm-table-cell">Gambar</th>
                        <th>Nama</th>
                        <th class="d-none d-sm-table-cell">Harga</th>
                        <th class="d-none d-sm-table-cell">Deskripsi</th>
                        <th class="d-none d-sm-table-cell">Detail</th>
                        <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataPaket as $row)
                        <tr>
                            <td>{{ $row->id_paket }}</td>
                            <td class="d-none d-sm-table-cell">
                                <img src="{{ asset('/storage/images/' . $row->gambar) }}" 
                                    class="img-fluid d-block mx-auto"
                                    style="max-width: 200px; width: 100%;">
                            </td>
                            <td>{{ $row->nama_paket }}</td>
                            <td class="d-none d-sm-table-cell">{{ $row->harga }}</td>
                            <td class="d-none d-sm-table-cell">{{ $row->deskripsi_paket }}</td>
                            <td class="d-none d-sm-table-cell">
                                <ul>
                                @foreach (explode(',', $row->detail_paket) as $detail)
                                    <li>{{ trim($detail) }}</li>
                                @endforeach
                                </ul>
                            </td>
                            <td>
                                <div class="btn-group mb-2" role="group" aria-label="Basic mixed styles example">
                                    <a href="{{ route('admin.paket.edit', ['id_paket' => $row->id_paket]) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ route('admin.paket.delete', ['id_paket' => $row->id_paket]) }}"type="button" class="btn btn-danger">Delete</a>
                                  </div>
                            </td>

                        </tr>
                            
                        @endforeach
                    </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                </div>
        <!--end::Container-->
        </div>
        <!--end::App Content-->
    </main>
    <!--end::App Main-->    

@endsection