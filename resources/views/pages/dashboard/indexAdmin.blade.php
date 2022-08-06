@extends('pages.dashboard.wrapper2')
@section('wrapper-header')
<div class="row align-items-center py-4">
  <div class="col-lg-6 col-7">
    <h6 class="h2 text-white d-inline-block mb-0">Home</h6>
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
      <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
        <li class="breadcrumb-item"><a href="{{url('/home')}}"><i class="fas fa-home"></i></a></li>
        <li class="breadcrumb-item"><a href="{{url('/home')}}">Dashboards</a></li>
        <!-- <li class="breadcrumb-item active" aria-current="page">Default</li> -->
      </ol>
    </nav>
  </div>
  <!-- <div class="col-lg-6 col-5 text-right">
    <a href="#" class="btn btn-sm btn-neutral">New</a>
    <a href="#" class="btn btn-sm btn-neutral">Filters</a>
  </div> -->
</div>
@endsection
@section('wrapper-dashboard')
<!-- Card stats -->
<div class="row">
  @foreach($users as $data)
  <div class="col-xl-3 col-md-6">
    <div class="card card-stats">
      <!-- Card body -->
      <div class="card-body">
        <div class="row">
          <div class="col">
            @if($data->level == 'sekertaris')
            <h5 class="card-title text-uppercase text-muted mb-0">Admin</h5>
            @else
            <h5 class="card-title text-uppercase text-muted mb-0">Penilai</h5>
            @endif
            <span class="h2 font-weight-bold mb-0">{{$data->name}}</span>
          </div>
          <div class="col-auto">
            <div class="icon icon-shape bg-gradient-success text-white rounded-circle shadow">
              <i class="ni ni-circle-08"></i>
            </div>
          </div>
        </div>
        <p class="mt-3 mb-0 text-sm">
          <span class="text-danger"></span>
          @if($data->level == 'aPDM')
          <span class="text-nowrap">Anggota Dari PDM</span>
          @else
          <span class="text-nowrap">Anggota Dari KBIHU</span>
          @endif
        </p>
      </div>
    </div>
  </div>
  @endforeach
</div>
<div class="row">
  <div class="card">
    <section class="py-6">
       <div class="container">
         <div class="row row-grid align-items-center">
           <div class="col-md-6 order-md-2">
             <img src="./assets/img/theme/logo1.png" class="img-fluid">
           </div>
           <div class="col-md-6 order-md-1">
             <div class="pr-md-5">
               <h1>KELOMPOK BIMBINGAN IBADAH HAJI DAN UMRAH</h1>
               <p>Kelompok Bimbingan Haji (KBIHU) Jabal Nur Merupakan Salah satu amal usaha Pimpinan Daerah Muhammad Diyah Sidoarjo didirikan dengan tujuan untuk membantu dan melayani bimbingan ibadah haji dan umroh bagi umat islam sesuai tuntunan Rasulullah SAW. Sejak tahun 1996 telah melaksanakan manasik di tanah air dan atas permintaan para jamaah tahun 2000 melaksanakan bimbingan di tanah suci.Kemudian tahun 2001 menjalin kerjasama dengan muassasah di Arab Saudi Dalam Rangka memantapkan Bimbingannya. Sampai saat ini 2000 lebih jamaah yang berasal dari semua kalangan masyarakat telah berhasil di bimbing KBIHU Jabal Nur.</p>
               <!-- <a href="./pages/widgets.html" class="font-weight-bold text-info mt-5">Explore widgets</a> -->
             </div>
           </div>
         </div>
       </div>
     </section>
  </div>
</div>
@endsection
