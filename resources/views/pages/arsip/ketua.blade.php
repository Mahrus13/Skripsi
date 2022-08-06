@extends('pages.dashboard.index')
@section('wrapper-header')
<div class="row align-items-center py-4">
  <div class="col-lg-6 col-7">
    <h6 class="h2 text-white d-inline-block mb-0">ARSIP NILAI</h6>
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
      <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
        <li class="breadcrumb-item"><a href="{{url('/home')}}"><i class="fas fa-home"></i></a></li>
        <li class="breadcrumb-item"><a href="{{url('/home')}}">Dashboards</a></li>
        <!-- <li class="breadcrumb-item active" aria-current="page">Default</li> -->
      </ol>
    </nav>
  </div>
  <div class="col-lg-6 col-5 text-right">
    <!-- <a href="#" class="btn btn-sm btn-neutral">New</a> -->
    <!-- <a href="#" class="btn btn-sm btn-neutral">Filters</a> -->
  </div>
</div>
@endsection
@section('wrapper-dashboard')
<div class="row">
  <div class="col">
    <?php $number = 0; ?>
      @foreach($periode as $data)
    <div class="card">
      <div class="card-header">
        <h3 class="mb-0">Data Tabel Arsip Nilai Ketua Periode {{date('d M Y', strtotime($data->periode))}}</h3>
        <p class="text-sm mb-0">
        </p>
      </div>
      <div class="table-responsive py-4">
        <table class="table table-striped table-bordered" id="datatable-basic{{++$number}}">
          <thead class="thead-light">
            <tr>
              <th>No</th>
              <th>Nama Alternatif</th>
              <th>Total Nilai</th>
              <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
            <?php $number1 = 0;?>
            <?php
              $b= DB::table('riwayat_penilaian_ketua')
                      ->join('periode_ketua', 'periode_ketua.id', '=', 'riwayat_penilaian_ketua.periode_id')
                      ->where('riwayat_penilaian_ketua.periode_id', $data->id)
                      ->orderBy('jumlah','desc')
                      ->orderBy('nilai_2','desc')
                      ->orderBy('nilai_3','desc')
                      ->orderBy('nilai_1','desc')
                      ->orderBy('nilai_5','desc')
                      ->orderBy('nilai_6','desc')
                      ->orderBy('nilai_4','desc')
                      ->orderBy('nilai_8','desc')
                      ->orderBy('nilai_7','desc')
                      // ->selectRaw('penilaian_ketua.*,alternatif_ketua.nama_alternatif,users.level')
                      // ->where('user_id', '=' , Auth::user()->id)
                      ->get();
                      // dd($arsip);
             ?>
            @foreach($b as $data1)
            <tr>
              <td>{{++$number1}}</td>
              <td>{{$data1->nama_alternatif}}</td>
              <td>{{$data1->jumlah}}</td>
              <td>
                <?php
                  if (($loop->iteration) == 1) {
                    $keterangan = 'Direkomendasikan Menjadi Ketua';
                  }elseif (($loop->iteration) == 2) {
                    $keterangan = 'Tidak Direkomendasikan Menjadi Ketua';
                  }elseif (($loop->iteration) == 3) {
                    $keterangan = 'Tidak Direkomendasikan Menjadi Ketua';
                  }elseif (($loop->iteration) == 4) {
                    $keterangan = 'Tidak Direkomendasikan Menjadi Ketua';
                  }else {
                    $keterangan = 'Tidak Direkomendasikan Menjadi Ketua';
                  }
                 ?>
                 <?php
                    if ($loop->iteration > 1) {
                      if (($data1->jumlah) == $b[0]->jumlah) {
                        $keterangan = 'Direkomendasikan Menjadi Ketua dan Dimusyawarahkan di luar sistem Karena memiliki nilai yang sama Bagusnya';
                      }
                    }else {
                      if (($b[0]->jumlah) == $b[1]->jumlah) {
                        $keterangan = 'Direkomendasikan Menjadi Ketua dan Dimusyawarahkan di luar sistem Karena memiliki nilai yang sama Bagusnya';
                      }else {
                        $keterangan = $keterangan;
                      }
                    }
                  ?>
                 {{$keterangan}}
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection
