<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Favicons -->
    <link href="{{ url('img/logo-1.png') }}" rel="icon">
    <link href="{{ url('img/logo-1.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ url('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ url('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ url('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ url('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ url('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ url('css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ url('css/linearicons.css') }}" rel="stylesheet">
    <link href="{{ url('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ url('css/jquery-ui.min.css') }}" rel="stylesheet">
    <link href="{{ url('css/nice-select.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ url('css/style.css') }}" rel="stylesheet">
    <link href="{{ url('css/style1.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />

    <style>
        .pricing .box .header-new {

            /* z-index: 997; */
            margin: 0;

            height: 50px;
            background-color: #006AFF;
        }
        .rounded-image{
                border-radius: 50%;
                -webkit-border-radius: 200px;
                -moz-border-radius: 200px;
                width: 50px;
                height: 50px;
                object-fit: cover;
            }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

          <a href="/" class="logo d-flex align-items-center">
            <img src="{{ asset('img/logo-lowker.png') }}" alt="">
            <!-- <span>FlexStart</span> -->
          </a>

          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto active" href="#hero">Produk & Layanan</a></li>
              <li><a class="nav-link scrollto" href="corp-faq.html">FAQ</a></li>

              <li style="padding-left: 500px;">
                <div>
                  <ul>
                    <li style="text-align: right; padding-right: 10px;"><a href="#"
                        style="font-size: 23px; color: black;"><img src="{{asset('profile_photos/'. Auth::user()->profile_photo_path)}}" class="rounded-image" width="20px" height="20px">{{ ucfirst( Auth::user()->name) }}</a><span
                        style="font-size: 12px; position: absolute; top: 38px; right: 12px; color: #BEBFC0;">Bukalapak</li>
                  </ul>
                </div>
              </li>
              <i class="bi bi-bell-fill" style="color: #FA9746;  font-size: 20px;"></i>
              <li class="dropdown" style="padding-right: 50px;"><a href="#"><i class="bi bi-caret-down-fill"></i></a>
                <ul style="width: 250px;">
                    <li><a href="/owner"><i class="fas fa-user-tie"></i><span
                        style="font-size: 13px; padding-right: 118px;">Profil Saya</span></a></li>
                  <li><a href="/profilCorp"><i class="fas fa-building"></i><span
                        style="font-size: 13px; padding-left: 10px;">Profil Perusahaan</span></a></li>
                  <li><a href="#"><img src="assets/img/icons/password.png" width="20px" alt=""><i class="far fa-bookmark"></i>
                    <span style="font-size: 13px; padding-left: 10px;">Simpan Kandidat</span></a></li>
                        <li class="align-items-center"><form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-jet-dropdown-link>
                        </form></i></li>


                </ul>
              </li>
              <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->

        </div>
      </header>
    <!-- End Header -->
    @yield('container')

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">



        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="/" class="logo d-flex align-items-center">
                            <img src="{{ asset('img/logo-lowker.png') }}" alt="">

                        </a>
                        <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Menu Utama</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Beranda</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Temukan Karir</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Tentang Kami</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Masuk</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Daftar</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Posting Lowongan</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Kategori Karir</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Photography</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Business</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">UI/UX Design</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Education</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Account</a></li>

                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Hubungi Kami</h4>
                        <p>
                            A108 Adam Street <br>
                            New York, NY 535022<br>
                            United States <br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>2021</span></strong>. Team Slytherin
            </div>
            <div class="credits">
                Designed by Arabi Rizki
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ url('vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ url('vendor/aos/aos.js') }}"></script>
    <script src="{{ url('vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ url('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ url('vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ url('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ url('vendor/glightbox/js/glightbox.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ url('js/main.js') }}"></script>

 <!-- rev -->
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></script> <!-- rev -->
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script> <!-- rev -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> <!-- rev -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> <!-- rev -->
 <script src="js/formunggahan.js"></script> <!-- rev -->

</body>

</html>
