@extends('user.layout')

@section('title', 'Edit Kata Sandi | Lowkerjogja.com')

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
                                <h6 style="font-weight: bold;padding-right:150px; float:right">{{ ucfirst(Auth::user()->name)  }}</h6>
                                <h6 style="color:#A5B2C2; font-size: 15px; float:right;position:relative; bottom:70px;padding-right:100px;">Lihat Profil</h6>
                            </div>
                        </div>

                        <div class="row align-items-center mt-4">

                            <div class="col-sm-2">
                                <div class="">

                                    <div class="card-body">
                                        <img src="/img/icons/user.png" width="30px" alt="">
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="col-sm-6">
                                <a href="/user" class="about">
                                    <div class="card-body" style="width: 300px; padding-left: 30px;">
                                        <h6 style="font-weight: bold;" style="padding-right: 50px;text-decoration:none">Profil Saya</h6>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="row align-items-center">

                            <div class="col-sm-2">
                                <div class="">

                                    <div class="card-body">
                                        <img src="/img/icons/mortarboard.png" width="35px" alt="">
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="col-sm-6">
                                <a href="/education" class="about">
                                    <div class="card-body" style="width: 300px; padding-left: 30px;">
                                        <h6 style="font-weight: bold;" style="padding-right: 50px;text-decoration:none">Pendidikan</h6>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="row align-items-center">

                            <div class="col-sm-2">


                                <div class="card-body">
                                    <img src="/img/icons/bar-chart.png" width="30px" alt="">

                                </div>
                            </div>
                            <br><br>
                            <div class="col-sm-6">
                                <a href="/skill" class="about">
                                    <div class="card-body" style="width: 300px; padding-left: 30px;">
                                        <h6 style="font-weight: bold;" style="padding-right: 50px;text-decoration:none">Keahlian</h6>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="row align-items-center">

                            <div class="col-sm-2">
                                <div class="">

                                    <div class="card-body">
                                        <img src="/img/icons/password.png" width="30px" alt="">
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="col-sm-6">
                                <a href="/password" class="about">
                                    <div class="card-body" style="width: 300px; padding-left: 30px;">
                                        <h6 style="font-weight: bold;" style="padding-right: 50px;text-decoration:none">Kata Sandi</h6>
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
                            <img src="/img/icons/password.png" alt="" width="30px" style="float: left;">

                            <h6 style="font-weight: bold; margin-left: 50px; margin-top: 8px;">Kata Sandi</h6>

                        </div>

                        <form method="post" action="/user/{{ (Auth::user()->id) }}/updatePassword">
                            @method('POST')
                            @csrf


                         @foreach ($errors->all() as $error)
                         <p class="text-danger">{{ $error }}</p>
                      @endforeach

                            <div class="row align-items-start" style="padding-top: 20px;">
                            <div class="col-4">
                                <h6 style="color: #A5B2C2;">Ubah Kata Sandi</h6>
                            </div>
                        </div>

                        <div class="row align-items-center" style="padding-top: 20px;">
                            <div class="col-lg-4 align-items-center">

                                <h6>Kata Sandi baru</h6>
                            </div>
                            <div class="col-lg-6 align-items-center">
                                <input name="new_password" type="password" class="form-control" id="new_password" placeholder="Silahkan Isi Password Anda">
                            </div>
                        </div>

                        <div class="row align-items-center" style="padding-top: 20px;">
                            <div class="col-lg-4 align-items-center">

                                <h6>Ulangi Kata Sandi</h6>
                            </div>
                            <div class="col-lg-6 align-items-center">
                                <input name="new_confirm_password" type="password" class="form-control" id="new_confirm_password" placeholder="Silahkan Isi Ulang Password Anda">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <br>
                                <a href="/password" style="margin-left: 350px ;" class="btn btn-outline-primary">
                                    <span>Batalkan</span>
                                </a>
                                <button type="submit" style="margin-left: 10px;" class="btn btn-primary">
                                    <span style="padding: 5px;">Simpan</span>
                            </div>
                        </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    </div>

</section><!-- End Recent Blog Posts Section -->

@endsection
