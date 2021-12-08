@extends('main.layout')

@section('title', 'Beranda | Lowkerjogja.com')

@section('container')

<!-- ======= Hero Section ======= -->

<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">Temukan Karir Impianmu</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">Mudah Bersama Kami</h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <a href="/findjobs" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
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
                                <div class="col-sm-12">
                                    <p style="background-color: #F9FAFF; text-align: center; border-radius: 13%; box-shadow: 0px 2px 20px rgba(1, 41, 112, 0.1);">{{ $l->tipe_pekerjaan }}</p>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-sm-6"></div>
                                <div class="col-sm-6">
                                        <div style="color: #BEBFC0; font-size: 12px;"><i style="padding-right: 10px;" class="bi bi-clock"></i>{{ \Carbon\Carbon::parse($l->created_at)->diffForHumans() }}</div>
                                </div>
                            </div>
                            <div class="row align-items-start">
                                <div class="col">
                                    <form method="post" enctype="multipart/form-data" action="{{ URL::to('/') }}/simpanjob">
                                        {{csrf_field()}}
                                        <input type="hidden" class="form-control" name="idjob" id="idjob" value="{{ $l->id }}">
                                    <div>
                                    <br>

                                         <button class="btn btn-outline-primary" style="float: right;">
                                        <i class="bi bi-plus-square-fill"> Simpan karir</i>
                                    </button>
                                        <img src="logo/{{$l->logo}}" style="float:left; margin:0 8px 4px 0;" width="100px" height="80px" />

                                    </div>
                                    </form>
                                </div>
                                <div class="row align-items-start">
                                    <div class="col" style="padding-top: 15px;">
                                        <a href="/detailmain{{ $l->id }}">{{ $l->nama_corp }}</a>
                                        <h6 style="font-weight: bold;">{{ $l->position }}</h6>
                                        <h6 style="color: #000000;">{{$l->last_education}}</h6>
                                        <h6 style="color: #BEBFC0;">{{$l->gender}}</h6>
                                        <h6 style="color: #BEBFC0;">{{$l->city_name}}, {{$l->province_name}}</h6>
                                        <h6 style="color: #28A59F; padding-top: 5px;">Rp {{ number_format($l->starting_salary) }} - Rp {{ number_format($l->final_salary) }}</h6>
                                        <!-- Button lamar -->
                                        <a class="btn btn-primary" href="/login" role="button">Lamar</a>
                                        <!-- Button detail -->
                                        <a class="btn btn-outline-primary" href="/detailmain{{ $l->id }}" role="button">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div style="padding-left:500px">
                        {{ $lihatjobs->links() }}
                    </div>
        <!--Row Dua-->
        </div>
</section><!-- End Recent Blog Posts Section -->

<!-- ======= Testimonials Section ======= -->

@endsection
