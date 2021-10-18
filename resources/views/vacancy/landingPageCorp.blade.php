@extends('vacancy.layout2')

@section('title', 'Beranda | Lowkerjogja.com')

@section('container')
<!-- first -->

<div class="container" style="margin-top: 120px;" data-aos="fade-up">
    <div class="row align-items-center">
        <div class="col-sm-12 col-md-6">
            <h1 style="font-weight: bold;">Posting Lowongan</h1>
            <p style="color: #BEBFC0;">Apakah Anda lebih suka fleksibilitas atau efisiensi yang lebih tinggi, miliki <br> itu dengan cara Anda. Pilih rencana untuk mulai terhubung dengan bakat <br> berpengalaman tentang teknologi & startups.</p>
            <a href="/service" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span style="padding:5px;">Dapatkan Premium</span>
                <!-- <i class="bi bi-arrow-right"></i> -->
            </a>
        </div>
        <div class="col-sm-12 col-md-6"><img src="img//vector/vector-3.png" alt="" width="600px" style="padding-right: 50px;"></div>
    </div>
</div>
<!-- first end -->


<!-- ======= Clients Section ======= -->
<section id="clients" class="clients" style="background-color: #F9FAFF;">

    <div class="container" data-aos="fade-up">

        <header class="section-header" style="padding: 0;">
            <!-- <h2>Our Clients</h2> -->

            <div class="row align-items-center">
                <div class="col-sm-12 col-md-6">
                    <p style="color: #000000;">Alasan Harus Menggunakan </p>

                </div>
                <div class="col-sm-12 col-md-6"> <img src="img/vector/logo-new.png" alt="" width="400px" style="padding-top: 20px;"></div>

        </header>

        <div class="container align-items-center"></div>
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-6">

                <p>Situs <span style="color: #F8F01C; letter-spacing: 1px; font-weight: bold;">LOWKERJOGJA.COM</span> Website dan aplikasi dikunjungi oleh ribuan pencari kerja setiap hari dengan posisi tinggi untuk kata kunci lokal di mesin pencari seperti Google.</p>
                <a href="/formUnggahan" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                    <span style="padding: 5px;">Lowongan Pekerjaan</span>
                    <!-- <i class="bi bi-arrow-right"></i> -->
                </a>
            </div>
            <div class="col-sm-12 col-md-6"><img src="img//vector/vector-2.png" alt="" width="400px" style="margin-left: 150px;"></div>
        </div>
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-6">

                <p>Harga <span style="color: #006AFF;">terjangkau</span>dengan fitur maksimum, integrasi Google Jobs, desain poster standar gratis, layanan dukungan perusahaan yang ramah dan mendukung</p>
                <a href="/candidate" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                    <span style="padding: 5px;">Mencari Kandidat</span>
                    <!-- <i class="bi bi-arrow-right"></i> -->
                </a>
            </div>
            <div class="col-sm-12 col-md-6"><img src="img/vector/vector-1.png" alt="" width="400px" style="margin-left: 150px;"></div>
        </div>
    </div>

</section><!-- End Clients Section -->
<!-- ======= Pricing Section ======= -->
{{-- <section>
    <div class="container" style="position: relative;height: 700px;">
        <h6 style="font-size: 34px;">
            <center><strong>Product And Service</strong></center>
        </h6>
        <br><br>
        <div class="row">
            <div class="col-sm-6">
                <div class="card" style="width:250px;position: relative;left: 300px;height: 610px;">
                    <div class="card-header" style="background-color: #006AFF;color: white;">
                        <center><strong>Job Postings</strong> </center>
                    </div>

                    <div class="card-body">
                        <center style="color: #006AFF;"><strong> Job Postings</strong></center>
                        <center>Pay for only what you need</center>

                        <center>
                            <a href="" class="btn btn-outline-primary" style="margin-top: 50px;width: 200px;border-radius: 10px;position: relative;top: 400px;
                ">Try Now</a>
                        </center>

                    </div>

                </div>
            </div>

            <div class="col-sm-4">
                <div class="card" style="width:250px;position: relative;left: 50px;">
                    <div class="card-header" style="background-color: #006AFF;color: white;">
                        <center><strong>Search Candidate</strong> </center>
                    </div>

                    <div class="card-body">
                        <center style="color: #006AFF;"><strong> Job Postings</strong></center>
                        <center>Unlimited</center>
                        <p style="color: #006AFF; position: relative; top: 30px;text-align: center;">
                            <strong>Features</strong>
                        </p>
                        <p style="position: relative; top: 10px;text-align: center;">
                            5 Featured Job posts
                            Recommended talent Employer branding Salary insights
                        </p>
                        <div class="card" style="position: relative; top: 50px;background: rgba(196, 196, 196, 0.1);box-shadow: 2px 2px 2px rgba(0,0,0,0);">
                            <div class="card-body">
                                <div class="card-title">

                                    <p style="color: #006AFF; position: relative;text-align: center; bottom: 20px;right: 20px;">
                                        <strong>
                                            <img src="img/icons/search.png" style="position: relative;right: 30px;">
                                            Talent Search
                                        </strong>
                                    <h5 style="position: relative;text-align: center; font-size: 20px;">
                                        Unlimited
                                    </h5>
                                    </p>

                                </div>
                                <div class="card-text">
                                    <p style="position: relative;text-align: center;color: #dcdcdc; font-size: 12px;">Full access to 50,000+ resumes </p>
                                </div>
                            </div>

                        </div>
                        <br><br><br>
                        <center>
                            <a href="" class="btn btn-primary btn-lg" style="margin-top: 43px;width: 200px;border-radius: 10px;
                ">Get Premium</a>
                        </center>
                    </div>
                </div>
            </div>
</section> --}}
<!-- End Pricing Section -->

@endsection
