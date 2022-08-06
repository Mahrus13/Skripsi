<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
  <div class="scrollbar-inner">
    <!-- Brand -->
    <div class="sidenav-header d-flex align-items-center">
      <a class="navbar-brand" href="{{url('/home')}}">
        <img src="../../assets/img/brand/siijanur2.png" class="navbar-brand-img" alt="...">
      </a>
      <div class="ml-auto">
        <!-- Sidenav toggler -->
        <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
          <div class="sidenav-toggler-inner">
            <i class="sidenav-toggler-line"></i>
            <i class="sidenav-toggler-line"></i>
            <i class="sidenav-toggler-line"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar-inner">
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Nav items -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#navbar-kriteria" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-kriteria">
              <i class="ni ni-map-big text-primary"></i>
              <span class="nav-link-text">Kriteria</span>
            </a>
            <div class="collapse" id="navbar-kriteria">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a href="{{url('/kriteriaKetua')}}" class="nav-link">Ketua</a>
                </li>
                <li class="nav-item">
                  <a href="{{url('/kriteriaAnggota')}}" class="nav-link">Anggota</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#navbar-subKriteria" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-subKriteria">
              <i class="ni ni-single-copy-04 text-pink"></i>
              <span class="nav-link-text">Sub Kriteria</span>
            </a>
            <div class="collapse" id="navbar-subKriteria">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a href="{{url('/SubKetua')}}" class="nav-link">Ketua</a>
                </li>
                <li class="nav-item">
                  <a href="{{url('/SubAnggota')}}" class="nav-link">Anggota</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#navbar-tables" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-tables">
              <i class="ni ni-align-left-2 text-default"></i>
              <span class="nav-link-text">Alternatif</span>
            </a>
            <div class="collapse" id="navbar-tables">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a href="{{url('/AlternatifKetua')}}" class="nav-link">Ketua</a>
                </li>
                <li class="nav-item">
                  <a href="{{url('/AlternatifAnggota')}}" class="nav-link">Anggota</a>
                </li>
              </ul>
            </div>
          </li>
          @if(Auth::user()->level == 'sekertaris')
          <li class="nav-item">
            <a class="nav-link" href="#navbar-tablesss" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-tables">
              <i class="ni ni-archive-2 text-green"></i>
              <span class="nav-link-text">Nilai</span>
            </a>
            <div class="collapse" id="navbar-tablesss">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a href="{{url('/PenilaianKetuaAdmin')}}" class="nav-link">Ketua</a>
                </li>
                <li class="nav-item">
                  <a href="{{url('/PenilaianAnggotaAdmin')}}" class="nav-link">Anggota</a>
                </li>
              </ul>
            </div>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="#navbar-tablesss" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-tables">
              <i class="ni ni-archive-2 text-green"></i>
              <span class="nav-link-text">Nilai</span>
            </a>
            <div class="collapse" id="navbar-tablesss">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a href="{{url('/PenilaianKetua')}}" class="nav-link">Ketua</a>
                </li>
                <li class="nav-item">
                  <a href="{{url('/PenilaianAnggota')}}" class="nav-link">Anggota</a>
                </li>
              </ul>
            </div>
          </li>
          @endif
          <li class="nav-item">
            <a class="nav-link" href="#navbar-laporan" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-tables">
              <i class="ni ni-chart-pie-35 text-info"></i>
              <span class="nav-link-text">Perhitungan</span>
            </a>
            <div class="collapse" id="navbar-laporan">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a href="{{url('/HasilPenilaianKetua')}}" class="nav-link">Ketua</a>
                </li>
                <li class="nav-item">
                  <a href="{{url('/HasilPenilaianAnggota')}}" class="nav-link">Anggota</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#navbar-riwayat" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-tables">
              <i class="ni ni-books text-danger"></i>
              <span class="nav-link-text">Arsip Nilai</span>
            </a>
            <div class="collapse" id="navbar-riwayat">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a href="{{url('/ArsipPenilaianKetua')}}" class="nav-link">Ketua</a>
                </li>
                <li class="nav-item">
                  <a href="{{url('/ArsipPenilaianAnggota')}}" class="nav-link">Anggota</a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
