@extends('user.layout')

@section('title', 'Edit Profile | Lowkerjogja.com')

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
                                <h6 style="color:#A5B2C2; font-size: 15px; float:right;position:relative; bottom:70px;padding-right:100px;">View Profile</h6>
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
                                        <h6 style="font-weight: bold;" style="padding-right: 50px;text-decoration:none">My Profile</h6>
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
                                        <h6 style="font-weight: bold;" style="padding-right: 50px;text-decoration:none">Education</h6>
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
                                        <h6 style="font-weight: bold;" style="padding-right: 50px;text-decoration:none">Skills</h6>
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
                                        <h6 style="font-weight: bold;" style="padding-right: 50px;text-decoration:none">Password</h6>
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
                                    <img src="/img/icons/user.png" alt="" width="35px" style="float: left;">

                                    <h6 style="font-weight: bold; margin-left: 50px; margin-top: 8px;">My Profile<a href="corp-edit-about.html"></a></h6>

                                </div>
                            </div>
                        </div>
                    </h5>
                    <div class="card-body">
                        {{-- @foreach ($users as $item) --}}

                        <form method="post" action="/user/{{ (Auth::user()->id) }}" enctype="multipart/form-data">
                            @method('PUT')
                               @csrf
            <div class="row align-items-start" style="padding-top: 20px;">
                          <div class="col-12">
                            <!-- nama -->
                        <div class="row">
                            <label for="nama">Nama Lengkap</label>
                            <div class="col-12">
                                <input name="name" type="text" class="form-control" value="{{ ucfirst(Auth::user()->name) }}" placeholder="Silahkan Isi Data Nama Anda">
                            </div>
                        </div>

                        <br>
                        <!-- provinsi dan kota -->
                        <div class="row">
                            <div class="col-6">
                                <label name="provinsi" for="provinsi">Provinsi</label>
                                <select name="provinsi" class="form-select form-select-sm prov-data" aria-label="Default select example">
                                    <option selected>-- Pilih Provinsi --</option>
                                </select>
                            </div>

                            <div class="col-6">
                                <label name="kota" for="kota">Kota</label>
                            <select name="kota" class="form-select form-select-sm kota-data" aria-label="form-select-sm example">
                                <option selected>-- Pilih Kota --</option>
                            </select>
                            </div>
                        </div>
                        <br>

                        <!-- email -->
                        <div class="row g-3">
                            <label for="nama">Alamat</label>
                            <div class="col">
                                <input name="address" type="text" class="form-control" value="{{ (Auth::user()->address) }}" placeholder="Silahkan Isi Data Alamat Anda">
                            </div>
                        </div>


                        <!-- email -->
                        <div class="row g-3">
                            <label for="nama">Email</label>
                            <div class="col">
                                <input name="email" type="text" class="form-control" value="{{ (Auth::user()->email) }}" placeholder="Silahkan Isi Data Email Anda">
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Example file input</label>
                                <input name="profile_photo_path" type="file" class="form-control-file" id="profile_photo_path">
                                <img src="{{asset('profile_photos/'. Auth::user()->profile_photo_path)     }}" class="img-thumbnail" width="100px">
                                <input name="profile_photo_path" type="hidden" name="hidden_image" value="{{asset('profile_photos/'. Auth::user()->profile_photo_path)     }}" class="form-control-file" id="hidden_image">
                            </div>

                            <div class="row">

                                <div class="col">
                                    <a href="/user" style="margin-left: 350px ;" class="btn btn-outline-primary">
                                        <span>Cancel</span>
                                    </a>
                                    <button type="submit" style="margin-left: 10px;" class="btn btn-primary">
                                        <span style="padding: 5px;">Save</span>
                                </div>
                            </div>
                        </div>
                    </form>

                    {{-- @endforeach --}}


                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    </div>

</section>


@endsection

@push('script-addon')
<script>
    $.ajax({
        "url":"/get-provinsi",
        "type":"GET",
        success:function(hasil_result){
            console.log("prov",hasil_result)
            var option_prov="<option>-- Pilih Provinsi --</option>";
            hasil_result.forEach(element => {
                option_prov+=`<option value="${element.province}">${element.province}</option>`;
            });
            $(".prov-data").html(option_prov);
        }
    });

    $(document).on("change",".prov-data",function(){
        var prov_sel = $(".prov-data option:selected").val();
        console.log("pilih prov",prov_sel)
        $.ajax({
            "url":"/get-kota",
            "data":{province:prov_sel},
            "type":"GET",
            success:function(hasil_result){
                console.log("kota",hasil_result)
                var option_prov="<option>-- Pilih Kota --</option>";
                hasil_result.forEach(element => {
                    option_prov+=`<option value="${element.city_name}">${element.city_name}</option>`;
                });
                $(".kota-data").html(option_prov);
            }
        });
    });

</script>
@endpush
