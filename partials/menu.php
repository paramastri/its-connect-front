    <aside class="aside aside-fixed">
      <div class="aside-header">
        <a href="../index.php"><img class="aside-logo" width="40%" src="../assets/img/logo.png"></a>
        <a href="" class="aside-menu-link">
          <i data-feather="menu"></i>
          <i data-feather="x"></i>
        </a>
      </div>
      <div class="aside-body">
        <ul class="nav nav-aside">
          <li class="nav-item"><a href="../beranda.php" class="nav-link"><i data-feather="home"></i> <span>Beranda</span></a></li>
          <?php include "menu-mahasiswa.php"?>
          <?php include "menu-perusahaan.php"?>
          <li class="nav-item with-sub">
            <a href="" class="nav-link"><i data-feather="users"></i> <span>Komunitas</span></a>
            <ul>
              <li><a href="../komunitas/page-profile-view.php">Jelajahi Komunitas</a></li>
              <li><a href="../komunitas/page-connections.php">Komunitas Saya</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </aside>