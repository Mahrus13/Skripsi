@extends('pages.dashboard.index')
@section('wrapper-header')
<div class="row align-items-center py-4">
  <div class="col-lg-6 col-7">
    <h6 class="h2 text-white d-inline-block mb-0">Hasil Penilaian</h6>
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
  <!-- Modal Tambah-->
  <div class="modal fade" id="riwayatAnggota" tabindex="-1" role="dialog" aria-labelledby="kriteriaKetuaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="kriteriaKetuaLabel">Periode Pemilihan Anggota</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="riwayatAnggotaForm" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label class="form-control-label" style="float:left">Periode Penilaian</label>
              <input name="periode" class="form-control" type="date" value="2022-01-23" id="tl_alternatif-update">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- End Modal Tambah-->
</div>
@endsection
@section('wrapper-dashboard')
<div class="card-header">
  <h3 class="mb-0">Data Tabel Nilai Anggota</h3>
  <p class="text-sm mb-0">
  </p>
  <div class="text-right">
    @if($jumlah != 0)
    @if(Auth::user()->level == 'sekertaris')
    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#riwayatAnggota">
      <span class="btn-inner--text">Simpan ke Arsip</span>
    </button>
    @endif
    @endif
  </div>
</div>
<div class="table-responsive py-4">
  <table class="table table-flush" id="datatable-basic1">
    <thead class="thead-light">
      <tr>
        <th>No</th>
        <th>Nama Alternatif</th>
        <th>Nilai 1</th>
        <th>Nilai 2</th>
        <th>Nilai 3</th>
        <th>Nilai 4</th>
        <th>Jumlah</th>
        <th>Keterangan</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $number = 0;
      $jumlah = null;
      $banding = null;
      ?>
      @foreach($hasil as $key => $data)
      <tr>
        <td>{{++$number}}</td>
        <td>{{$data->nama_alternatif}}</td>
        <td>{{$data->total_1}}</td>
        <td>{{$data->total_2}}</td>
        <td>{{$data->total_3}}</td>
        <td>{{$data->total_4}}</td>
        <td>{{$data->total_nilai}}</td>
        <td>
          <?php
            if (($loop->iteration) == 1) {
              $keterangan = 'Direkomendasikan Menjadi Anggota KBIHU';
            }elseif (($loop->iteration) == 2) {
              $keterangan = 'Direkomendasikan Menjadi Anggota KBIHU';
            }else {
              $keterangan = 'Tidak Direkomendasikan Menjadi Anggota KBIHU';
            }
           ?>
           <?php
              if ($loop->iteration > 1) {
                if (($data->total_nilai) == $hasil[0]->total_nilai) {
                  $keterangan = 'Direkomendasikan Menjadi Ketua dan Dimusyawarahkan di luar sistem Karena memiliki nilai yang sama Bagusnya';
                }
              }else {
                if (($hasil[0]->total_nilai) == $hasil[1]->total_nilai) {
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
@endsection
@push('scripts')
<script>
//Tambah KriteriaKetua
$('#riwayatAnggotaForm').submit(function(e) {
  e.preventDefault();
  var periode = $("input[name=periode]");
  var _token = $("input[name=_token]");

  $.ajax({
    url: "{{route('riwayatAnggota.add')}}",
    type: "POST",
    data: {
      periode: periode.val(),
      _token: _token.val()
    },
    success: function(response) {
        Swal.fire({
         title: 'Data sedang diproses',
         timerProgressBar: true,
         didOpen: () => {
           Swal.showLoading()
         }
       });
      location.reload();
    }
  });
})
$('#riwayatAnggotaForm').validate({
  rules: {
    periode: {
      required: true,
      minlength: 4
    }
  },
  messages: {
    periode: {
      required: "Periode Tahun Tidak Boleh Kosong!",
      minlength: "Periode Tahun Minimal 4 Angka"
    }
  }
});
//Edit alternatif
function editKriteria(id) {
  var url = '{{route("kriteriaKetua.getbyid",":id")}}'
  url = url.replace(':id', id)
  $.get(url, function(kriteriaKetua) {
    $("#id").val(kriteriaKetua.id);
    $("#kode_kriteria-update").val(kriteriaKetua.kode_kriteria);
    $("#nama_kriteria-update").val(kriteriaKetua.nama_kriteria);
    $("#bobot_kriteria-update").val(kriteriaKetua.bobot_kriteria);
    $("#kriteriaEditModal").modal("toggle");
  });
}

$("#kriteriaEditForm").submit(function(e) {
  e.preventDefault();
  var id = $("#id").val();
  var kode_kriteria = $("#kode_kriteria-update").val();
  var nama_kriteria = $("#nama_kriteria-update").val();
  var bobot_kriteria = $("#bobot_kriteria-update").val();
  var _token = $("input[name=_token]").val();

  $.ajax({
    url: "{{route('kriteriaKetua.edit')}}",
    type: 'PUT',
    data: {
      id: id,
      kode_kriteria: kode_kriteria,
      nama_kriteria: nama_kriteria,
      bobot_kriteria: bobot_kriteria,
      _token: _token
    },
    success: function(response) {
      Swal.fire({
       title: 'Data sedang diproses',
       timerProgressBar: true,
       didOpen: () => {
         Swal.showLoading()
       }
     });
      location.reload();
    }
  });
})
$('#kriteriaEditForm').validate({
  rules: {
    kode_kriteria: {
      required: true,
      minlength: 2
    },
    nama_kriteria: {
      required: true,
      minlength: 2
    },
    bobot_kriteria: {
      required: true,
      minlength: 2
    }
  },
  messages: {
    kode_kriteria: {
      required: "Kode Kriteria Tidak Boleh Kosong!",
      minlength: "Kode Kriteria Minimal 2 Kode"
    },
    nama_kriteria: {
      required: "Nama Kriteria Tidak Boleh Kosong!",
      minlength: "Nama Kriteria Minimal 2 Huruf"
    },
    bobot_kriteria: {
      required: "Bobot Kriteria Tidak Boleh Kosong!",
      minlength: "Bobot Kriteria Minimal 2 Angka"
    }
  }
});

function deleteKriteria(id) {
  Swal.fire({
    title: "Apa kamu yakin?",
    text: "Anda tidak akan dapat memulihkan data undangan ini! Ya, hapus!",
    showCancelButton: true,
    icon: "warning",
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Ya, Hapus!",
    cancelButtonText: "Batal"
  }).then((result) => {
    if (result.isConfirmed) {
      var url = '{{route("kriteriaKetua.delete",":id")}}'
      url = url.replace(':id', id)
      $.ajax({
        url: url,
        type: 'DELETE',
        data: {
          _token: $("input[name=_token]").val()
        },
        beforeSend: function() {
          Swal.fire({
            title: 'Data sedang diproses',
            timerProgressBar: true,
            didOpen: () => {
              Swal.showLoading()
            }
          });
        },
        success: function(response) {
          location.reload();
        }
      })
    }
  })
}
</script>
@endpush
