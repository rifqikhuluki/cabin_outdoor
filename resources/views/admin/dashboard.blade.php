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
        <div class="col-sm-6"><h3 class="mb-0">Dashboard</h3></div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
        <!--begin::Col-->
        <div class="col-lg-3 col-6">
          <!--begin::Small Box Widget 1-->
          <div class="small-box text-bg-primary">
            <div class="inner">
              <p>DATA PRODUK</p>
            </div>
            <a
              href="{{ route('admin.product') }}"
              class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
            >
              More info <i class="bi bi-link-45deg"></i>
            </a>
          </div>
          <!--end::Small Box Widget 1-->
        </div>
        <!--end::Col-->
        <div class="col-lg-3 col-6">
          <!--begin::Small Box Widget 2-->
          <div class="small-box text-bg-success">
            <div class="inner">
              <p>DATA PAKET</p>
            </div>
            <a
              href="{{ route('admin.paket') }}"
              class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
            >
              More info <i class="bi bi-link-45deg"></i>
            </a>
          </div>
          <!--end::Small Box Widget 2-->
        </div>
        <!--end::Col-->
        </div>
        <!--end::Col-->
      </div>
    </div>
    <!--end::Container-->
  </div>
  <!--end::App Content-->
</main>
<!--end::App Main--> 
  
@endsection