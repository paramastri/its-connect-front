
    <div id="offCanvas3" class="off-canvas off-canvas-overlay off-canvas-right wd-300">
      <a href="#" class="close"><i data-feather="x"></i></a>
      <div class="pd-25 ht-100p tx-13">
        <div class="clearfix mg-b-15 mg-t-15">
          <div id="contactAvatar" class="pos-relative float-left">
            <div class="avatar avatar-xl avatar-img horizontal-center">
              <img src="assets/img/aldiwijaya.jpg" class="rounded-circle" alt="">
            </div>
            <a href="" class="contact-edit-photo" data-toggle="tooltip" title="Upload Photo"><i data-feather="edit-2"></i></a>
          </div>
        </div>
        <h5 id="contactName" class="tx-18 tx-xl-20 mg-b-5">Nama User</h5>
        <p class="tx-13 tx-lg-12 tx-xl-13 tx-color-03 mg-b-20">
          Keterangan Lebih Lanjut
        </p>
        <hr class="mg-y-20">
        <nav class="nav flex-column contact-content-nav mg-b-25">
          <a href="profil-mhs.html" class="nav-link"><i data-feather="user"></i> Lihat Akun</a>
          <a href="kelola-akun-mhs.html" class="nav-link"><i data-feather="settings"></i> Kelola Akun</a>
        </nav>
          @if(session('auth')['masuk_dengan_sso'] == 1)
            <a href="{{route('Auth::logout')}}" class="btn btn-secondary btn-block">Kembali ke myITS SSO</a>
          @endif
          <a href="{{route('Auth::logout')}}" class="btn btn-white btn-block">Keluar</a>
      </div>
    </div><!-- off-canvas -->
