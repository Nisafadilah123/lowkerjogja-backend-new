@extends('layouts.company')

@section('title', 'Home | Lowkerjogja.com')

@section('container')
<!-- first -->

<div class="container" style="margin-top: 120px;" data-aos="fade-up">
    <div class="row align-items-center">
        <div class="col-sm-12 col-md-6">
            <h1 style="font-weight: bold;">Posts Jobs</h1>
            <p style="color: #BEBFC0;">Whether you prefer flexibility or higher efficiency, have <br> it your way. Pick a plan to start connecting with talent <br> passionate about tech & startups.</p>
            <a href="/service" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span style="padding:5px;">Get Premium</span>
                <!-- <i class="bi bi-arrow-right"></i> -->
            </a>
        </div>
        <div class="col-sm-12 col-md-6"><img src="/img/vector/vector-3.png" alt="" width="600px" style="padding-right: 50px;"></div>
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
                    <p style="color: #000000;">The reason you should use </p>

                </div>
                <div class="col-sm-12 col-md-6"> <img src="/img/vector/logo-new.png" alt="" width="400px" style="padding-top: 20px;"></div>

        </header>

        <div class="container align-items-center"></div>
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-6">

                <p>The <span style="color: #F8F01C; letter-spacing: 1px; font-weight: bold;">LOWKERJOGJA.COM</span> website and application are visited by thousands of job seekers every day with high positions for local keywords in search engines like Google</p>
                <a href="/formUnggahan" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                    <span style="padding: 5px;">Jobs Postings</span>
                    <!-- <i class="bi bi-arrow-right"></i> -->
                </a>
            </div>
            <div class="col-sm-12 col-md-6"><img src="/img/vector/vector-2.png" alt="" width="400px" style="margin-left: 150px;"></div>
        </div>
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-6">

                <p>Low <span style="color: #006AFF;">price</span> with maximum features, Google Jobs integration, free standard poster design, friendly and supportive company support service</p>
                <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                    <span style="padding: 5px;">Looking for Candidate</span>
                    <!-- <i class="bi bi-arrow-right"></i> -->
                </a>
            </div>
            <div class="col-sm-12 col-md-6"><img src="/img/vector/vector-1.png" alt="" width="400px" style="margin-left: 150px;"></div>
        </div>
    </div>

</section><!-- End Clients Section -->

@endsection
