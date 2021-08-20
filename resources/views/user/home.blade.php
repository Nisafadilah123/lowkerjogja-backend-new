@extends('user.layout')

@section('title', 'Home | Lowkerjogja.com')

@section('container')

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">Finds Your Dream Jobs</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">With Us Easily</h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <a href="/findjobsUser" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Get Started</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="img/first.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>



</section><!-- End Hero -->

<!-- Pencarian -->
<section id="find" class="find">
    <div class="container" data-aos="fade-up" style="margin-top: 100px;">
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <div class="container px-4">
                        <div class="row">
                          <div class="col-md-2">

                               <label for="graduate" style="padding-bottom: 10px;padding-top: 10px;"><strong>Graduate</strong> </label>
                               <select id="graduate" class="form-select form-select-sm" aria-label=".form-select-sm example" style="position: relative; width: 220px;height:40px;background-image:url('mortarboard.png');">
                                <option selected> Semua Lulusan</option>
                                <option value="1">SMA/SMK</option>
                                <option value="2">Diploma</option>
                                <option value="3">S1</option>
                              </select>
                            </div>

                            <div class="col-md-6">
                                <label name="provinsi" for="provinsi" style="position: relative; left:200px;width: 300px;padding-top:10px;padding-bottom: 10px;"><strong>Province</strong></label>
                                <select name="provinsi" class="form-select form-select-sm prov-data" aria-label=".form-select-sm example" style="position: relative; left:200px;width: 250px;height:40px">
                                    <option selected>-- Pilih Provinsi --</option>
                                  </select>


                            </div>
                          <div class="col-sm-2">
                            <label name="kota" for="kota" style="position: relative; left:370px;width: 300px;padding-top:10px;padding-bottom: 10px;"><strong>City</strong></label>
                            <select name="kota" class="form-select form-select-sm kota-data" aria-label=".form-select-sm example" style="position: relative; left:320px;width: 250px;height:40px">
                                <option selected>-- Pilih Kota --</option>
                              </select>
                            </div>

                            <div class="col-sm-2">
                                <button type="button" class="btn btn-primary" style="position: relative; left:550px;width:100px;top:45px"><i class="fas fa-search" style="position: relative;padding-right:5px">   Search</a></i>
                            </div>
                      </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- end Pencarian -->




<!-- ======= Clients Section ======= -->
<section id="clients" class="clients">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <!-- <h2>Our Clients</h2> -->
            <p>Featured Companies</p>
        </header>

        <div class="clients-slider swiper-container">
            <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide"><img src="img/clients/asus.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="img/clients/oracle.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="img/clients/gojek.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="img/clients/fb.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="img/clients/ig.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="img/clients/grab.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="img/clients/client-7.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="img/clients/client-8.png" class="img-fluid" alt=""></div>
            </div>
            <br>
            <div class="swiper-pagination"></div>
        </div>
    </div>

</section><!-- End Clients Section -->



<!-- ======= Recent Blog Posts Section ======= -->
<section id="recent-blog-posts" class="recent-blog-posts">

    <div class="container" data-aos="fade-up">

        <header class="section-header">

            <p>Our Latest Jobs Here</p>
            <span style="padding-top: 20px;">More Jobs</span>
        </header>


        <div class="row">

            <div class="col-lg-4">

                <div class="post-box">
                    <div class="row align-items-start">
                        <div class="col">
                            <p style="background-color: #F9FAFF; text-align: center; border-radius: 13%; box-shadow: 0px 2px 20px rgba(1, 41, 112, 0.1);">Full-time</p>

                        </div>

                        <div class="col">
                            <div></div>


                        </div>
                        <div class="col">
                            <div style="color: #BEBFC0; font-size: 12px;"><i style="padding-right: 2px;" class="bi bi-clock"></i>21 Mei 2021</div>


                        </div>
                    </div>

                    <div class="row align-items-start">
                        <div class="col">
                            <div> <i style="padding-left: 200px; padding-top: 10px; z-index: 1; font-size: 20px;" class="bi bi-plus-square-fill"></i>
                                <img src="img/7.png" style="float:left; margin:0 8px 4px 0;" />
                                <br>
                                <h6 style="color:#4154f1; font-weight: bold;">Link aja, Indonesian</h6>


                            </div>

                        </div>
                        <div class="row align-items-start">
                            <div class="col" style="padding-top: 15px;">
                                <h1 style="font-weight: bold; font-size: 27px;">UI Designer</h1>
                                <h6 style="color: #BEBFC0;">Yogyakarta, Indonesia</h6>
                                <h6 style="color: #28A59F; padding-top: 5px;">Rp.5.000.000 - 7.000.000</h6>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">

                <div class="post-box">
                    <div class="row align-items-start">
                        <div class="col">
                            <p style="background-color: #F9FAFF; text-align: center; border-radius: 13%; box-shadow: 0px 2px 20px rgba(1, 41, 112, 0.1);">Full-time</p>

                        </div>

                        <div class="col">
                            <div></div>


                        </div>
                        <div class="col">
                            <div style="color: #BEBFC0; font-size: 12px;"><i style="padding-right: 2px;" class="bi bi-clock"></i>21 Mei 2021</div>


                        </div>
                    </div>

                    <div class="row align-items-start">
                        <div class="col">
                            <div> <i style="padding-left: 200px; padding-top: 10px; z-index: 1; font-size: 20px;" class="bi bi-plus-square-fill"></i>
                                <img src="img/7.png" style="float:left; margin:0 8px 4px 0;" />
                                <br>
                                <h6 style="color:#4154f1; font-weight: bold;">Link aja, Indonesian</h6>


                            </div>

                        </div>
                        <div class="row align-items-start">
                            <div class="col" style="padding-top: 15px;">
                                <h1 style="font-weight: bold; font-size: 27px;">Product Manager</h1>
                                <h6 style="color: #BEBFC0;">Yogyakarta, Indonesia</h6>
                                <h6 style="color: #28A59F; padding-top: 5px;">Rp.5.000.000 - 7.000.000</h6>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">

                <div class="post-box">
                    <div class="row align-items-start">
                        <div class="col">
                            <p style="background-color: #F9FAFF; text-align: center; border-radius: 13%; box-shadow: 0px 2px 20px rgba(1, 41, 112, 0.1);">Full-time</p>

                        </div>

                        <div class="col">
                            <div></div>


                        </div>
                        <div class="col">
                            <div style="color: #BEBFC0; font-size: 12px;"><i style="padding-right: 2px;" class="bi bi-clock"></i>21 Mei 2021</div>


                        </div>
                    </div>

                    <div class="row align-items-start">
                        <div class="col">
                            <div> <i style="padding-left: 200px; padding-top: 10px; z-index: 1; font-size: 20px;" class="bi bi-plus-square-fill"></i>
                                <img src="img/7.png" style="float:left; margin:0 8px 4px 0;" />
                                <br>
                                <h6 style="color:#4154f1; font-weight: bold;">Link aja, Indonesian</h6>


                            </div>

                        </div>
                        <div class="row align-items-start">
                            <div class="col" style="padding-top: 15px;">
                                <h1 style="font-weight: bold; font-size: 27px;">Programmer</h1>
                                <h6 style="color: #BEBFC0;">Yogyakarta, Indonesia</h6>
                                <h6 style="color: #28A59F; padding-top: 5px;">Rp.5.000.000 - 7.000.000</h6>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section><!-- End Recent Blog Posts Section -->



<!-- ======= Counts Section ======= -->
<section id="counts" class="counts">
    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <!-- <h2>Our Clients</h2> -->
            <p>Browse Jobs Category</p>
        </header>


        <div class="clients-slider swiper-container">

            <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide" style="padding-right: 170px;">
                    <div class="container " style="width: 250px; height: 200px;border-radius: 5%; box-shadow: 0px 2px 20px rgba(1, 41, 112, 0.1); padding-right: 15px;">
                        <div class="container">
                            <img src="img/icons/icons-1.png" alt="" style="width: 65px; margin-left: 70px; padding-top: 10px;">

                            <p style="font-size: 18px; font-weight: bold; padding-top: 15px; margin-left: 50px;">Photography</p>
                            <p style="font-size: 18px; font-weight: bold; padding-top: 18px; color: #006AFF; margin-left: 70px;">10 Jobs</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide" style="padding-right: 170px;">
                    <div class="container " style="width: 250px; height: 200px;border-radius: 5%; box-shadow: 0px 2px 20px rgba(1, 41, 112, 0.1); padding-right: 15px;">
                        <div class="container">
                            <img src="img/icons/icons-2.png" alt="" style="width: 65px; margin-left: 70px; padding-top: 10px;">

                            <p style="font-size: 18px; font-weight: bold; padding-top: 15px; margin-left: 65px;">Business</p>
                            <p style="font-size: 18px; font-weight: bold; padding-top: 18px; color: #006AFF; margin-left: 75px;">8 Jobs</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" style="padding-right: 170px;">
                    <div class="container " style="width: 250px; height: 200px;border-radius: 5%; box-shadow: 0px 2px 20px rgba(1, 41, 112, 0.1); padding-right: 15px;">
                        <div class="container">
                            <img src="img/icons/icons-6.png" alt="" style="width: 65px; margin-left: 70px; padding-top: 10px;">

                            <p style="font-size: 18px; font-weight: bold; padding-top: 15px; margin-left: 40px;">UI/UX Designer</p>
                            <p style="font-size: 18px; font-weight: bold; padding-top: 18px; color: #006AFF; margin-left: 70px;">12 Jobs</p>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide" style="padding-right: 170px;">
                    <div class="container " style="width: 250px; height: 200px;border-radius: 5%; box-shadow: 0px 2px 20px rgba(1, 41, 112, 0.1); padding-right: 15px;">
                        <div class="container">
                            <img src="img/icons/icons-3.png" alt="" style="width: 65px; margin-left: 70px; padding-top: 10px;">

                            <p style="font-size: 18px; font-weight: bold; padding-top: 15px; margin-left: 65px;">Education</p>
                            <p style="font-size: 18px; font-weight: bold; padding-top: 18px; color: #006AFF; margin-left: 75px;">10 Jobs</p>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide" style="padding-right: 170px;">
                    <div class="container " style="width: 250px; height: 200px;border-radius: 5%; box-shadow: 0px 2px 20px rgba(1, 41, 112, 0.1); padding-right: 15px;">
                        <div class="container">
                            <img src="img/icons/icons-5.png" alt="" style="width: 65px; margin-left: 70px; padding-top: 10px;">

                            <p style="font-size: 18px; font-weight: bold; padding-top: 15px; margin-left: 20px;">Web Development</p>
                            <p style="font-size: 18px; font-weight: bold; padding-top: 18px; color: #006AFF; margin-left: 73px;">7 Jobs</p>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide" style="padding-right: 170px;">
                    <div class="container " style="width: 250px; height: 200px;border-radius: 5%; box-shadow: 0px 2px 20px rgba(1, 41, 112, 0.1); padding-right: 15px;">
                        <div class="container">
                            <img src="img/icons/icons-4.png" alt="" style="width: 65px; margin-left: 70px; padding-top: 10px;">

                            <p style="font-size: 18px; font-weight: bold; padding-top: 15px; margin-left: 65px;">Account</p>
                            <p style="font-size: 18px; font-weight: bold; padding-top: 18px; color: #006AFF; margin-left: 73px;">5 Jobs</p>

                        </div>
                    </div>
                </div>



            </div>
            <br><br><br>
            <div class="swiper-pagination"></div>
        </div>
    </div>



    </div>

    </div>
</section><!-- End Counts Section -->

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <!-- <h2>Testimonials</h2> -->
            <p>Our Customers Success Story</p>
        </header>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="200">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                        </p>
                        <div class="profile mt-auto">
                            <img src="img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                            <h3>Saul Goodman</h3>
                            <h4>Ceo &amp; Founder</h4>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                        </p>
                        <div class="profile mt-auto">
                            <img src="img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                        </p>
                        <div class="profile mt-auto">
                            <img src="img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                        </p>
                        <div class="profile mt-auto">
                            <img src="img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                        </p>
                        <div class="profile mt-auto">
                            <img src="img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>

</section><!-- End Testimonials Section -->
@endsection

{{-- ini ke scirpt yang numpukin itu. --}}
{{-- @push('script-addon')
<script>
    $.ajax({
        "url":"/get-provinsi",
        "type":"GET",
        success:function(hasil_result){
            console.log("prov",hasil_result)
            var option_prov="<option>-- Pilih Provinsi --</option>";
            hasil_result.forEach(element => {
                option_prov+=`<option value="${element.province_id}">${element.province}</option>`;
            });
            $(".province-data").html(option_prov);
        }
    });

    $(document).on("change",".prov-data",function(){
        var prov_sel = $(".prov-data option:selected").val();
        console.log("pilih prov",prov_sel)
        $.ajax({
            "url":"/get-kota",
            "data":{prov_id:prov_sel},
            "type":"GET",
            success:function(hasil_result){
                console.log("kota",hasil_result)
                var option_prov="<option>-- Pilih Kota --</option>";
                hasil_result.forEach(element => {
                    option_prov+=`<option value="${element.city_id}">${element.city_name}</option>`;
                });
                $(".city-data").html(option_prov);
            }
        });
    });

</script>
@endpush --}}
