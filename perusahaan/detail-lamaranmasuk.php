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
    <link href="lib/select2/css/select2.min.css" rel="stylesheet">

    <title>myITS Connect - Formulir Lamaran</title>

    <!-- vendor css -->
    <link href="lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="lib/prismjs/themes/prism-vs.css" rel="stylesheet">
    <link href="lib/select2/css/select2.min.css" rel="stylesheet">
    <link href="lib/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
    <link href="lib/quill/quill.core.css" rel="stylesheet">
    <link href="lib/quill/quill.snow.css" rel="stylesheet">
    <link href="lib/quill/quill.bubble.css" rel="stylesheet">


    <!-- DashForge CSS -->
    <link rel="stylesheet" href="assets/css/dashforge.css">
    <link rel="stylesheet" href="assets/css/dashforge.demo.css">
    <link rel="stylesheet" href="assets/css/dashforge.filemgr.css">
    <link rel="stylesheet" href="assets/css/dashforge.contacts.css">
    <link rel="stylesheet" href="assets/css/dashforge.profile.css">
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
              <li><a href="employee-tersimpan.html">Calon Pegawai Tersimpan</a></li>
              <li class="active"><a href="lamaran-masuk.html">Lamaran Masuk</a></li>
              <li><a href="riwayat-lowongan.html">Riwayat Lowongan</a></li>
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
        </div>
        <nav class="nav">
          <a href="" class="nav-link"><i data-feather="user"></i></a>
        </nav>
      </div><!-- content-header -->

      <div class="content-body">
        <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
          <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-30">
            <div>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                  <li class="breadcrumb-item"><a href="lamaran-masuk.html">lamaran masuk</a></li>
                  <li class="breadcrumb-item active" aria-current="page">detail lamaran</li>
                </ol>
              </nav>
                <h4 class="mg-b-0 tx-spacing--1">Aldi Wijaya | UI/UX Designer</h4>
                <div class="mg-t-20">
                  <label class="tx-10 tx-medium tx-spacing-1 tx-color-03 tx-uppercase tx-sans mg-b-10">status</label>
                  <div class="d-flex">
                  <select class="form-control select2-no-search wd-200">
                    <option label="">Menunggu</option>
                    <option value="Firefox">Diterima</option>
                    <option value="Firefox">Ditolak</option>
                  </select>
                  <button style="color: white; background: #013880; outline-color: #013880;" type="submit" class="btn align-items-center mg-l-10"></i>Ubah</button>
                  </div>
                </div>
            </div>
          </div>

          <div class="row row-xs">
            <div class="col-lg-8">
              <div class="card">
                <div class="card-body">
                  <div class="mg-b-10 mg-sm-b-0">
                    <h5 class="tx-bold mg-b-0 tx-15 tx-color-02 mg-b-20">Biodata Umum</h5>
                    <div class="row row-sm">
                      <div class="col-sm-12 media mg-b-20">
                        <div class="avatar avatar-md"><span class="avatar-initial rounded-circle bg-gray-600">AW</span></div>
                        <div class="media-body mg-l-20">
                          <h6 class="mg-b-3">Aldi Wijaya</h6>
                          <h6 class="mg-b-0 tx-color-03">Fresh Graduate ITS</h6>
                          <small class="d-block tx-color-03">Surabaya</small>
                        </div><!-- media-body -->
                      </div>
                      <div class="col-sm-12">
                        <label class="tx-10 tx-medium tx-spacing-1 tx-color-03 tx-uppercase tx-sans mg-b-10">email</label>
                        <div class="mg-b-10">
                          <p>aldiwijaya@gmail.com</p>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <label class="tx-10 tx-medium tx-spacing-1 tx-color-03 tx-uppercase tx-sans mg-b-10">nomor telepon</label>
                        <p>08978298316</p>
                      </div>
                    </div><!-- row -->
                  </div>

                  <div class="mg-b-10 mg-sm-b-0 mg-t-10">
                    <div class="row row-sm">
                      <div class="col-sm-12 mg-t-20">
                        <div class="d-flex align-items-center justify-content-between">
                          <h5 class="tx-bold mg-b-0 tx-15 tx-color-02">Pengalaman</h5>
                        </div><!-- card-header -->
                        <div class="pd-25">
                          <div class="media d-block d-sm-flex">
                            <div class="wd-60 ht-60 bg-ui-04 rounded d-flex align-items-center justify-content-center">
                              <i data-feather="briefcase" class="tx-white-7 wd-40 ht-40"></i>
                            </div>
                            <div class="media-body pd-t-25 pd-sm-t-0 pd-sm-l-25">
                              <h5 class="mg-b-5">Area Sales Manager</h5>
                              <p class="mg-b-3 tx-color-02"><span class="tx-medium tx-color-01">ThemePixels, Inc.</span>, Bay Area, San Francisco, CA</p>
                              <span class="d-block tx-13 tx-color-03">December 2016 - Present</span>
                            </div>
                          </div><!-- media -->
                          <div class="media d-block d-sm-flex mg-t-20">
                            <div class="wd-60 ht-60 bg-ui-04 rounded d-flex align-items-center justify-content-center">
                              <i data-feather="briefcase" class="tx-white-7 wd-40 ht-40"></i>
                            </div>
                            <div class="media-body pd-t-25 pd-sm-t-0 pd-sm-l-25">
                              <h5 class="mg-b-5">Area Sales Manager</h5>
                              <p class="mg-b-3 tx-color-02"><span class="tx-medium tx-color-01">ThemePixels, Inc.</span>, Bay Area, San Francisco, CA</p>
                              <span class="d-block tx-13 tx-color-03">December 2016 - Present</span>
                            </div>
                          </div><!-- media -->
                        </div>
                      </div>

                      <div class="col-sm-12 mg-t-10">
                        <div class="d-flex align-items-center justify-content-between">
                          <h5 class="tx-bold mg-b-0 tx-15 tx-color-02">Pendidikan</h5>
                        </div><!-- card-header -->
                        <div class="pd-25">
                          <div class="media d-block d-sm-flex">
                            <div class="wd-60 ht-60 bg-ui-04 rounded d-flex align-items-center justify-content-center">
                              <i data-feather="book-open" class="tx-white-7 wd-40 ht-40"></i>
                            </div>
                            <div class="media-body pd-t-25 pd-sm-t-0 pd-sm-l-25">
                              <h5 class="mg-b-5">Institut Teknologi Sepuluh Nopember</h5>
                              <p class="mg-b-3 tx-color-02"><span class="tx-medium tx-color-01">ThemePixels, Inc.</span>, Bay Area, San Francisco, CA</p>
                              <span class="d-block tx-13 tx-color-03">December 2016 - Present</span>
                            </div>
                          </div><!-- media -->
                        </div>
                      </div>


                      <div class="col-sm-12 mg-t-10">
                        <label class="tx-bold mg-b-0 tx-15 tx-color-02">Jawaban</label>
                        <ol class="pd-l-10 mg-0 mg-t-20 mg-l-20 mg-b-20 tx-13">
                          <li>Reaching the targets and goals set for my area.</li>
                          <li>Servicing the needs of my existing customers.</li>
                          <li>Maintaining the relationships with existing customers for repeat business.</li>
                          <li>Reporting to top managers.</li>
                          <li>Keeping up to date with the products.</li>
                        </ol>
                      </div>

                      <div class="col-sm-12 mg-t-10">
                        <label class="tx-bold mg-b-15 tx-15 tx-color-02">Resume</label>
     
                      </div>

                        <div class="col-sm-6 mg-t-10 mg-b-30">
                          <div class="media media-folder">
                            <i data-feather="folder"></i>
                            <div class="media-body">
                              <h6><a href="" class="link-02">Resume</a></h6>
                              <span>DOC, PNG, JPEG</span>
                            </div><!-- media-body -->
                            <div class="dropdown-file">
                              <a href="" class="dropdown-link" data-toggle="dropdown"><i data-feather="more-vertical"></i></a>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a href="#modalViewDetails" data-toggle="modal" class="dropdown-item details"><i data-feather="info"></i>Lihat Detail</a>
                                <a href="#" class="dropdown-item delete"><i data-feather="trash"></i>Hapus</a>
                              </div>
                            </div><!-- dropdown -->
                          </div><!-- media -->
                        </div><!-- col -->


                      <div class="col-sm-12 mg-t-10">
                        <label class="tx-bold mg-b-15 tx-15 tx-color-02">Portofolio</label>
 
                      </div>
                        <div class="col-sm-6 mg-t-10 mg-b-30">
                          <div class="media media-folder">
                            <i data-feather="folder"></i>
                            <div class="media-body">
                              <h6><a href="" class="link-02">Resume</a></h6>
                              <span>DOC, PNG, JPEG</span>
                            </div><!-- media-body -->
                            <div class="dropdown-file">
                              <a href="" class="dropdown-link" data-toggle="dropdown"><i data-feather="more-vertical"></i></a>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a href="#modalViewDetails" data-toggle="modal" class="dropdown-item details"><i data-feather="info"></i>Lihat Detail</a>
                                <a href="#" class="dropdown-item delete"><i data-feather="trash"></i>Hapus</a>
                              </div>
                            </div><!-- dropdown -->
                          </div><!-- media -->
                        </div><!-- col -->

                      <div class="col-sm-12 mg-t-10">
                        <label class="tx-bold mg-b-15 tx-15 tx-color-02">Cover Letter</label>
                      </div>
                        <div class="col-sm-6 mg-t-10 mg-b-30">
                          <div class="media media-folder">
                            <i data-feather="folder"></i>
                            <div class="media-body">
                              <h6><a href="" class="link-02">Cover Letter</a></h6>
                              <span>DOC, PNG, JPEG</span>
                            </div><!-- media-body -->
                            <div class="dropdown-file">
                              <a href="" class="dropdown-link" data-toggle="dropdown"><i data-feather="more-vertical"></i></a>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a href="#modalViewDetails" data-toggle="modal" class="dropdown-item details"><i data-feather="info"></i>Lihat Detail</a>
                                <a href="#" class="dropdown-item delete"><i data-feather="trash"></i>Hapus</a>
                              </div>
                            </div><!-- dropdown -->
                          </div><!-- media -->
                        </div><!-- col -->
                        <div class="col-sm-12 mg-t-20">
                            <button type="submit" class="btn btn-sm btn-secondary d-flex align-items-center mg-r-5"><i data-feather="chevron-left"></i><span class="d-none d-sm-inline mg-l-5">Kembali</span></button>
                        </div>
                    </div><!-- row -->
                  </div>
                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- col -->
          </div><!-- row -->
        </div><!-- container -->
      </div>
    </div><!-- content -->

    <div class="modal fade effect-scale" id="modalEditContact" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body pd-20 pd-sm-30">
            <button type="button" class="close pos-absolute t-15 r-20" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>

            <h5 class="tx-18 tx-sm-20 mg-b-20">Tambahkan Persyaratan Berkas</h5>
            <p class="tx-13 tx-color-03 mg-b-30">Lengkapi data jenis berkas yang anda butuhkan untuk dapat diunggah oleh pelamar.</p>

            <div class="d-sm-flex">
              <div class="flex-fill">
                <h6 class="mg-b-10">Nama Berkas</h6>
                <div class="form-group mg-b-10">
                  <input type="text" class="form-control" placeholder="Contoh: Portofolio / CV / Cover Letter">
                </div><!-- form-group -->
                <h6 class="mg-t-20 mg-b-10">Format Berkas</h6>
                <div class="form-group mg-b-10">
                  <input type="text" class="form-control" placeholder="Contoh: DOC, PDF, JPG.">
                </div><!-- form-group -->
                <h6 class="mg-t-20 mg-b-10">Deskripsi</h6>
                <textarea class="form-control" rows="2" placeholder="Contoh: 'Sertakan portofolio dari beberapa desain website terbaik yang pernah anda buat.'"></textarea>
              </div><!-- col -->
            </div>
          </div>
          <div class="modal-footer">
            <div class="wd-100p d-flex flex-column flex-sm-row justify-content-end">
              <div class="dropup mg-b-15 mg-sm-b-0 mg-sm-r-auto">
                <div class="dropdown-menu tx-13">
                  <a href="" class="dropdown-item">Email</a>
                  <a href="" class="dropdown-item">Phone</a>
                  <a href="" class="dropdown-item">Address</a>
                  <a href="" class="dropdown-item">Custom</a>
                </div><!-- dropdown-menu -->
              </div>
              <button type="button" class="btn btn-primary mg-b-5 mg-sm-b-0">Selesai</button>
            </div>
          </div><!-- modal-footer -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->

    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/feather-icons/feather.min.js"></script>
    <script src="lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="lib/jquery.flot/jquery.flot.js"></script>
    <script src="lib/jquery.flot/jquery.flot.stack.js"></script>
    <script src="lib/jquery.flot/jquery.flot.resize.js"></script>
    <script src="lib/flot.curvedlines/curvedLines.js"></script>
    <script src="lib/peity/jquery.peity.min.js"></script>
    <script src="lib/chart.js/Chart.bundle.min.js"></script>
    <script src="lib/prismjs/prism.js"></script>
    <script src="lib/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
    <script src="lib/typeahead.js/typeahead.bundle.min.js"></script>
    <script src="lib/quill/quill.min.js"></script>
    <script src="lib/select2/js/select2.min.js"></script>

    <script src="assets/js/dashforge.js"></script>
    <script src="assets/js/dashforge.aside.js"></script>
    <script src="assets/js/dashforge.sampledata.js"></script>
    <script src="assets/js/dashboard-four.js"></script>
    <script src="assets/js/dashforge.filemgr.js"></script>

    
    <script>
      // Adding placeholder for search input
      (function($) {

        'use strict'

        var Defaults = $.fn.select2.amd.require('select2/defaults');

        $.extend(Defaults.defaults, {
          searchInputPlaceholder: ''
        });

        var SearchDropdown = $.fn.select2.amd.require('select2/dropdown/search');

        var _renderSearchDropdown = SearchDropdown.prototype.render;

        SearchDropdown.prototype.render = function(decorated) {

          // invoke parent method
          var $rendered = _renderSearchDropdown.apply(this, Array.prototype.slice.apply(arguments));

          this.$search.attr('placeholder', this.options.get('searchInputPlaceholder'));

          return $rendered;
        };

      })(window.jQuery);


      $(function(){
        'use strict'

        // Basic with search
        $('.select2').select2({
          placeholder: 'Pilih salah satu...',
          searchInputPlaceholder: 'Search options'
        });

        // Disable search
        $('.select2-no-search').select2({
          minimumResultsForSearch: Infinity,
          placeholder: 'Pilih salah satu...'
        });

        // Clearable selection
        $('.select2-clear').select2({
          minimumResultsForSearch: Infinity,
          placeholder: 'Pilih salah satu...',
          allowClear: true
        });

        // Limit selection
        $('.select2-limit').select2({
          minimumResultsForSearch: Infinity,
          placeholder: 'Pilih salah satu...',
          maximumSelectionLength: 2
        });

      });
    </script>
    <script>
      $(function(){
        'use strict'

        var quill = new Quill('#editor-container', {
          modules: {
            toolbar: '#toolbar-container'
          },
          placeholder: 'Tulis deskripsi pekerjaan. Mulai dari kualifikasi pegawai, tanggung jawab, dan lain-lain...',
          theme: 'snow'
        });

        var quill2 = new Quill('#editor-container2', {
          modules: {
            toolbar: [
              ['bold', 'italic'],
              ['link', 'blockquote', 'code-block', 'image'],
              [{ list: 'ordered' }, { list: 'bullet' }]
            ]
          },
          placeholder: 'Tulis deskripsi pekerjaan. Mulai dari kualifikasi pegawai, tanggung jawab, dan lain-lain...',
          theme: 'snow'
        });

        var quill2 = new Quill('#editor-container3', {
          modules: {
            toolbar: [
              ['bold', 'italic'],
              ['link', 'blockquote', 'code-block', 'image'],
              [{ list: 'ordered' }, { list: 'bullet' }]
            ]
          },
          placeholder: 'Tulis deskripsi pekerjaan. Mulai dari kualifikasi pegawai, tanggung jawab, dan lain-lain...',
          theme: 'snow'
        });

        // Inline Edit
        var quillInline = new Quill('#quillInline', {
          modules: {
            toolbar: [
              ['bold', 'italic', 'underline'],
              [{ 'header': 1 }, { 'header': 2 }, 'blockquote'],
              ['link', 'image', 'code-block'],
            ]
          },
          bounds: '#quillInline',
          scrollingContainer: '#scrolling-container',
          placeholder: 'Write something...',
          theme: 'bubble'
        });

        const ps = new PerfectScrollbar('#scrolling-container', {
          suppressScrollX: true
        });

        // Editor in Modal
        var quillModal2 = new Quill('#quillEditorModal', {
          modules: {
            toolbar: [
              ['bold', 'italic', 'underline'],
              [{ 'header': 1 }, { 'header': 2 }, 'blockquote'],
              ['link', 'image', 'code-block'],
            ]
          },
          theme: 'snow'
        });

      });
    </script>
    <script>
      $(function(){
        'use strict'

        // With TypeAhead
        var citynames = new Bloodhound({
          datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
          queryTokenizer: Bloodhound.tokenizers.whitespace,
          prefetch: {
            url: 'assets/data/citynames.json',
            filter: function(list) {
              return $.map(list, function(cityname) {
                return { name: cityname }; });
              }
            }
        });

        citynames.initialize();

        $('#input2').tagsinput({
          typeaheadjs: {
            name: 'citynames',
            displayKey: 'name',
            valueKey: 'name',
            source: citynames.ttAdapter()
          }
        });

        // Objects as Tags
        var cities = new Bloodhound({
          datumTokenizer: Bloodhound.tokenizers.obj.whitespace('text'),
          queryTokenizer: Bloodhound.tokenizers.whitespace,
          prefetch: 'assets/data/cities.json'
        });

        cities.initialize();

        var elt = $('#input3');
        elt.tagsinput({
          itemValue: 'value',
          itemText: 'text',
          typeaheadjs: {
            name: 'cities',
            displayKey: 'text',
            source: cities.ttAdapter()
          }
        });

        elt.tagsinput('add', { "value": 1 , "text": "Amsterdam"   , "continent": "Europe"    });
        elt.tagsinput('add', { "value": 4 , "text": "Washington"  , "continent": "America"   });
        elt.tagsinput('add', { "value": 7 , "text": "Sydney"      , "continent": "Australia" });
        elt.tagsinput('add', { "value": 10, "text": "Beijing"     , "continent": "Asia"      });
        elt.tagsinput('add', { "value": 13, "text": "Cairo"       , "continent": "Africa"    });

      });
    </script>
    
  </body>
</html>
