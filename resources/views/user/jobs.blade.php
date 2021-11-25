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
            <div class="col-sm-4" style="padding-top:10px ">
                <div class="post-box">
                    <div class="row align-items-start">
                        <div class="col">
                            <p style="background-color: #F9FAFF; text-align: center; border-radius: 13%; box-shadow: 0px 2px 20px rgba(1, 41, 112, 0.1);">{{ $l->tipe_pekerjaan }}</p>
                        </div>
                        <div class="col">
                            <div></div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-6"></div>
                        <div class="col-sm-6">
                                <div style="color: #BEBFC0; font-size: 12px;"><i style="padding-right: 2px;" class="bi bi-clock"></i>{{ \Carbon\Carbon::parse($l->created_at)->diffForHumans() }}</div>
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col">
                            <form method="post" enctype="multipart/form-data" action="{{ URL::to('/') }}/deletejob">
                                {{csrf_field()}}
                                <input type="hidden" class="form-control" name="idsimpan" id="idsimpan" value="{{ $l->id }}">
                            <div>
                                <button class="btn" style="float :right"><i class="bi bi-trash"></i></button>
                                <!-- <button class="btn"><i style="padding-left: 200px; padding-top: 10px; z-index: 1; font-size: 20px;" class="bi bi-plus-square-fill"></i></button> -->
                                <img src="logo/{{$l->logo}}" style="float:left; margin:0 8px 4px 0;" width="60px" height="60px" />
                                <br>
                                <h6 style="color:#4154f1; font-weight: bold;">{{$l->nama_corp}}</h6>
                            </div>
                            </form>
                        </div>
                        <div class="row align-items-start">
                            <div class="col" style="padding-top: 15px;">
                                <h1 style="font-weight: bold; font-size: 27px;">{{ $l->position }}</h1>
                                <h6 style="color: #000000;">{{$l->last_education}}</h6>
                                <h6 style="color: #000000;">{{$l->gender}}</h6>
                                <h6 style="color: #BEBFC0;">{{$l->city_name}}, {{$l->province_name}}</h6>
                                <h6 style="color: #28A59F; padding-top: 5px;">Rp {{ number_format($l->starting_salary) }} - Rp {{ number_format($l->final_salary) }}</h6>
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
            <div style="padding-left:500px">
                {{ $lihatsimpan->links() }}
            </div>
    </div>

</section>
<!-- End Find Jobs Section -->



</div>
<!-- End Save Jobs -->

@endsection
