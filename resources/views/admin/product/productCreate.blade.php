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
            <div class="col-sm-6"><h3 class="mb-0">Tambah Produk</h3></div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Produk</li>
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
                <div class="card-header"><div class="card-title">Tambah Produk</div></div>
                <!--end::Header-->
                <!--begin::Form-->
                <form action="{{ route('admin.product.insert') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                  <!--begin::Body-->
                  <div class="card-body">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
                      <input type="text" name="nama_produk" required class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Produk">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Kategori</label>
                      <select type="number" name="id_kategori" required class="form-control" id="exampleInputPassword1">
                        <option value="" disabled selected hidden>Pilih Kategori</option>
                        <option value="1">Tas</option>
                        <option value="2">Tenda</option>
                        <option value="3">Sepatu</option>
                        <option value="4">Pakaian</option>
                        <option value="5">Lainnya</option>
                      </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Harga</label>
                        <input type="number" name="harga" required class="form-control" id="exampleInputPassword1" placeholder="Masukkan Harga Produk">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
                        <input type="text" name="deskripsi_produk" required class="form-control" id="exampleInputPassword1" placeholder="Masukkan Deskripsi Produk">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Detail</label>
                        <input type="text" name="detail_produk" required class="form-control" id="exampleInputPassword1" placeholder="Masukkan Detail Produk | Beri tanda koma untuk detail">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Upload Gambar</label>
                      <div class="input-group mb-3">
                        <input type="file" class="form-control" id="inputGroupFile02" name="gambar">
                      </div>
                    </div>
                  </div>
                  <!--end::Body-->
                  <!--begin::Footer-->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan Data Produk</button>
                    <a href="{{ route('admin.product') }}" class="btn btn-warning">Kembali</a>
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