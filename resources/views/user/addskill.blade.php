@extends('user.layout')

@section('title', 'Add Skill | Lowkerjogja.com')

@section('container')
<style>
  #formFile {
    width: 300px;
  }

  .about h6 {
    font-weight: bold;
    color: black;
  }

  .about h6:hover {
    /* background-color: #fff; */
    color: #4154f1;

  }

  .about:active {
    color: #4154f1;
  }

  .col{
            padding-top: 20px;
        }

.image{
            border-radius: 50%;
            -webkit-border-radius: 200px;
            -moz-border-radius: 200px;
            width: 100px;
            height: 100px;
            object-fit: cover;
        }
</style>
<!-- ======= Edit Skill Section ======= -->
<section id="recent-blog-posts" class="recent-blog-posts" style="padding-top: 150px;">

    <div class="container" data-aos="fade-up" style="width: 100%">
        <div class="row">
            <div class="col-sm-3">
                <div class="post-box" style="background-color: #F9FAFF;">
                    <div class="row align-items-start">
                        <div class="col">
                            <div>
                                <img src="{{asset('profile_photos/'. Auth::user()->profile_photo_path)     }}" class="image">
                                <h6 style="font-weight: bold;padding-right:50px; float:right">{{ ucfirst (Auth::user()->name) }}</h6>
                                <h6 style="color:#A5B2C2; font-size: 15px; float:right;position:relative; bottom:60px;padding-right:5px;">View Profile</h6>
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
                    <h6 style="font-weight: bold;" style="padding-right: 50px;">My Profile</h6>
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
                    <h6 style="font-weight:bold; padding-right: 50px;">Education</h6>
                  </div>
                </a>
              </div>
            </div>

            <div class=" row align-items-center">

              <div class="col-sm-2">
                <div class="">

                  <div class="card-body">
                    <img src="/img/icons/bar-chart.png" width="30px" alt="">
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
                            <img src="/img/icons/password.png" width="30px" alt="">
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

        <div class="post-box" style="height: 400px; background-color: #F9FAFF;">

          <div class="row align-items-center">
            <div class="col align-items-center">
              <h6 style="font-weight: bold; margin-top: 8px;">
                <img src="/img/icons/bar-chart.png" width="30px" alt=""> Skill


            </div>
            <form action="{{ url('skill/') }}" method="post">
                @csrf
                 <div class="row align-items-start" style="padding-top: 20px;">
              <div class="col-5">
                <h6 style="color: #A5B2C2;">Level</h6>
              </div>
              <div class="col-5">
                <h6 style="color: #A5B2C2;">Keterampilan</h6>
              </div>
            </div>

            <div class="row align-items-center" style="padding-top: 20px;">
              <div class="col-lg-5 align-items-center">

                <select class="form-select" aria-label="Default select example" name="level">
                  <option selected>-- Pilih Level --</option>
                  <option value="Pemula">Pemula</option>
                  <option value="Tingkat Menengah">Tingkat Menengah</option>
                  <option value="Master">Master</option>
                </select>
              </div>
              <div class="col-lg-6 align-items-center">
                <input class="form-control" name="skill" type="text" placeholder="Lengkapi Keterampilan Anda" aria-label="default input example" value="{{ old('skill') }}">
              </div>

            </div>

            <div class="row">

                <div class="col">
                    <a href="#" style="margin-left: 350px ;" class="btn btn-outline-primary">
                        <span>Cancel</span>
                    </a>
                    <button type="submit" style="margin-left: 10px;" class="btn btn-primary">
                        <span style="padding: 5px;">Save</span>
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

</section>
<!-- End Recent Blog Posts Section -->
@endsection
