@extends('pages.dashboard.index')
@section('wrapper-header')
<div class="row align-items-center py-4">
  <div class="col-lg-6 col-7">
    <h6 class="h2 text-white d-inline-block mb-0">SUB KRITERIA</h6>
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
    @if(Auth::user()->level == 'sekertaris')
    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#subkriteriaKetua">
      <span class="btn-inner--icon"><i class="fas fa-plus"></i></span>
      <span class="btn-inner--text">Tambah</span>
    </button>
    @endif
    <!-- Modal Tambah-->
    <div class="modal fade" id="subkriteriaKetua" tabindex="-1" role="dialog" aria-labelledby="subkriteriaKetuaLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="subkriteriaKetuaLabel">Data Sub Kriteria Ketua</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="subkriteriaKetuaForm" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label class="form-control-label" style="float:left" for="exampleFormControlSelect1">Nama Kriteria</label>
                <select name="kriteriaketua_id" class="form-control" id="exampleFormControlSelect1">
                  <option value="" hidden selected>--Pilih Kriteria--</option>
                  @foreach($ketua as $data)
                  <option value="{{$data->id}}">{{$data->nama_kriteria}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label class="form-control-label" style="float:left" for="exampleFormControlSelect2">Sub Kriteria</label>
                <select name="sub_kriteria" class="form-control" id="exampleFormControlSelect2">
                  <option value="" hidden selected>--Pilih Sub Kriteria--</option>
                  <option value="Sangat Baik">Sangat Baik</option>
                  <option value="Baik">Baik</option>
                  <option value="Cukup">Cukup</option>
                  <option value="Kurang Cukup">Kurang Cukup</option>
                  <option value="Kurang">Kurang</option>
                </select>
              </div>
              <div class="form-group">
                <label class="form-control-label" style="float:left" for="exampleFormControlSelect3">Nilai Kriteria</label>
                <select name="nilai" class="form-control" id="exampleFormControlSelect3">
                  <option value="" hidden selected>--Pilih Nilai--</option>
                  <option value="4">4</option>
                  <option value="3">3</option>
                  <option value="2">2</option>
                  <option value="1">1</option>
                  <option value="0">0</option>
                </select>
              </div>
              <div class="form-group">
                <label class="form-control-label" style="float:left">Keterangan Kriteria</label>
                <input name="keterangan" type="text" class="form-control" placeholder="Keterangan Kriteria" id="keterangan">
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
    <!-- Modal Edit  -->
    <div class="modal fade" id="subkriteriaEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Data Kriteria</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="subEditForm" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="id" id="id">
              <div class="form-group">
                <label class="form-control-label" style="float:left" for="exampleFormControlSelect1">Sub Kriteria</label>
                <select name="sub_kriteria" class="form-control" id="sub_update">
                  <option value="" hidden selected>--Pilih Sub Kriteria--</option>
                  <option value="Sangat Baik">Sangat Baik</option>
                  <option value="Baik">Baik</option>
                  <option value="Cukup">Cukup</option>
                  <option value="Kurang Cukup">Kurang Cukup</option>
                  <option value="Kurang">Kurang</option>
                </select>
              </div>
              <div class="form-group">
                <label class="form-control-label" style="float:left" for="exampleFormControlSelect2">Nilai Kriteria</label>
                <select name="nilai" class="form-control" id="nilai_update">
                  <option value="" hidden selected>--Pilih Nilai--</option>
                  <option value="4">4</option>
                  <option value="3">3</option>
                  <option value="2">2</option>
                  <option value="1">1</option>
                  <option value="0">0</option>
                </select>
              </div>
              <div class="form-group">
                <label class="form-control-label" style="float:left">Keterangan Kriteria</label>
                <input name="keterangan" type="text" class="form-control" placeholder="Keterangan Kriteria" id="keterangan_update">
              </div>
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
  <h3 class="mb-0">Data Tabel Sub Kriteria Ketua</h3>
  <p class="text-sm mb-0">
  </p>
</div>
<div class="table-responsive py-4">
  <table class="table table-striped table-bordered" id="datatable-basic1">
    <thead class="thead-light">
      <tr>
        <th>No</th>
        <th>Nama Kriteria</th>
        <th>Sub Kriteria</th>
      </tr>
    </thead>
    <tbody>
      <?php $number = 0; ?>
      @foreach($hasil as $data)
      <tr>
        <td>{{++$number}}</td>
        <td><p>{{$data->nama_kriteria}}</p></td>
        <td>
          @foreach($data->SubKetua as $sub)
  				<p>
            {{$sub->nilai}} &nbsp;
            {{$sub->sub_kriteria}} &nbsp; ({{$sub->keterangan}}) &nbsp;
            @if(Auth::user()->level == 'sekertaris')
            <a href="javascript:void(0)" onclick="editsubKriteria({{$sub->id}})" data-toggle="tooltip" data-original-title="Ubah">
              <i style="color:black;" class="fa fa-pen"></i>
            </a>
            <a href="javascript:void(0)" onclick="deletesubKriteria({{$sub->id}})" data-toggle="tooltip" data-original-title="Hapus">
              <i style="color:red;" class="fas fa-trash"></i>
            </a>
            @endif
          </p>
  				@endforeach
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
$('#subkriteriaKetuaForm').submit(function(e) {
  e.preventDefault();
  var kriteriaketua_id = $("select[name=kriteriaketua_id]");
  var sub_kriteria = $("select[name=sub_kriteria]");
  var nilai = $("select[name=nilai]");
  var keterangan = $("input[name=keterangan]");
  var _token = $("input[name=_token]");

  $.ajax({
    url: "{{route('SubKetua.tambah')}}",
    type: "POST",
    data: {
      kriteriaketua_id: kriteriaketua_id.val(),
      sub_kriteria: sub_kriteria.val(),
      nilai: nilai.val(),
      keterangan: keterangan.val(),
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
$('#subkriteriaKetuaForm').validate({
  rules: {
    kriteriaketua_id: {
      required: true
    },
    sub_kriteria: {
      required: true
    },
    nilai: {
      required: true
    },
    keterangan: {
      required: true
    }
  },
  messages: {
    kriteriaketua_id: {
      required: "Nama Kriteria Tidak Boleh Kosong!"
    },
    sub_kriteria: {
      required: "Sub Kriteria Tidak Boleh Kosong!"
    },
    nilai: {
      required: "Nilai Kriteria Tidak Boleh Kosong!"
    },
    keterangan: {
      required: "Keterangan Kriteria Tidak Boleh Kosong!"
    },
  }
});
//Edit Invitation
function editsubKriteria(id) {
  var url = '{{route("SubKetua.getbyid",":id")}}'
  url = url.replace(':id', id)
  $.get(url, function(subkriteriaKetua) {
    $("#id").val(subkriteriaKetua.id);
    $("#sub_update").val(subkriteriaKetua.sub_kriteria);
    $("#nilai_update").val(subkriteriaKetua.nilai);
    $("#keterangan_update").val(subkriteriaKetua.keterangan);
    $("#subkriteriaEditModal").modal("toggle");
  });
}

$("#subEditForm").submit(function(e) {
  e.preventDefault();
  var id = $("#id").val();
  var sub_kriteria = $("#sub_update").val();
  var nilai = $("#nilai_update").val();
  var keterangan = $("#keterangan_update").val();
  var _token = $("input[name=_token]").val();

  $.ajax({
    url: "{{route('SubKetua.edit')}}",
    type: 'PUT',
    data: {
      id: id,
      sub_kriteria: sub_kriteria,
      nilai: nilai,
      keterangan: keterangan,
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

function deletesubKriteria(id) {
  Swal.fire({
    title: "Apa kamu yakin?",
    text: "Anda tidak akan dapat memulihkan data sub kriteria ini! Ya, hapus!",
    showCancelButton: true,
    icon: "warning",
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Ya, Hapus!",
    cancelButtonText: "Batal"
  }).then((result) => {
    if (result.isConfirmed) {
      var url = '{{route("SubKetua.delete",":id")}}'
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
