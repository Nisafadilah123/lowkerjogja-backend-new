<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Favicons -->
    <link href="img/logo-1.png" rel="icon">
    <link href="img/logo-1.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="vendor/aos/aos.css" rel="stylesheet">
    <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/flaticon.css" rel="stylesheet">
    <link href="css/linearicons.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/jquery-ui.min.css" rel="stylesheet">
    <link href="css/nice-select.css" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style1.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />

    <style>
        .rounded-image{
            border-radius: 50%;
            -webkit-border-radius: 200px;
            -moz-border-radius: 200px;
            width: 30px;
            height: 30px;
            object-fit: cover;
        }

    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="/" class="logo d-flex align-items-center">
                <img src="img/logo-lowker.png" alt="">
                <!-- <span>FlexStart</span> -->
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="/">Home</a></li>
                    <li><a class="nav-link scrollto" href="/findjobs">Find jobs</a></li>
                    <li><a class="nav-link scrollto" href="/aboutus">About Us</a></li>
                    {{-- <li><a class="nav-link scrollto" href="/login">Login</a></li> --}}

                    @if (Route::has('login'))
                        @auth
                        <li style="position:relative; left:100px"><img src="{{  Auth::user()->profile_photo_url   }}" class="rounded-image"></li>
                        <li class="dropdown pl-5" style="padding-right: 50px;">{{ ucfirst( Auth::user()->name) }}
                            <ul>
                                <li class="align-items-center"><a href="/user"><i class="bi bi-person-circle" style="font-size: 20px;"></i>Lihat Profil</a></li>
                                <li class="align-items-center"><a href="/jobsUser"><i class="bi bi-grid" style="font-size: 20px;"></i>Saved Jobs</a></li>
                                <li class="align-items-center">
                                    <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-jet-dropdown-link href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-jet-dropdown-link>
                                    </form>
                                </li>
                            </ul>
                            @else
                            <li><a href="{{ route('login') }}" class="nav-link scrollto">Log in</a></li>

                            @if (Route::has('register'))
                                <li><a href="{{ route('register') }}" class="job scrollto">Sign Up</a></li>
                                <li><a class="getstarted scrollto" href="/landingPage">Post Vacancy</a></li>

                            @endif
                        @endauth
                @endif

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    @yield('container')

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">



        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="/" class="logo d-flex align-items-center">
                            <img src="img/logo-lowker.png" alt="">

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
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="/">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="/findjobs">Find Jobs</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="/aboutus">About Us</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="/login">Login</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="/register">Sign Up</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="/home">Post Vacancy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Jobs Category</h4>
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
                        <h4>Contact Us</h4>
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
    <script src="vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="vendor/aos/aos.js"></script>
    <script src="vendor/php-email-form/validate.js"></script>
    <script src="vendor/swiper/swiper-bundle.min.js"></script>
    <script src="vendor/purecounter/purecounter.js"></script>
    <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="vendor/glightbox/js/glightbox.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/formunggahan.js"></script>
    <!-- Template Main JS File -->
    <script src="js/main.js"></script>

    {{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}
    @include('sweetalert::alert')


    {{-- untuk templating script --}}
    {{-- jadi nantinya di home blade kita bikin script js nanti di tumpuk di stack itu.--}}
    {{-- kalau pake stack script yang nanti dimasukin sebelumnya ga ilang, kalau misal nantinya mau bikin template
    yang di page lain include page lain juga jadi script nya ga ketimpa
    --}}
    @stack('script-addon')
{{-- nah kalau yield ini isi nya sesuai sama isi section nya kalau stack itu kaya di kumpulin gitu. --}}
    @yield('script')


</body>

</html>
