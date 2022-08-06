@extends('pages.dashboard.index')
@section('wrapper-header')
<div class="row align-items-center py-4">
  <div class="col-lg-6 col-7">
    <h6 class="h2 text-white d-inline-block mb-0">KRITERIA</h6>
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
    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#kriteriaAnggota">
      <span class="btn-inner--icon"><i class="fas fa-plus"></i></span>
      <span class="btn-inner--text">Tambah</span>
    </button>
    @endif
    <!-- Modal Tambah-->
    <div class="modal fade" id="kriteriaAnggota" tabindex="-1" role="dialog" aria-labelledby="kriteriaKetuaLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="kriteriaAnggotaLabel">Data Kriteria Anggota</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="kriteriaAnggotaForm" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label class="form-control-label" style="float:left">Kode Kriteria</label>
                <input name="kode_kriteria" type="text" class="form-control" placeholder="K01" id="kode_kriteria">
              </div>
              <div class="form-group">
                <label class="form-control-label" style="float:left">Nama Kriteria</label>
                <input name="nama_kriteria" type="text" class="form-control" placeholder="Nama Kriteria" id="nama_kriteria">
              </div>
              <div class="form-group">
                <label class="form-control-label" style="float:left">Bobot Kriteria</label>
                <input name="bobot_kriteria" type="number" min="1" max="100" class="form-control" placeholder="1-100" id="bobot_kriteria">
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
    <div class="modal fade" id="kriteriaEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Data Kriteria</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="kriteriaEditForm" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="id" id="id">
              <div class="form-group">
                <label class="form-control-label" style="float:left">Kode Kriteria</label>
                <input name="kode_kriteria" type="text" class="form-control" placeholder="Kode Kriteria" id="kode_kriteria-update">
              </div>
              <div class="form-group">
                <label class="form-control-label" style="float:left">Nama Kriteria</label>
                <input name="nama_kriteria" type="text" class="form-control" placeholder="Nama Kriteria" id="nama_kriteria-update">
              </div>
              <div class="form-group">
                <label class="form-control-label" style="float:left">Bobot Kriteria</label>
                <input name="bobot_kriteria" type="float" class="form-control" placeholder="0.00" id="bobot_kriteria-update">
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
  <h3 class="mb-0">Data Tabel Kriteria Anggota</h3>
  <p class="text-sm mb-0">
  </p>
</div>
<div class="table-responsive py-4">
  <table class="table table-flush" id="datatable-basic1">
    <thead class="thead-light">
      <tr>
        <th>Kode Kriteria</th>
        <th>Nama Kriteria</th>
        <th>Bobot Kriteria</th>
        @if(Auth::user()->level == 'sekertaris')
        <th>Aksi</th>
        @endif
      </tr>
    </thead>
    <tbody>
      @foreach($anggota as $data)
      <tr id="sid{{$data->id}}">
        <td>{{$data->kode_kriteria}}</td>
        <td>{{$data->nama_kriteria}}</td>
        <td>{{$data->bobot_kriteria}}</td>
        @if(Auth::user()->level == 'sekertaris')
        <td>
          <a href="javascript:void(0)" onclick="editKriteria({{$data->id}})" class="btn btn-icon btn-outline-info btn-sm" data-toggle="tooltip" data-original-title="Ubah">
            <i class="fas fa-user-edit"></i>
          </a>
          <a href="javascript:void(0)" onclick="deleteKriteria({{$data->id}})" class="btn btn-icon btn-outline-danger btn-sm" data-toggle="tooltip" data-original-title="Hapus">
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
//Tambah KriteriaKetua
$('#kriteriaAnggotaForm').submit(function(e) {
  e.preventDefault();
  var kode_kriteria = $("input[name=kode_kriteria]");
  var nama_kriteria = $("input[name=nama_kriteria]");
  var bobot_kriteria = $("input[name=bobot_kriteria]");
  var _token = $("input[name=_token]");

  $.ajax({
    url: "{{route('kriteriaAnggota.add')}}",
    type: "POST",
    data: {
      kode_kriteria: kode_kriteria.val(),
      nama_kriteria: nama_kriteria.val(),
      bobot_kriteria: bobot_kriteria.val(),
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
$('#kriteriaAnggotaForm').validate({
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
//Edit alternatif
function editKriteria(id) {
  var url = '{{route("kriteriaAnggota.getbyid",":id")}}'
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
    url: "{{route('kriteriaAnggota.edit')}}",
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
    text: "Anda tidak akan dapat memulihkan data kriteria ini! Ya, hapus!",
    showCancelButton: true,
    icon: "warning",
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Ya, Hapus!",
    cancelButtonText: "Batal"
  }).then((result) => {
    if (result.isConfirmed) {
      var url = '{{route("kriteriaAnggota.delete",":id")}}'
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
