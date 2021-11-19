@extends('main.layout')

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
    <div class="wrap">
        <div class="form-group">
            <div class="container">
                <div class="row">
                    <div>
                        <form action="/carimain" method="GET">
                            <label for="posisi" style="position: relative;left:155px; width: 220px;height:40px;"><strong>Posisi Pekerjaan</strong></label>
                            <input class="form-select form-select-sm" aria-label=".form-select-sm example" style="width:325px; background-image:url('mortarboard.png');" id="position-option" name="cari" name="cari" type="search" placeholder="Cari Posisi" aria-label="Search">  
                            <button type="submit" class="btn btn-primary" style="position: relative; left:350px;width:100px;bottom:35px"><i class="fas fa-search" value="cari">   Cari</a></i> 
                        </form>                                                 
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
                                <a class="btn btn-primary" href="/login" role="button">Lamar</a>
                                <!-- Button detail -->
                                <a class="btn btn-primary" href="/detailmain{{ $l->id }}" role="button">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div style="padding-left:500px">
                {{ $lihatjobs->links() }}
            </div>
    </div>

</section>
<!-- End Find Jobs Section -->

@endsection
