@extends('user.layout')

@section('title', 'Simpan karir | Lowkerjogja.com')

@section('container')
<section id="testimonials" class="testimonials" style="margin-top: 10px;"></section>

<div class="container" data-aos="fade-up">

    <header class="section-header">
        <!-- <h2>Testimonials</h2> -->
        <p>Simpan Karir</p>
    </header>
</div>
</section>

<!-- Save jobs -->
<!-- ======= Recent Blog Posts Section ======= -->
<section id="recent-blog-posts" class="recent-blog-posts">
    <div class="container" data-aos="fade-up">
        <div class="row">
        @foreach($lihatsimpan as $l)
            <div class="col-lg-4">
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
                            <form method="post" enctype="multipart/form-data" action="{{ URL::to('/') }}/deletejob">
                                {{csrf_field()}}
                                <input type="hidden" class="form-control" name="idsimpan" id="idsimpan" value="{{ $l->id }}">
                            <div> 
                                <button class="btn" style="padding-left: 150px;"><i class="bi bi-trash"></i></button>
                                <!-- <button class="btn"><i style="padding-left: 200px; padding-top: 10px; z-index: 1; font-size: 20px;" class="bi bi-plus-square-fill"></i></button> -->
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
                                <h6 style="color: #28A59F; padding-top: 5px;">{{ $l->salary_range }}</h6>                    
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

</section>
<!-- End Find Jobs Section -->
<!-- <div class="container" style="background-color: #F9FAFF; margin-bottom: 50px; box-shadow: 0px 2px 20px rgba(1, 41, 112, 0.1);">
    <section id="recent-blog-posts" class="recent-blog-posts">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-4">
                    <div class="post-box" style="background-color: white;">
                        <div class="row align-items-start">
                            <div class="col">
                                <p style="background-color: #F9FAFF; text-align: center; border-radius: 10px; box-shadow: 0px 2px 20px rgba(1, 41, 112, 0.1);">Full-time</p>
                            </div>
                            <div class="col">
                                <div></div>
                            </div>
                            <div class="col">
                                <div style="color: #BEBFC0; font-size: 10px;"><i style="padding-right: 2px;" class="bi bi-clock"></i>21 Mei 2021</div>
                            </div>
                        </div>
                        <div class="row align-items-start">
                            <div class="col">
                                <div> <i style="padding-left: 200px; padding-top: 10px; z-index: 1; font-size: 20px;" class="bi bi-trash"></i>
                                    <img src="img/google.png" style="width: 50px; float:left; margin:0 8px 4px 0;" />
                                    <br>
                                    <h6 style="color:#4154f1; font-weight: bold;">Google, Indonesia</h6>
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
    </section>End Recent Blog Posts Section -->

</div>
<!-- End Save Jobs -->

@endsection