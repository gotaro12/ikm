
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>JDIH - IKM</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

   <!-- Favicons -->
   <link href="https://jdih.brebeskab.go.id/tpl/eb/assets/img/favicon.png" rel="icon">
   <link href="https://jdih.brebeskab.go.id/tpl/eb/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:bagianhukum@brebeskab.go.id">bagianhukum@brebeskab.go.id</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>(0283)672323</span></i>
      </div>
  
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html"><img src="https://jdih.brebeskab.go.id/tpl/eb/assets/img/logo.png" alt=""></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
{{-- - <a href="index.html" class="logo"><img src="https://jdih.brebeskab.go.id/tpl/eb/assets/img/logo.png" alt=""></a> --}}

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#surve">Survey</a></li>
          <li><a class="nav-link scrollto" href="#counts">IKM</a></li>
          <li><a class="nav-link scrollto" href="https://jdih.brebeskab.go.id">JDIH</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Welcome to <span>JDIH Brebes</span></h1>
      <h2>IKM (Index Kepuasan Masyarakat)</h2>
      <div class="d-flex">
        <a href="#surve" class="btn-get-started scrollto">Survey</a>
      
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="surve" class="surve section-bg">
        <div class="card-body">
            <div class="card-header text-center">
                <h3 class="text-primary">
                    Survey
                </h3>
                <h5>
                    Index Kepuasan Masyarakat terhadap halaman website <a href="https://jdih.brebeskab.go.id" class="text-decoration-none">JDIH Brebes</a>
                </h5>
            </div>
            <form action="{{route('store')}}" enctype="multipart/form-data" method="post">
                @csrf
                
                <div class="row pt-3 px-3 justify-content-center">
                    <div class="col-lg-8 py-3 px-3 border rounded border-2">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Responden *</label>
                            <input type="text" class="form-control" id="responden" name="name" placeholder="Nama" autocomplete="off" required>
                        </div>
                    </div>
                </div>
                <div class="row pt-3 px-3 justify-content-center">
                    <div class="col-lg-8 pt-3 px-3 border rounded border-2">
                        <div class="mb-3">
                            <h5>
                                Apakah tampilan website jdih.brebeskab.go.id mudah dipahami (user friendly)? *
                            
                            </h5>
                            <div class="form-check py-2">
                                <input class="form-check-input" type="radio" name="q1" id="q11" value="5" required>
                                <label class="form-check-label" for="q11">
                                    Sangat Mudah
                                </label>
                            </div>
                            <div class="form-check py-2">
                                <input class="form-check-input" type="radio" name="q1" id="q12" value="4" required>
                                <label class="form-check-label" for="q12">
                                    Mudah
                                </label>
                            </div>
                            <div class="form-check py-2">
                                <input class="form-check-input" type="radio" name="q1" id="q13" value="3" required>
                                <label class="form-check-label" for="q13">
                                    Cukup
                                </label>
                            </div>
                            <div class="form-check py-2">
                                <input class="form-check-input" type="radio" name="q1" id="q14" value="2" required>
                                <label class="form-check-label" for="q14">
                                    Sulit
                                </label>
                            </div>
                            <div class="form-check py-2">
                                <input class="form-check-input" type="radio" name="q1" id="q15" value="1" required>
                                <label class="form-check-label" for="q15">
                                    Sangat Sulit
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-3 px-3 justify-content-center">
                    <div class="col-lg-8 pt-3 px-3 border rounded border-2">
                        <div class="mb-3">
                            <h5>
                                Apakah Akses pencarian pada jdih.brebeskab.go.id mudah digunakan? *
                            </h5>
                            <div class="form-check py-2">
                                <input class="form-check-input" type="radio" name="q2" id="q21" value="5" required>
                                <label class="form-check-label" for="q21">
                                    Sangat Mudah
                                </label>
                            </div>
                            <div class="form-check py-2">
                                <input class="form-check-input" type="radio" name="q2" id="q22" value="4" required>
                                <label class="form-check-label" for="q22">
                                    Mudah
                                </label>
                            </div>
                            <div class="form-check py-2">
                                <input class="form-check-input" type="radio" name="q2" id="q23" value="3" required>
                                <label class="form-check-label" for="q23">
                                    Cukup
                                </label>
                            </div>
                            <div class="form-check py-2">
                                <input class="form-check-input" type="radio" name="q2" id="q24" value="2" required>
                                <label class="form-check-label" for="q24">
                                    Sulit
                                </label>
                            </div>
                            <div class="form-check py-2">
                                <input class="form-check-input" type="radio" name="q2" id="q25" value="1" required>
                                <label class="form-check-label" for="q25">
                                    Sangat Sulit
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-3 px-3 justify-content-center">
                    <div class="col-lg-8 pt-3 px-3 border rounded border-2">
                        <div class="mb-3">
                            <h5>
                                Dokumen atau informasi hukum yang ada di jdih.brebeskab.go.id lengkap? *
                            </h5>
                            <div class="form-check py-2">
                                <input class="form-check-input" type="radio" name="q3" id="q31" value="5" required>
                                <label class="form-check-label" for="q31">
                                    Sangat Setuju
                                </label>
                            </div>
                            <div class="form-check py-2">
                                <input class="form-check-input" type="radio" name="q3" id="q32" value="4" required>
                                <label class="form-check-label" for="q32">
                                    Setuju
                                </label>
                            </div>
                            <div class="form-check py-2">
                                <input class="form-check-input" type="radio" name="q3" id="q33" value="3" required>
                                <label class="form-check-label" for="q33">
                                    Cukup
                                </label>
                            </div>
                            <div class="form-check py-2">
                                <input class="form-check-input" type="radio" name="q3" id="q34" value="2" required>
                                <label class="form-check-label" for="q34">
                                    Kurang Setuju
                                </label>
                            </div>
                            <div class="form-check py-2">
                                <input class="form-check-input" type="radio" name="q3" id="q35" value="1" required>
                                <label class="form-check-label" for="q35">
                                    Tidak Setuju
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-3 px-3 justify-content-center">
                    <div class="col-lg-8 pt-3 px-3 border rounded border-2">
                        <div class="mb-3">
                            <h5>
                                Dokumen atau informasi hukum yang ada di jdih.brebeskab.go.id otentik/valid? *
                            </h5>
                            <div class="form-check py-2">
                                <input class="form-check-input" type="radio" name="q4" id="q41" value="5" required>
                                <label class="form-check-label" for="q41">
                                    Sangat Setuju
                                </label>
                            </div>
                            <div class="form-check py-2">
                                <input class="form-check-input" type="radio" name="q4" id="q42" value="4" required>
                                <label class="form-check-label" for="q42">
                                    Setuju
                                </label>
                            </div>
                            <div class="form-check py-2">
                                <input class="form-check-input" type="radio" name="q4" id="q43" value="3" required>
                                <label class="form-check-label" for="q43">
                                    Cukup
                                </label>
                            </div>
                            <div class="form-check py-2">
                                <input class="form-check-input" type="radio" name="q4" id="q44" value="2" required>
                                <label class="form-check-label" for="q44">
                                    Kurang Setuju
                                </label>
                            </div>
                            <div class="form-check py-2">
                                <input class="form-check-input" type="radio" name="q4" id="q45" value="1" required>
                                <label class="form-check-label" for="q45">
                                    Tidak Setuju
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-3 px-3 justify-content-center">
                    <div class="col-lg-8 pt-3 px-3 border rounded border-2">
                        <div class="mb-3">
                            <h5>
                                Apakah dokumen atau informasi hukum yang tersedia dalam website jdih.brebeskab.go.id sesuai dengan kebutuhan pemustaka? *
                            </h5>
                            <div class="form-check py-2">
                                <input class="form-check-input" type="radio" name="q5" id="q51" value="5" required>
                                <label class="form-check-label" for="q51">
                                    Sangat Setuju
                                </label>
                            </div>
                            <div class="form-check py-2">
                                <input class="form-check-input" type="radio" name="q5" id="q52" value="4" required>
                                <label class="form-check-label" for="q52">
                                    Setuju
                                </label>
                            </div>
                            <div class="form-check py-2">
                                <input class="form-check-input" type="radio" name="q5" id="q53" value="3" required>
                                <label class="form-check-label" for="q53">
                                    Cukup
                                </label>
                            </div>
                            <div class="form-check py-2">
                                <input class="form-check-input" type="radio" name="q5" id="q54" value="2" required>
                                <label class="form-check-label" for="q54">
                                    Kurang Setuju
                                </label>
                            </div>
                            <div class="form-check py-2">
                                <input class="form-check-input" type="radio" name="q5" id="q55" value="1" required>
                                <label class="form-check-label" for="q55">
                                    Tidak Setuju
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-3 px-3 justify-content-center">
                    <div class="col-lg-8 pt-3 px-3 border rounded border-2">
                        <div class="mb-3">
                            <label for="judul" class="form-label">Saran dan Masukan *</label>
                            <textarea class="form-control" id="saran" name="saran" style="height: 100px" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="row py-3 px-3 justify-content-center">
                    <div class="col-lg-6 col-md-6 text-center">
                        <button type="submit" class="btn btn-primary"> <i class="icofont-save"></i> Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- End Featured Services Section -->

   
   
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
           
            <h3><span>Index Kepuasan Masyarakat</span></h3>
            <p>Hasil Penilian.</p>
          </div>
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile-hearts"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{$data5}}" data-purecounter-duration="1" class="purecounter"></span>
              <p>Sangat Mudah</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtextas"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{$data4}}" data-purecounter-duration="1" class="purecounter"></span>
              <p>Mudah</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headsetsa"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{$data3}}" data-purecounter-duration="1" class="purecounter"></span>
              <p>Cukup</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-peopleas"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{$data2}}" data-purecounter-duration="1" class="purecounter"></span>
              <p>Sulit</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

  
    <!-- ======= Frequently Asked Questions Section ======= -->
    {{-- <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>F.A.Q</h2>
          <h3>Frequently Asked <span>Questions</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-10">
            <ul class="faq-list">

              <li>
                <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                  </p>
                </div>
              </li>

            </ul>
          </div>
        </div>

      </div>
    </section> --}}
    <!-- End Frequently Asked Questions Section -->

  
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

   
   
    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Jdih Brebes</span></strong>. All Rights Reserved
      </div>

      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js')}}"></script>

</body>

</html>