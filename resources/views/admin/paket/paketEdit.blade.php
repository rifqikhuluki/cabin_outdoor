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
            <div class="col-sm-6"><h3 class="mb-0">Perbarui Paket</h3></div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Perbarui Paket</li>
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
            <div class="card card-primary card-outline mb-4">
                <!--begin::Header-->
                <div class="card-header"><div class="card-title">Perbarui Paket</div></div>
                <!--end::Header-->
                <!--begin::Form-->
                <form action="{{ route('admin.paket.update', ['id_paket' => $pakets->id_paket]) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                  <!--begin::Body-->
                  <div class="card-body">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nama Paket</label>
                      <input type="text" name="nama_paket" required class="form-control" id="exampleInputEmail1" value="{{ $pakets->nama_paket }}" placeholder="Masukkan Nama Produk">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Harga</label>
                        <input type="number" name="harga" required class="form-control" id="exampleInputPassword1" value="{{ $pakets->harga }}" placeholder="Masukkan Harga Produk">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
                        <input type="text" name="deskripsi_paket" required class="form-control" id="exampleInputPassword1" value="{{ $pakets->deskripsi_paket }}" placeholder="Masukkan Deskripsi Produk">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Detail</label>
                        <input type="text" name="detail_paket" required class="form-control" id="exampleInputPassword1" value="{{ $pakets->detail_paket }}" placeholder="Masukkan Detail Produk">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Upload Gambar</label>
                      <br>
                      <img src="{{ asset('/storage/images/' . $pakets->gambar) }}" alt="foto produk" width="200px">
                      <br>
                      <div class="input-group mb-3">
                        <input type="file" class="form-control" id="inputGroupFile02" name="gambar">
                      </div>
                    </div>
                  </div>
                  <!--end::Body-->
                  <!--begin::Footer-->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Perbarui Data Paket</button>
                    <a href="{{ route('admin.paket') }}" class="btn btn-warning">Kembali</a>
                  </div>
                  <!--end::Footer-->
                </form>
                <!--end::Form-->
              </div>
        <!--end::Container-->
        </div>
        <!--end::App Content-->
    </main>
    <!--end::App Main-->    

@endsection