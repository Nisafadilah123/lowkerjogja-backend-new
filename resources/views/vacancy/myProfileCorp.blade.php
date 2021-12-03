@extends('vacancy.layout2')

@section('title', 'Profil Saya | Lowkerjogja.com')

@section('container')

<!-- ======= Recent Blog Posts Section ======= -->

<style>
.image{
            border-radius: 50%;
            -webkit-border-radius: 200px;
            -moz-border-radius: 200px;
            width: 100px;
            height: 100px;
            object-fit: cover;
        }
</style>
<section id="recent-blog-posts" class="recent-blog-posts" style="padding-top: 150px;">

    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-4">
                <div class="post-box" style="background-color: #F9FAFF;">

                    <div class="row align-items-start">
                        <div class="col">
                            <div>
                                <img src="{{asset('profile_photos/'. Auth::user()->profile_photo_path)     }}" class="image">
                                <h6 style="font-weight: bold;position:relative; left:120px;bottom:70px;">{{ ucfirst(Auth::user()->name)  }}</h6>
                                <h6 style="color:#A5B2C2; font-size: 15px; float:right;position:relative; bottom:70px;padding-right:100px;">Lihat Profil</h6>                            </div>
                        </div>

                        <div class="row align-items-center mt-4">

                            <div class="col-sm-2">
                                <div class="">

                                    <div class="card-body">
                                        <i class="fas fa-user"></i>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="col-sm-6">
                                <a href="/owner" class="about">
                                    <div class="card-body" style="width: 300px;">
                                        <h6 style="font-weight: bold;" style="text-decoration:none">Profil Saya</h6>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="row align-items-center">

                            <div class="col-sm-2">
                                <div class="">

                                    <div class="card-body">
                                        <i class="fas fa-lock"></i>
                                    </div>
                                </div>
                            </div>
                        <br><br>
                        <div class="col-sm-6">
                            <a href="/passwordCorp" class="about">
                                <div class="card-body" style="width: 200px;">
                                    <h6 style="font-weight: bold;">Kata Sandi</h6>
                                </div>
                            </a>
                        </div>
                        </div>

                </div>

                </div>
            </div>


            <div class="col-lg-8">

                <div class="post-box" style="height: 350px; background-color: #F9FAFF;">

                    <div class="row align-items-center">
                        <div class="col align-items-center">
                            <img src="img/icons/user.png" alt="" width="35px" style="float: left;">

                            <h6 style="font-weight: bold; margin-left: 50px; margin-top: 8px;">Profil Saya</h6>
                            {{-- @foreach ($users as $item) --}}
                            <a href="{{ url('owner/'. Auth::user()->id.'/edit') }}">
                                <i class="bi bi-pencil-square" style="font-size: 18px; color: #4154f1; float: right; "></i>
                            </a>
                            {{-- @endforeach --}}


                        </div>
                        <div class="row align-items-center" style="padding-top: 20px;">
                            <div class="col-lg-3">
                                <h6 style="color: #A5B2C2;">Nama</h6>
                            </div>

                            <div class="col-lg-4">
                                <h6 style="font-weight: bold;">{{ ucfirst (Auth::user()->name) }}</h6>
                            </div>
                        </div>

                        <div class="row align-items-center" style="padding-top: 20px;">
                            <div class="col-lg-3">
                                <h6 style="color: #A5B2C2;">Email</h6>
                            </div>

                            <div class="col-lg-4">
                                <h6 style="font-weight: bold;">{{ Auth::user()->email }}</h6>
                            </div>
                        </div>

                        <div class="row align-items-center" style="padding-top: 20px;">
                            <div class="col-lg-3">
                                {{-- <h6 style="color: #A5B2C2;">Alamat</h6> --}}
                            </div>

                            {{-- <div class="col-lg-4">
                                    <h6 style="font-weight: bold;">{{ Auth::user()->address }}, {{ $city->city_name ?? "Silahkan Isi Data Alamat Anda" }}, {{ $province->province ?? "" }}</h6>
                            </div> --}}
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>

    </div>

    </div>

</section><!-- End Recent Blog Posts Section -->
@endsection
