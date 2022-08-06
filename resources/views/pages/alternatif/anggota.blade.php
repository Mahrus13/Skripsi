@extends('pages.dashboard.index')
@section('wrapper-header')
<div class="row align-items-center py-4">
  <div class="col-lg-6 col-7">
    <h6 class="h2 text-white d-inline-block mb-0">Alternatif Anggota</h6>
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
    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#AlternatifAnggota">
      <span class="btn-inner--icon"><i class="fas fa-plus"></i></span>
      <span class="btn-inner--text">Tambah</span>
    </button>
    @endif
    <!-- Modal Tambah-->
    <div class="modal fade" id="AlternatifAnggota" tabindex="-1" role="dialog" aria-labelledby="alternatifKetuaLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="alternatifKetuaLabel">Data Alternatif Anggota</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="alternatifAnggotaForm" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label class="form-control-label" style="float:left">Kode Alternatif</label>
                <input name="kode_alternatif" type="text" class="form-control" placeholder="A01" id="kode_alternatif">
              </div>
              <div class="form-group">
                <label class="form-control-label" style="float:left">Nama Alternatif</label>
                <input name="nama_alternatif" type="text" class="form-control" placeholder="Nama Alternatif" id="nama_alternatif">
              </div>
              <div class="form-group">
                <label class="form-control-label" style="float:left">TTL Alternatif</label>
                <div class="input-group">
                  <input name="t_alternatif" type="text" class="form-control" placeholder="Tempat Lahir" id="t_alternatif">
                  <div class="input-group-append">
                    <input name="tl_alternatif" class="form-control" type="date" value="2022-01-23" id="tl_alternatif">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="form-control-label" style="float:left">Alamat Alternatif</label>
                <input name="alamat_alternatif" type="text" class="form-control" placeholder="Alamat Alternatif" id="alamat_alternatif">
              </div>
              <div class="form-group">
                <label class="form-control-label" style="float:left">Telphone Alternatif</label>
                <input name="phone" type="number" class="form-control" placeholder="083xxxxxxxxx" id="phone">
              </div>
              <div class="form-group">
                <label class="form-control-label" style="float:left">Jenis Kelamin Alternatif</label>
                <select class="form-control" name="jk_alternatif">
                    <option value="" hidden selected>--Pilih Jenis Kelamin--</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
              </div>
              <div class="form-group">
                <label class="form-control-label" style="float:left">Pendidikan Alternatif</label>
                <select class="form-control" name="pendidikan_alternatif">
                    <option value="" hidden selected>--Pilih Pendidikan--</option>
                    <option value="S1">S1</option>
                    <option value="SLTA">SLTA</option>
                    <option value="SLTP">SLTP</option>
                    <option value="SD">SD</option>
                </select>
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
    <div class="modal fade" id="alternatifEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Data Alternatif</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="alternatifEditForm" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="id" id="id">
              <div class="form-group">
                <label class="form-control-label" style="float:left">Kode Alternatif</label>
                <input name="kode_alternatif" type="text" class="form-control" placeholder="Kode Alternatif" id="kode_alternatif-update">
              </div>
              <div class="form-group">
                <label class="form-control-label" style="float:left">Nama Alternatif</label>
                <input name="nama_alternatif" type="text" class="form-control" placeholder="Nama Alternatif" id="nama_alternatif-update">
              </div>
              <div class="form-group">
                <label class="form-control-label" style="float:left">TTL Alternatif</label>
                <div class="input-group">
                  <input name="t_alternatif" type="text" class="form-control" placeholder="Tempat Lahir" id="t_alternatif-update">
                  <div class="input-group-append">
                    <input name="tl_alternatif" class="form-control" type="date" value="2022-01-23" id="tl_alternatif-update">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="form-control-label" style="float:left">Alamat Alternatif</label>
                <input name="alamat_alternatif" type="text" class="form-control" placeholder="Alamat Alternatif" id="alamat_alternatif-update">
              </div>
              <div class="form-group">
                <label class="form-control-label" style="float:left">Telphone Alternatif</label>
                <input name="phone" type="number" class="form-control" placeholder="083xxxxxxxxx" id="phone-update">
              </div>
              <div class="form-group">
                <label class="form-control-label" style="float:left">Jenis Kelamin Alternatif</label>
                <select class="form-control" name="jk_alternatif" id="jk_alternatif-update">
                    <option value="" hidden selected>--Pilih Jenis Kelamin--</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
              </div>
              <div class="form-group">
                <label class="form-control-label" style="float:left">Pendidikan Alternatif</label>
                <select class="form-control" name="pendidikan_alternatif" id="pendidikan_alternatif-update">
                    <option value="" hidden selected>--Pilih Pendidikan--</option>
                    <option value="S1">S1</option>
                    <option value="SLTA">SLTA</option>
                    <option value="SLTP">SLTP</option>
                    <option value="SD">SD</option>
                </select>
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
  <h3 class="mb-0">Data Tabel Alternatif</h3>
  <p class="text-sm mb-0">
  </p>
</div>
<div class="table-responsive py-4">
  <table class="table table-striped table-bordered" id="datatable-basic1">
    <thead class="thead-light">
      <tr>
        <th>Kode Alternatif</th>
        <th>Nama Alternatif</th>
        <th>TTL Alternatif</th>
        <th>Alamat Alternatif</th>
        <th>Telphone Alternatif</th>
        <th>Jenis Kelamin Alternatif</th>
        <th>Pendidikan Alternatif</th>
        @if(Auth::user()->level == 'sekertaris')
        <th>Aksi</th>
        @endif
      </tr>
    </thead>
    <tbody>
      @foreach($anggota as $data)
      <tr id="sid{{$data->id}}">
        <td>{{$data->kode_alternatif}}</td>
        <td>{{$data->nama_alternatif}}</td>
        <td>{{$data->t_alternatif}}, {{date('d M Y', strtotime($data->tl_alternatif))}}</td>
        <td>{{$data->alamat_alternatif}}</td>
        <td>{{$data->telp_alternatif}}</td>
        <td>{{$data->jk_alternatif}}</td>
        <td>{{$data->pendidikan_alternatif}}</td>
        @if(Auth::user()->level == 'sekertaris')
        <td>
          <a href="javascript:void(0)" onclick="editAlternatif({{$data->id}})" class="btn btn-icon btn-outline-info btn-sm" data-toggle="tooltip" data-original-title="Ubah">
            <i class="fas fa-user-edit"></i>
          </a>
          <a href="javascript:void(0)" onclick="deleteAlternatif({{$data->id}})" class="btn btn-icon btn-outline-danger btn-sm" data-toggle="tooltip" data-original-title="Hapus">
            <i class="fas fa-trash"></i>
          </a>
        </td>
        @endif
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
@push('scripts')
<script>
//Tambah alternatifKetua
$('#alternatifAnggotaForm').submit(function(e) {
  e.preventDefault();
  var kode_alternatif = $("input[name=kode_alternatif]");
  var nama_alternatif = $("input[name=nama_alternatif]");
  var t_alternatif = $("input[name=t_alternatif]");
  var tl_alternatif = $("input[name=tl_alternatif]");
  var alamat_alternatif = $("input[name=alamat_alternatif]");
  var phone = $("input[name=phone]");
  var jk_alternatif = $("select[name=jk_alternatif]");
  var pendidikan_alternatif = $("select[name=pendidikan_alternatif]");
  var _token = $("input[name=_token]");

  $.ajax({
    url: "{{route('alternatifAnggota.tambah')}}",
    type: "POST",
    data: {
      kode_alternatif: kode_alternatif.val(),
      nama_alternatif: nama_alternatif.val(),
      t_alternatif: t_alternatif.val(),
      tl_alternatif: tl_alternatif.val(),
      alamat_alternatif: alamat_alternatif.val(),
      phone: phone.val(),
      jk_alternatif: jk_alternatif.val(),
      pendidikan_alternatif: pendidikan_alternatif.val(),
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
$('#alternatifAnggotaForm').validate({
  rules: {
    kode_alternatif: {
      required: true,
      minlength: 2,
    },
    nama_alternatif: {
      required: true,
      minlength: 2
    },
    t_alternatif: {
      required: true,
    },
    alamat_alternatif: {
      required: true,
    },
    phone: {
      required: true,
      minlength: 10,
      maxlength: 12
    },
    jk_alternatif: {
      required: true,
    },
    pendidikan_alternatif: {
      required: true,
    },
  },
  messages: {
    kode_alternatif: {
      required: "Kode Alternatif Tidak Boleh Kosong!",
      minlength: "Kode Alternatif Minimal 2 Kode"
    },
    nama_alternatif: {
      required: "Nama Alternatif Tidak Boleh Kosong!",
      minlength: "Nama Alternatif Minimal 2 Huruf"
    },
    t_alternatif: {
      required: "Tempat Lahir Alternatif Tidak Boleh Kosong!",
    },
    alamat_alternatif: {
      required: "Alamat Alternatif Tidak Boleh Kosong!",
    },
    phone: {
      required: "Telphone Alternatif Tidak Boleh Kosong!",
      minlength: "Telphone Alternatif Minimal 10 angka",
      maxlength: "Telphone Alternatif Minimal 12 angka",
    },
    jk_alternatif: {
      required: "Alamat Alternatif Tidak Boleh Kosong!",
    },
    pendidikan_alternatif: {
      required: "Alamat Alternatif Tidak Boleh Kosong!",
    },
  }
});

//Edit alternatif
function editAlternatif(id) {
  var url = '{{route("alternatifAnggota.getbyid",":id")}}'
  url = url.replace(':id', id)
  $.get(url, function(alternatifAnggota) {
    $("#id").val(alternatifAnggota.id);
    $("#kode_alternatif-update").val(alternatifAnggota.kode_alternatif);
    $("#nama_alternatif-update").val(alternatifAnggota.nama_alternatif);
    $("#t_alternatif-update").val(alternatifAnggota.t_alternatif);
    $("#tl_alternatif-update").val(alternatifAnggota.tl_alternatif);
    $("#alamat_alternatif-update").val(alternatifAnggota.alamat_alternatif);
    $("#phone-update").val(alternatifAnggota.telp_alternatif);
    $("#jk_alternatif-update").val(alternatifAnggota.jk_alternatif);
    $("#pendidikan_alternatif-update").val(alternatifAnggota.pendidikan_alternatif);
    $("#alternatifEditModal").modal("toggle");
  });
}

$("#alternatifEditForm").submit(function(e) {
  e.preventDefault();
  var id = $("#id").val();
  var kode_alternatif = $("#kode_alternatif-update").val();
  var nama_alternatif = $("#nama_alternatif-update").val();
  var t_alternatif = $("#t_alternatif-update").val();
  var tl_alternatif = $("#tl_alternatif-update").val();
  var alamat_alternatif = $("#alamat_alternatif-update").val();
  var telp_alternatif = $("#phone-update").val();
  var jk_alternatif = $("#jk_alternatif-update").val();
  var pendidikan_alternatif = $("#pendidikan_alternatif-update").val();
  var _token = $("input[name=_token]").val();

  $.ajax({
    url: "{{route('alternatifAnggota.edit')}}",
    type: 'PUT',
    data: {
      id: id,
      kode_alternatif: kode_alternatif,
      nama_alternatif: nama_alternatif,
      t_alternatif: t_alternatif,
      tl_alternatif: tl_alternatif,
      alamat_alternatif: alamat_alternatif,
      phone: telp_alternatif,
      jk_alternatif: jk_alternatif,
      pendidikan_alternatif: pendidikan_alternatif,
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
$('#alternatifEditForm').validate({
  rules: {
    kode_alternatif: {
      required: true,
      minlength: 2,
    },
    nama_alternatif: {
      required: true,
      minlength: 2
    },
    t_alternatif: {
      required: true,
    },
    alamat_alternatif: {
      required: true,
    },
    phone: {
      required: true,
      minlength: 10,
      maxlength: 12
    },
    jk_alternatif: {
      required: true,
    },
    pendidikan_alternatif: {
      required: true,
    },
  },
  messages: {
    kode_alternatif: {
      required: "Kode Alternatif Tidak Boleh Kosong!",
      minlength: "Kode Alternatif Minimal 2 Kode"
    },
    nama_alternatif: {
      required: "Nama Alternatif Tidak Boleh Kosong!",
      minlength: "Nama Alternatif Minimal 2 Huruf"
    },
    t_alternatif: {
      required: "Tempat Lahir Alternatif Tidak Boleh Kosong!",
    },
    alamat_alternatif: {
      required: "Alamat Alternatif Tidak Boleh Kosong!",
    },
    phone: {
      required: "Telphone Alternatif Tidak Boleh Kosong!",
      minlength: "Telphone Alternatif Minimal 10 angka",
      maxlength: "Telphone Alternatif Minimal 12 angka",
    },
    jk_alternatif: {
      required: "Alamat Alternatif Tidak Boleh Kosong!",
    },
    pendidikan_alternatif: {
      required: "Alamat Alternatif Tidak Boleh Kosong!",
    },
  }
});

function deleteAlternatif(id) {
  Swal.fire({
    title: "Apa kamu yakin?",
    text: "Anda tidak akan dapat memulihkan data alternatif ini! Ya, hapus!",
    showCancelButton: true,
    icon: "warning",
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Ya, Hapus!",
    cancelButtonText: "Batal"
  }).then((result) => {
    if (result.isConfirmed) {
      var url = '{{route("alternatifAnggota.delete",":id")}}'
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
