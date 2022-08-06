@extends('pages.dashboard.index')
@section('wrapper-header')
<div class="row align-items-center py-4">
  <div class="col-lg-6 col-7">
    <h6 class="h2 text-white d-inline-block mb-0">Nilai KETUA</h6>
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

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#penilaianKetua">
      <span class="btn-inner--icon"><i class="fas fa-plus"></i></span>
      <span class="btn-inner--text">Tambah</span>
    </button>
    <!-- Modal Tambah-->
    <div class="modal fade" id="penilaianKetua" tabindex="-1" role="dialog" aria-labelledby="penilaianKetuaLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="penilaianKetuaLabel">Data Nilai Ketua</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="penilaianKetuaForm" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label class="form-control-label" style="float:left" for="alternatif_id">Nama Alternatif</label>
                <select name="alternatif_id" class="form-control" id="alternatif_id">
                  <option value="" hidden selected>--Pilih Alternatif--</option>
                  @foreach($alternatif as $data)
                  <option value="{{$data->id}}">{{$data->nama_alternatif}}</option>
                  @endforeach
                </select>
              </div>
              <?php $number = 0; ?>
              <?php $number1 = 0; ?>
              @foreach($kriteria as $data)
              <div class="form-group">
                <label class="form-control-label" style="float:left" for="alternatif_id">{{$data->nama_kriteria}}</label>
                <select name="nilai_{{++$number}}" class="form-control" id="nilai_{{++$number1}}">
                  <option value="" hidden selected>--Pilih Nilai--</option>
                  @foreach($data->SubKetua as $sub)
                  <option value="{{$sub->nilai}}">{{$sub->sub_kriteria}}</option>
                  @endforeach
                </select>
              </div>
              @endforeach
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
    <!-- Modal Edit  -->
    <div class="modal fade" id="penilaianEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Data Nilai</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="penilaianEditForm" enctype="multipart/form-data">
              @csrf
              <?php $number = 0; ?>
              <?php $number1 = 0; ?>
              @foreach($kriteria as $data)
              <input type="hidden" name="id" id="id">
              <div class="form-group">
                <label class="form-control-label" style="float:left" for="alternatif_id">{{$data->nama_kriteria}}</label>
                <select name="nilai_{{++$number}}" class="form-control" id="nilai_{{++$number1}}_update">
                  <option value="" hidden selected>--Pilih Nilai--</option>
                  <option value="4">4</option>
                  <option value="3">3</option>
                  <option value="2">2</option>
                  <option value="1">1</option>
                  <option value="0">0</option>
                </select>
              </div>
              @endforeach
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Modal Edit -->
  </div>
</div>
@endsection
@section('wrapper-dashboard')
<div class="card-header">
  <h3 class="mb-0">Data Tabel Nilai Ketua</h3>
  <p class="text-sm mb-0">
  </p>
</div>
<div class="table-responsive py-4">
  <table class="table table-striped table-bordered" id="datatable-basic1">
    <thead class="thead-light">
      <tr>
        <th>Alternatif</th>
        @foreach($kriteria as $data)
        <th>{{$data->kode_kriteria}}</th>
        @endforeach
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($penilaian as $nilai)
      <tr>
        <td>{{$nilai->nama_alternatif}}</td>
        <td>{{$nilai->nilai_1}}</td>
        <td>{{$nilai->nilai_2}}</td>
        <td>{{$nilai->nilai_3}}</td>
        <td>{{$nilai->nilai_4}}</td>
        <td>{{$nilai->nilai_5}}</td>
        <td>{{$nilai->nilai_6}}</td>
        <td>{{$nilai->nilai_7}}</td>
        <td>{{$nilai->nilai_8}}</td>
        <td>
          <a href="javascript:void(0)" onclick="editPenilaian({{$nilai->id}})" class="btn btn-icon btn-outline-info btn-sm" data-toggle="tooltip" data-original-title="Ubah">
            <i class="fas fa-user-edit"></i>
          </a>
          <a href="javascript:void(0)" onclick="deleteKriteria({{$nilai->id}})" class="btn btn-icon btn-outline-danger btn-sm" data-toggle="tooltip" data-original-title="Hapus">
            <i class="fas fa-trash"></i>
          </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
@push('scripts')
<script>
//Tambah PenilaianKetua
$('#penilaianKetuaForm').submit(function(e) {
  e.preventDefault();
  var alternatif_id = $("select[name=alternatif_id]");
  var nilai_1 = $("select[name=nilai_1]");
  var nilai_2 = $("select[name=nilai_2]");
  var nilai_3 = $("select[name=nilai_3]");
  var nilai_4 = $("select[name=nilai_4]");
  var nilai_5 = $("select[name=nilai_5]");
  var nilai_6 = $("select[name=nilai_6]");
  var nilai_7 = $("select[name=nilai_7]");
  var nilai_8 = $("select[name=nilai_8]");
  var _token = $("input[name=_token]");

  $.ajax({
    url: "{{route('penilaianKetua.tambah')}}",
    type: "POST",
    data: {
      alternatif_id: alternatif_id.val(),
      nilai_1: nilai_1.val(),
      nilai_2: nilai_2.val(),
      nilai_3: nilai_3.val(),
      nilai_4: nilai_4.val(),
      nilai_5: nilai_5.val(),
      nilai_6: nilai_6.val(),
      nilai_7: nilai_7.val(),
      nilai_8: nilai_8.val(),
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
$('#penilaianKetuaForm').validate({
  rules: {
    alternatif_id: {
      required: true
    },
    nilai_1: {
      required: true
    },
    nilai_2: {
      required: true
    },
    nilai_3: {
      required: true
    },
    nilai_4: {
      required: true
    },
    nilai_5: {
      required: true
    },
    nilai_6: {
      required: true
    },
    nilai_7: {
      required: true
    },
    nilai_8: {
      required: true
    },
  },
  messages: {
    alternatif_id: {
      required: "Nama Alternatif Tidak Boleh Kosong!"
    },
    nilai_1: {
      required: "Nilai Tidak Boleh Kosong!"
    },
    nilai_2: {
      required: "Nilai Tidak Boleh Kosong!"
    },
    nilai_3: {
      required: "Nilai Tidak Boleh Kosong!"
    },
    nilai_4: {
      required: "Nilai Tidak Boleh Kosong!"
    },
    nilai_5: {
      required: "Nilai Tidak Boleh Kosong!"
    },
    nilai_6: {
      required: "Nilai Tidak Boleh Kosong!"
    },
    nilai_7: {
      required: "Nilai Tidak Boleh Kosong!"
    },
    nilai_8: {
      required: "Nilai Tidak Boleh Kosong!"
    },
  }
});
//Edit ketua
function editPenilaian(id) {
  var url = '{{route("penilaianKetua.getbyid",":id")}}'
  url = url.replace(':id', id)
  $.get(url, function(penilaianKetua) {
    $("#id").val(penilaianKetua.id);
    $("#nilai_1_update").val(penilaianKetua.nilai_1);
    $("#nilai_2_update").val(penilaianKetua.nilai_2);
    $("#nilai_3_update").val(penilaianKetua.nilai_3);
    $("#nilai_4_update").val(penilaianKetua.nilai_4);
    $("#nilai_5_update").val(penilaianKetua.nilai_5);
    $("#nilai_6_update").val(penilaianKetua.nilai_6);
    $("#nilai_7_update").val(penilaianKetua.nilai_7);
    $("#nilai_8_update").val(penilaianKetua.nilai_8);
    $("#penilaianEditModal").modal("toggle");
  });
}

$("#penilaianEditForm").submit(function(e) {
  e.preventDefault();
  var id = $("#id").val();
  var nilai_1 = $("#nilai_1_update").val();
  var nilai_2 = $("#nilai_2_update").val();
  var nilai_3 = $("#nilai_3_update").val();
  var nilai_4 = $("#nilai_4_update").val();
  var nilai_5 = $("#nilai_5_update").val();
  var nilai_6 = $("#nilai_6_update").val();
  var nilai_7 = $("#nilai_7_update").val();
  var nilai_8 = $("#nilai_8_update").val();
  var _token = $("input[name=_token]").val();

  $.ajax({
    url: "{{route('penilaianKetua.edit')}}",
    type: 'PUT',
    data: {
      id: id,
      nilai_1: nilai_1,
      nilai_2: nilai_2,
      nilai_3: nilai_3,
      nilai_4: nilai_4,
      nilai_5: nilai_5,
      nilai_6: nilai_6,
      nilai_7: nilai_7,
      nilai_8: nilai_8,
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

function deleteKriteria(id) {
  Swal.fire({
    title: "Apa kamu yakin?",
    text: "Anda tidak akan dapat memulihkan data nilai ini! Ya, hapus!",
    showCancelButton: true,
    icon: "warning",
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Ya, Hapus!",
    cancelButtonText: "Batal"
  }).then((result) => {
    if (result.isConfirmed) {
      var url = '{{route("penilaianKetua.delete",":id")}}'
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
