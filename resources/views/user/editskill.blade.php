@extends('user.layout')

@section('title', 'Edit Skill | Lowkerjogja.com')

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
</style>
<!-- ======= Edit Skill Section ======= -->
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
                    <h6 style="font-weight:bold; padding-right: 50px;">Education</h6>
                  </div>
                </a>
              </div>
            </div>

            <div class=" row align-items-center">

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

        <div class="post-box" style="height: 400px; background-color: #F9FAFF;">

          <div class="row align-items-center">
            <div class="col align-items-center">
              <h6 style="font-weight: bold; margin-top: 8px;">
                <img src="img/icons/bar-chart.png" width="30px" alt=""> Skill


            </div>
            <div class="row align-items-start" style="padding-top: 20px;">
              <div class="col-5">
                <h6 style="color: #A5B2C2;">Keterampilan</h6>
              </div>
              <div class="col-5">
                <h6 style="color: #A5B2C2;">Keterampilan</h6>
              </div>
            </div>

            <div class="row align-items-center" style="padding-top: 20px;">
              <div class="col-lg-5 align-items-center">

                <select class="form-select" aria-label="Default select example">
                  <option selected>Pemula</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="col-lg-6 align-items-center">
                <input class="form-control" type="text" placeholder="Default input" aria-label="default input example" value="Python">
              </div>
              <div class="col-lg-1 align-items-center">
                <i class="far fa-trash-alt" style="color: #4154f1;"></i>
              </div>
            </div>

            <div class="row align-items-center" style="padding-top: 20px;">
              <div class="col-lg-5 align-items-center">

                <select class="form-select" aria-label="Default select example">
                  <option selected>Pemula</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="col-lg-6 align-items-center">
                <input class="form-control" type="text" placeholder="Default input" aria-label="default input example" value="CSS">
              </div>
              <div class="col-lg-1 align-items-center">
                <i class="far fa-trash-alt" style="color: #4154f1;"></i>
              </div>
            </div>

            <div class="row align-items-center" style="padding-top: 20px;">
              <div class="col-lg-5 align-items-center">

                <select class="form-select" aria-label="Default select example">
                  <option selected>Pemula</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="col-lg-6 align-items-center">
                <input class="form-control" type="text" placeholder="Default input" aria-label="default input example" value="HTML">
              </div>
              <div class="col-lg-1 align-items-center">
                <i class="far fa-trash-alt" style="color: #4154f1;"></i>
              </div>
            </div>

            <div class="row align-items-center">
              <div class="col">
                <i class="bi bi-plus-square-fill" style="float: left; color: #4154f1; margin-right: 5px;"></i>
                <h6 style="color: #4154f1;">Tambah Keterampilan</h6>


              </div>
              <div class="col">
                <a href="#about" class="btn-get-started-new scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Cancel</span>
                  <!-- <i class="bi bi-arrow-right"></i> -->
                </a>
                <a href="#about" style="margin-left: 10px; color: white;" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                  <span style="padding: 5px; ">Save</span>
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
<!-- End Recent Blog Posts Section -->
@endsection
