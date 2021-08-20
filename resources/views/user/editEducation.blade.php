@extends('user.layout')

@section('title', 'Edit Education | Lowkerjogja.com')

@section('container')

<!-- ======= Recent Blog Posts Section ======= -->
<section id="recent-blog-posts" class="recent-blog-posts" style="padding-top: 150px;">

    <div class="container" data-aos="fade-up">


        <div class="row">

            <div class="col-lg-4">

                <div class="post-box" style="background-color: #F9FAFF;">

                    <div class="row align-items-start">
                        <div class="col">
                            <div>
                                <img src="img/team/team-1.jpg" width="80px" style="border-radius: 50%; float:left; margin:0 8px 4px 0;" alt="">

                                <br>
                                <h6 style="font-weight: bold;">John</h6>
                                <h6 style="color:#A5B2C2; font-size: 15
                  px;">View Profile</h6>
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
                                        <h6 style="padding-right: 50px;">Education</h6>
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

                <div class="card">
                    <h5 class="card-header">
                        <div class="container px-1">
                            <div class="row">
                                <div class="col align-items-center">
                                    <img src="img/icons/mortarboard.png" alt="" width="35px" style="float: left;">

                                    <h6 style="font-weight: bold; margin-left: 50px; margin-top: 8px;">Education<a href="corp-edit-about.html"></a></h6>

                                </div>
                            </div>
                        </div>
                    </h5>
                    <div class="card-body">
                        <div class="row align-items-center">

                            <div class="row align-items-center" style="padding-top: 15px;">

                                <div class="col-lg-4">
                                    <h6 style="float: right;"> <span style="font-weight: 600; color: #BEBFC0;">Institusi / Universitas <span style="color: red;">*</span></span></h6>
                                </div>

                                <div class="col">
                                    <input class="form-control" type="text" placeholder="Institusi / Universitas" value="Unjani">
                                </div>

                            </div>

                            <div class="row align-items-center" style="padding-top: 15px;">

                                <div class="col-lg-4">
                                    <h6 style="float: right;"> <span style="font-weight: 600; color: #BEBFC0;">Tanggal Wisuda <span style="color: red;">*</span></span></h6>
                                </div>

                                <div class="col">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>September</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>2020</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row align-items-center" style="padding-top: 15px;">
                                <div class="col-lg-4">
                                    <h6 style="float: right;"> <span style="font-weight: 600; color: #BEBFC0;">Jenjang <span style="color: red;">*</span></span></h6>
                                </div>


                                <div class="col">
                                    <select class="form-select" id="inputGroupSelect01">
                                        <option selected>Sarjana (S1)</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>

                            </div>

                            <div class="row align-items-center" style="padding-top: 15px;">

                                <div class="col-lg-4">
                                    <h6 style="float: right;"> <span style="font-weight: 600; color: #BEBFC0;">Jurusan <span style="color: red;">*</span></span></h6>
                                </div>

                                <div class="col">
                                    <input class="form-control" type="text" placeholder="Jurusan" value="Teknik Informatika">
                                </div>

                            </div>

                            <div class="row align-items-center" style="padding-top: 15px;">
                                <div class="col-lg-4">
                                    <h6 style="float: right;"> <span style="font-weight: 600; color: #BEBFC0;">Nilai Akhir <span style="color: red;">*</span></span></h6>
                                </div>


                                <div class="col">
                                    <select class="form-select" id="inputGroupSelect01">
                                        <option selected>IPK</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>

                            </div>

                            <div class="row align-items-center" style="padding-top: 15px;">

                                <div class="col-lg-4">
                                    <h6 style="float: right;"> <span style="font-weight: 600; color: #BEBFC0;">Nilai Akhir <span style="color: red;">*</span></span></h6>
                                </div>

                                <div class="col">
                                    <div class="row align-items-center">
                                        <div class="col-md-4">
                                            <input class="form-control" type="text" placeholder="Nilai Akhir" value="3.5">
                                        </div>
                                        <div class="col-md-2">
                                            <p style="color: #BEBFC0; padding-top: 10px; text-align: center;">dari</p>
                                        </div>
                                        <div class="col-md-4">
                                            <input class="form-control" type="text" placeholder="Nilai Akhir" value="4.0">
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col">
                                    <a href="#about" style="margin-left: 350px ;" class="btn-get-started-new scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                        <span>Cancel</span>
                                        <!-- <i class="bi bi-arrow-right"></i> -->
                                    </a>
                                    <a href="#about" style="margin-left: 10px;" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                        <span style="padding: 5px;">Save</span>
                                        <!-- <i class="bi bi-arrow-right"></i> -->
                                    </a>
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
