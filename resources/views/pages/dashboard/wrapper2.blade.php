<!DOCTYPE html>
<html>

<head>
  @include('layouts.head')
</head>

<body>
  @include('sweetalert::alert')
  <!-- Sidenav -->
  @include('pages.dashboard.componen.sidenav')
  <!-- End Sidenav -->

  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    @include('pages.dashboard.componen.topnav')
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-9">
      <div class="container-fluid">
        <div class="header-body">
          @yield('wrapper-header')
          <!-- Card stats -->
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--9">
      <div class="row">
        <div class="col">
          <!-- <div class="card"> -->
            @yield('wrapper-dashboard')
          <!-- </div> -->
        </div>
      </div>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  @include('layouts.js')
</body>

</html>
