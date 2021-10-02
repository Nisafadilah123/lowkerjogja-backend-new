@extends('user.layout')

@section('title', 'Beranda | Lowkerjogja.com')

@section('container')

<!-- ======= Hero Section ======= -->

<section id="hero" class="hero d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">Temukan karir Impianmu</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">Mudah Bersama Kami</h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <a href="/findjobsUser" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Mulai Sekarang</span>
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

                            <label for="graduate" style="padding-bottom: 10px;padding-top: 10px;"><strong>Lulusan</strong> </label>
                            <select id="graduate" class="form-select form-select-sm" aria-label=".form-select-sm example" style="position: relative; width: 220px;height:40px;background-image:url('mortarboard.png');">
                                <option selected> Semua Lulusan</option>
                                <option value="S3">S3</option>
                                    <option value="S2">S2</option>
                                    <option value="S1/D4">S1/D4</option>
                                    <option value="D3">D3</option>
                                    <option value="SMA/SMK">SMA/SMK</option>
                            </select>
                            </div>

                            <div class="col-md-6">
                                <label name="provinsi" for="provinsi" style="position: relative; left:200px;width: 300px;padding-top:10px;padding-bottom: 10px;"><strong>Provinsi</strong></label>
                                <select name="provinsi" class="form-select form-select-sm prov-data" aria-label=".form-select-sm example" style="position: relative; left:200px;width: 250px;height:40px">
                                    <option selected>-- Pilih Provinsi --</option>
                                </select>


                            </div>
                        <div class="col-sm-2">
                            <label name="kota" for="kota" style="position: relative; left:320px;width: 300px;padding-top:10px;padding-bottom: 10px;"><strong>Kota</strong></label>
                            <select name="kota" class="form-select form-select-sm kota-data" aria-label=".form-select-sm example" style="position: relative; left:320px;width: 250px;height:40px">
                                <option selected>-- Pilih Kota --</option>
                            </select>
                            </div>

                            <div class="col-sm-2">
                                <button type="button" class="btn btn-primary" style="position: relative; left:550px;width:100px;top:45px"><i class="fas fa-search" style="position: relative;padding-right:5px">   Cari</a></i>
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
            <p>Perusahaan Unggulan</p>
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
            <p>Karir Terbaru Kami disini</p>
            <span style="padding-top: 20px;">Lebih Banyak Karir</span>
        </header>

        {{-- menampilkan relasi antar tabel corps dan jobs --}}

        <div class="row">
        @foreach($lihatjobs as $l)
            <div class="col-sm-4" style="padding-top:10px ">
                <div class="post-box">
                    <div class="row align-items-start">
                        <div class="col">
                            <p style="background-color: #F9FAFF; text-align: center; border-radius: 13%; box-shadow: 0px 2px 20px rgba(1, 41, 112, 0.1);">{{ $l->job_type }}</p>
                        </div>
                        <div class="col">
                            <div></div>
                        </div>
                        <div class="col">
                            <div style="color: #BEBFC0; font-size: 12px;"><i style="padding-right: 2px;" class="bi bi-clock"></i>{{ $l->created_at }}</div>
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col">
                            <form method="post" enctype="multipart/form-data" action="{{ URL::to('/') }}/simpanjob">
                                {{csrf_field()}}
                                <input type="hidden" class="form-control" name="idjob" id="idjob" value="{{ $l->id }}">
                            <div>
                                <button class="btn" style="float: right;">
                                    <i class="bi bi-plus-square-fill"></i>
                                </button>
                                <img src="/template/img/logo/{{$l->logo}}" style="float:left; margin:0 8px 4px 0;" />
                                <br>
                                <h6 style="color:#4154f1; font-weight: bold;">{{$l->nama_corp}}</h6>
                            </div>
                            </form>
                        </div>
                        <div class="row align-items-start">
                            <div class="col" style="padding-top: 15px;">
                                <h1 style="font-weight: bold; font-size: 27px;">{{ $l->position }}</h1>
                                <h6 style="color: #000000;">{{$l->last_education}}</h6>
                                <h6 style="color: #BEBFC0;">{{$l->city}}, {{$l->provinces}}</h6>
                                <h6 style="color: #28A59F; padding-top: 5px;">Rp {{ number_format($l->salary_range) }}</h6>
                                <!-- Button lamar -->
                                <a class="btn btn-primary" href="/lamar{{ $l->id }}" role="button">Lamar</a>
                                <!-- Button detail -->
                                <a class="btn btn-primary" href="/detail{{ $l->id }}" role="button">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
    </div>


        <!--Row Dua-->
        </div>
</section><!-- End Recent Blog Posts Section -->



<!-- ======= Counts Section ======= -->
<section id="counts" class="counts">
    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <!-- <h2>Our Clients</h2> -->
            <p>Telusuri Kategori Karir</p>
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
            <p>Pengalaman Sukses Kustomer Kami</p>
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
{{-- ini ke scirpt yang numpukin itu. --}}
@push('script-addon')
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
            $(".prov-data").html(option_prov);
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
                $(".kota-data").html(option_prov);
            }
        });
    });
</script>
@endpush
