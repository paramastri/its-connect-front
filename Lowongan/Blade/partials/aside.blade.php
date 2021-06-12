@if(Auth::user()->role < 3)
    <aside class="aside aside-fixed">
      <div class="aside-header">
      <a href="beranda.html"><img class="aside-logo" width="40%" src="assets/img/logo.png"></a>
        <a href="" class="aside-menu-link">
          <i data-feather="menu"></i>
          <i data-feather="x"></i>
        </a>
      </div>

      <div class="aside-body">
        <ul class="nav nav-aside">
          <li class="nav-item"><a href="beranda.html" class="nav-link"><i data-feather="home"></i> <span>Beranda</span></a></li>
          <li class="nav-item with-sub show active">
            <a href="" class="nav-link"><i data-feather="briefcase"></i> <span>Pekerjaan</span></a>
            <ul>
              <li class=""><a href="lowongan.html">Cari Lowongan</a></li>
              <li class="active"><a href="lowongan-tersimpan.html">Lowongan Tersimpan</a></li>
              <li class=""><a href="lamaran-saya.html">Lamaran Saya</a></li>
              <li><a href="list-perusahaan.html">Daftar Perusahaan</a></li>
            </ul>
          </li>
          <li class="nav-item with-sub show">
            <a href="" class="nav-link"><i data-feather="users"></i> <span>Komunitas</span></a>
            <ul>
              <li><a href="jelajahi-komunitas.html">Jelajahi Komunitas</a></li>
              <li><a href="page-connections.html">Komunitas Saya</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </aside>
@elseif(Auth::user()->role == 3)
    <aside class="aside aside-fixed">
      <div class="aside-header">
        <a href="index.html"><img class="aside-logo" width="40%" src="assets/img/logo.png"></a>
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
              <li class=""><a href="form-buatlowongan.html">Buat Lowongan Pekerjaan</a></li>
              <li class=""><a href="employee.html">Cari Calon Pegawai</a></li>
              <li><a href="employee-tersimpan.html">Calon Pegawai Tersimpan</a></li>
              <li><a href="lamaran-masuk.html">Lamaran Masuk</a></li>
              <li class="active"><a href="riwayat-lowongan.html">Riwayat Lowongan</a></li>
            </ul>
          </li>
          <li class="nav-item with-sub show">
            <a href="" class="nav-link"><i data-feather="briefcase"></i> <span>Pekerjaan</span></a>
            <ul>
              <li class=""><a href="lowongan.html">Cari Lowongan</a></li>
              <li class="active"><a href="lowongan-tersimpan.html">Lowongan Tersimpan</a></li>
              <li class=""><a href="lamaran-saya.html">Lamaran Saya</a></li>
              <li><a href="list-perusahaan.html">Daftar Perusahaan</a></li>
            </ul>
          </li>
          <li class="nav-item with-sub show">
            <a href="" class="nav-link"><i data-feather="users"></i> <span>Komunitas</span></a>
            <ul>
              <li><a href="jelajahi-komunitas-p.html">Jelajahi Komunitas</a></li>
              <li><a href="komunitas-saya-p.html">Komunitas Saya</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </aside>
@elseif(Auth::user()->role == 4)
    <aside class="aside aside-fixed">
      <div class="aside-header">
        <a href="index.html"><img class="aside-logo" width="40%" src="assets/img/logo.png"></a>
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
              <li class=""><a href="form-buatlowongan.html">Buat Lowongan Pekerjaan</a></li>
              <li class=""><a href="employee.html">Cari Calon Pegawai</a></li>
              <li><a href="employee-tersimpan.html">Calon Pegawai Tersimpan</a></li>
              <li><a href="lamaran-masuk.html">Lamaran Masuk</a></li>
              <li class="active"><a href="riwayat-lowongan.html">Riwayat Lowongan</a></li>
            </ul>
          </li>
          <li class="nav-item with-sub show">
            <a href="" class="nav-link"><i data-feather="users"></i> <span>Komunitas</span></a>
            <ul>
              <li><a href="jelajahi-komunitas-p.html">Jelajahi Komunitas</a></li>
              <li><a href="komunitas-saya-p.html">Komunitas Saya</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </aside>
@endif