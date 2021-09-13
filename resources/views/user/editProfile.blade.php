@extends('user.layout')

@section('title', 'Edit Profile | Lowkerjogja.com')

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
                                <a href="/profileUser" class="about">
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
                                    <img src="img/icons/user.png" alt="" width="35px" style="float: left;">

                                    <h6 style="font-weight: bold; margin-left: 50px; margin-top: 8px;">My Profile<a href="corp-edit-about.html"></a></h6>

                                </div>
                            </div>
                        </div>
                    </h5>
                    <div class="card-body">
                        <!-- nama -->
                        <div class="row g-3">
                            <label for="nama">Nama</label>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Jhons" aria-label="First name">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Michael" aria-label="Last name">
                            </div>
                        </div>

                        <br>
                        <!-- address -->
                        <div class="row g-3">
                            <label for="nama">Address</label>
                            <div class="col">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Yogyakarta</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>DIY Yogyakarta</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <br>

                        <!-- email -->
                        <div class="row g-3">
                            <label for="nama">Email</label>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Jhons@gmail.com" aria-label="First name">
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col mt-4">
                                <div class="fileUpload btn btn-outline-dark">
                                    <span style="font-size: 13px;">Browse...</span>
                                    <input id="uploadBtn" type="file" class="upload" />
                                </div>

                            </div>
                            <div class="col">
                                <a href="#about" class="btn-get-started-new scrollto d-inline-flex align-items-center justify-content-center align-self-center">
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

</section>


@endsection
