@extends('user.layout')

@section('title', 'Education | Lowkerjogja.com')

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
                                <img src="{{  Auth::user()->profile_photo_url   }}" class="image">
                                <h6 style="font-weight: bold;padding-right:150px; float:right">{{ ucfirst (Auth::user()->name) }}</h6>
                                <h6 style="color:#A5B2C2; font-size: 15px; float:right;position:relative; bottom:70px;padding-right:100px;">View Profile</h6>
                            </div>
                        </div>



                        <div class="row align-items-center mt-4">

                            <div class="col-sm-2">
                                <div class="">

                                    <div class="card-body">
                                        <img src="img/icons/user.png" width="30px" alt="">
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="col-sm-6">
                                <a href="/myprofile" class="about">
                                    <div class="card-body" style="width: 300px; padding-left: 30px;">
                                        <h6 style="font-weight: bold;" style="padding-right: 50px;">My Profile</h6>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="row align-items-center">

                            <div class="col-sm-2">
                                <div class="">

                                    <div class="card-body">
                                        <img src="img/icons/mortarboard.png" width="35px" alt="">
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="col-sm-6">
                                <a href="/education" class="about">
                                    <div class="card-body" style="width: 300px; padding-left: 30px;">
                                        <h6 style="font-weight: bold;" style="padding-right: 50px;">Education</h6>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="row align-items-center">

                            <div class="col-sm-2">
                                <div class="">

                                    <div class="card-body">
                                        <img src="img/icons/bar-chart.png" width="30px" alt="">
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="col-sm-6">
                                <a href="/skill" class="about">
                                    <div class="card-body" style="width: 300px; padding-left: 30px;">
                                        <h6 style="font-weight: bold;" style="padding-right: 50px;">Skills</h6>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="row align-items-center">

                            <div class="col-sm-2">
                                <div class="">

                                    <div class="card-body">
                                        <img src="img/icons/password.png" width="30px" alt="">
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="col-sm-6">
                                <a href="/password" class="about">
                                    <div class="card-body" style="width: 300px; padding-left: 30px;">
                                        <h6 style="font-weight: bold;" style="padding-right: 50px;">Password</h6>
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
                            <img src="img/icons/mortarboard.png" alt="" width="35px" style="float: left;">

                            <h6 style="font-weight: bold; margin-left: 50px; margin-top: 8px;">Education<a href="/editEdu">
                                    <i class="bi bi-pencil-square" style="padding-left: 270px; font-size: 25px; color: #4154f1; float: right; "></i></a></h6>

                        </div>
                        <div class="row align-items-start" style="padding-top: 20px;">
                            <div class="col-4">
                                <h6 style="color: #A5B2C2;">September 2020</h6>
                            </div>

                            <div class="col-lg-4">
                                <h6 style="font-weight: bold;">Unjani</h6>
                                <h6 style="color: #A5B2C2;">Level <span style="margin-left: 35px; color: black;">(S1)</span></h6>
                                <h6 style="color: #A5B2C2;">Major <span style="margin-left: 35px; color: black;">Sistem Informasi</span></h6>
                                <h6 style="color: #A5B2C2;">GPA <span style="margin-left: 42px; color: black;">3.5/4.0</span></h6>
                            </div>
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
