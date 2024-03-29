<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="DashForge">
    <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="twitter:image" content="http://themepixels.me/dashforge/img/dashforge-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/dashforge">
    <meta property="og:title" content="DashForge">
    <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">

    <meta property="og:image" content="http://themepixels.me/dashforge/img/dashforge-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/dashforge/img/dashforge-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="ThemePixels">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <title>myITS Connect - Lamaran Masuk</title>

    <!-- vendor css -->
    <link href="lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/jqvmap/jqvmap.min.css" rel="stylesheet">

    <!-- DashForge CSS -->
    <link rel="stylesheet" href="assets/css/dashforge.css">
    <link rel="stylesheet" href="assets/css/dashforge.dashboard.css">
  </head>
  <body>

    <aside class="aside aside-fixed">
      <div class="aside-header">
        <a href="index.html" class="aside-logo">dash<span>forge</span></a>
        <a href="" class="aside-menu-link">
          <i data-feather="menu"></i>
          <i data-feather="x"></i>
        </a>
        <a href="" id="chatContentClose" class="burger-menu d-none"><i data-feather="arrow-left"></i></a>
      </div>
      <div class="aside-body">
        <ul class="nav nav-aside">
          <li class="nav-item"><a href="beranda-perusahaan.html" class="nav-link"><i data-feather="home"></i> <span>Beranda</span></a></li>
          <li class="nav-item with-sub show active">
            <a href="" class="nav-link"><i data-feather="briefcase"></i> <span>Perusahaan</span></a>
            <ul>
              <li class=""><a href="employee.html">Cari Calon Pegawai</a></li>
              <li class=""><a href="employee-tersimpan.html">Calon Pegawai Tersimpan</a></li>
              <li class="active"><a href="lamaran-masuk.html">Lamaran Masuk</a></li>
              <li class=""><a href="riwayat-lowongan.html">Riwayat Lowongan</a></li>
            </ul>
          </li>
          <li class="nav-item with-sub">
            <a href="" class="nav-link"><i data-feather="users"></i> <span>Komunitas</span></a>
            <ul>
              <li><a href="page-profile-view.html">Jelajahi Komunitas</a></li>
              <li><a href="page-connections.html">Komunitas Saya</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </aside>

    <div class="content ht-100v pd-0">
      <div class="content-header">
        <div class="content-search">
          <i data-feather="search"></i>
          <input type="search" class="form-control" placeholder="Search...">
        </div>
      </div><!-- content-header -->

      <div class="content-body">
        <div class="container pd-x-0">
          <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
              <h4 class="mg-b-0 tx-spacing--1">Lamaran Masuk</h4>
            </div>
          </div>

          <div class="row row-xs">
            <div class="col-lg-12 col-xl-8 mg-t-10">
              <div class="card mg-b-10">
                <div class="table-responsive">
                  <table class="table table-dashboard mg-b-0">
                    <thead>
                      <tr>
                        <th>tanggal</th>
                        <th >Pelamar</th>
                        <th >posisi</th>
                        <th >status</th>
                        <th ></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="tx-color-03 tx-normal">03/05/2018</td>
                        <td class="">Bintang Nur</td>
                        <td class="">Graphic Designer</td>
                        <td class=" tx-success">Diterima</td>
                        <td class="tx-medium "><a href="">Lihat Detail</a></td>
                      </tr>
                      <tr>
                        <td class="tx-color-03 tx-normal">03/05/2018</td>
                        <td class="">Ersad Ahmad</td>
                        <td class="">Graphic Designer</td>
                        <td class=" tx-danger">Ditolak</td>
                        <td class="tx-medium "><a href="">Lihat Detail</a></td>
                      </tr>
                      <tr>
                        <td class="tx-color-03 tx-normal">03/05/2018</td>
                        <td class="">Jaler Dio</td>
                        <td class="">Graphic Designer</td>
                        <td class=" tx-gray-600">Menunggu</td>
                        <td class="tx-medium "><a href="">Lihat Detail</a></td>
                      </tr>
                    </tbody>
                  </table>
                </div><!-- table-responsive -->
              </div><!-- card -->
          </div><!-- row -->
        </div><!-- container -->
      </div>
    </div>

    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/feather-icons/feather.min.js"></script>
    <script src="lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="lib/jquery.flot/jquery.flot.js"></script>
    <script src="lib/jquery.flot/jquery.flot.stack.js"></script>
    <script src="lib/jquery.flot/jquery.flot.resize.js"></script>
    <script src="lib/chart.js/Chart.bundle.min.js"></script>
    <script src="lib/jqvmap/jquery.vmap.min.js"></script>
    <script src="lib/jqvmap/maps/jquery.vmap.usa.js"></script>

    <script src="assets/js/dashforge.js"></script>
    <script src="assets/js/dashforge.aside.js"></script>
    <script src="assets/js/dashforge.sampledata.js"></script>
    <script src="assets/js/dashboard-one.js"></script>

    <!-- append theme customizer -->
    <script src="lib/js-cookie/js.cookie.js"></script>
    <script src="assets/js/dashforge.settings.js"></script>
  </body>
</html>
