<!DOCTYPE html>
<html>

<head>
  @include('pages.layout.componen.header')
</head>

<body>
  <!-- Navabr -->
  @include('pages.layout.componen.navbar')
  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-primary pt-5 pb-7">
      <div class="container">
        <div class="header-body">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="pr-5">
                <h1 class="display-2 text-white font-weight-bold mb-0">KELOMPOK BIMBINGAN IBADAH HAJI DAN UMRAH</h1>
                <h2 class="display-4 text-white font-weight-light">Jl. Mojopahit No.666 B RW.2 (031)8959083</h2>
                <p class="text-white mt-4">Kami siap membantu mewujudkan niat anda untuk menjadi Haji Mabrur sesuai dengan tuntunan Rasulullah SAW.</p>
                <!-- <div class="mt-5">
                  <a href="./pages/dashboards/dashboard.html" class="btn btn-neutral my-2">Explore Dashboard</a>
                </div> -->
              </div>
            </div>
            <div class="col-lg-6">
              <div class="row pt-5">
                <div class="col-md-15 order-md-2">
                  <img src="./assets/img/theme/masjid.png" class="img-fluid">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>

  </div>
  <!-- Footer -->
  <footer class="py-5" id="footer-main">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; {{ date('Y') }} <a href="{{url('/')}}" class="font-weight-bold ml-1">KBIHU JABAL NUR</a>
          </div>
        </div>
        <div class="col-xl-6">
          <!-- <ul class="nav nav-footer justify-content-center justify-content-xl-end">
            <li class="nav-item">
              <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/license" class="nav-link" target="_blank">License</a>
            </li>
          </ul> -->
        </div>
      </div>
    </div>
  </footer>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="./assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="./assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="./assets/vendor/onscreen/dist/on-screen.umd.min.js"></script>
  <!-- Argon JS -->
  <script src="./assets/js/argon.js?v=1.1.0"></script>
  <!-- Demo JS - remove this in your project -->
  <script src="./assets/js/demo.min.js"></script>
</body>

</html>
