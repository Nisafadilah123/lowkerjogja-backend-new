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

    <!-- Template Main CSS File -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style1.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />

    <style>
        .pricing .box .header-new {

            /* z-index: 997; */
            margin: 0;

            height: 50px;
            background-color: #006AFF;
        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

          <a href="index.html" class="logo d-flex align-items-center">
            <img src="assets/img/logo-lowker.png" alt="">
            <!-- <span>FlexStart</span> -->
          </a>

          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto active" href="#hero">Product And Service</a></li>
              <li><a class="nav-link scrollto" href="corp-faq.html">FAQ</a></li>

              <li style="padding-left: 500px;">
                <div>
                  <ul>
                    <li style="text-align: right; padding-right: 10px;"><a href="#"
                        style="font-size: 23px; color: black;">Michael</a><span
                        style="font-size: 12px; position: absolute; top: 38px; right: 12px; color: #BEBFC0;">Bukalapak</li>
                  </ul>
                </div>
              </li>
              <i class="bi bi-bell-fill" style="color: #FA9746;  font-size: 20px;"></i>
              <li class="dropdown" style="padding-right: 50px;"><a href="#"><i class="bi bi-caret-down-fill"></i></a>
                <ul style="width: 250px;">
                  <li><a href="#"><img src="assets/img/icons/building.png" width="20px" alt=""><span
                        style="font-size: 13px; padding-left: 10px;">Profile Corporate</span></a></li>
                  <li><a href="#"><img src="assets/img/icons/password.png" width="20px" alt=""><span
                        style="font-size: 13px; padding-left: 10px;">Change Passwords</span></a></li>

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
                        <a href="index.html" class="logo d-flex align-items-center">
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
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Find Jobs</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">About Us</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Login</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Sign Up</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Post Vacancy</a></li>
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

    <!-- Template Main JS File -->
    <script src="js/main.js"></script>

 <!-- rev -->
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></script> <!-- rev -->
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script> <!-- rev -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> <!-- rev -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> <!-- rev -->
 <script src="js/formunggahan.js"></script> <!-- rev -->

</body>

</html>
