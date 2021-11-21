@extends('user.layout')

@section('title', 'Temukan Karir | Lowkerjogja.com')

@section('container')

<!-- find jobs section -->
<style>
    #graduate option[selected]{
        background-image: url('mortarboard.png');
    }
    }
</style>
<!-- Pencarian -->
<section id="find" class="find">
    <div class="container" data-aos="fade-up" style="margin-top: 100px;">
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <div class="container px-4">
                        <div class="row">
                        <div class="col-md-2">

                        <form action="/cari" method="GET">
                            <label for="posisi" style="position: relative;left:430px; width: 220px;height:40px;"><strong>Posisi Pekerjaan</strong> </label>
                            <input class="form-select form-select-sm" aria-label=".form-select-sm example" style="position: relative;left:400px; width: 220px;height:40px;background-image:url('mortarboard.png');" id="position-option" name="cari" name="cari" type="search" placeholder="Cari Posisi" aria-label="Search">
                            <button type="submit" class="btn btn-primary" style="position: relative; left:650px;width:100px;bottom:40px"><i class="fas fa-search" style="position: relative;padding-right:5px" value="cari">   Cari</a></i>
                        </form>

                    </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- end Pencarian -->
<section id="recent-blog-posts" class="recent-blog-posts">
    <div class="container" data-aos="fade-up">
        <div class="row">
        @foreach($lihatjobs as $l)
            <div class="col-sm-4">
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
                            <div style="color: #BEBFC0; font-size: 12px;"><i style="padding-right: 10px;" class="bi bi-clock"></i>{{ \Carbon\Carbon::parse($l->created_at)->diffForHumans() }}</div>
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
                <!-- {{ $lihatjobs->links() }} -->
            </div>

    </div>

</section>
<!-- End Find Jobs Section -->

@endsection
