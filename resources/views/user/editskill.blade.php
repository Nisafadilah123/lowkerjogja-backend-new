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
  .skill{
      width: 300px;
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
                <img src="/img/team/team-1.jpg" width="80px" style="border-radius: 50%; float:left; margin:0 8px 4px 0;" alt="">

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
                    <img src="/img/icons/user.png" width="30px" alt="">
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

            @foreach ($skills as $item)
<div class="row align-items-start" style="padding-top: 20px;">
              <div class="col-2">
                <h6 style="color: #A5B2C2;">Level</h6>
              </div>
              <div class="col-2">
                <h6 style="color: #A5B2C2;">Keterampilan</h6>
              </div>
            </div>

            <div class="row align-items-center" style="padding-top: 20px;">
              <div class="col-lg-4 align-items-center">


                <select class="form-select" aria-label="Default select example" name="level">
                    @if ($item->level==null)
                        <option selected value="" >-- Pilih Level -- </option>
                        <option value="Pemula" @if ($item->level == 'Pemula')@endif>Pemula</option>
                        <option value="Tingkat Menengah" @if ($item->level == 'Tingkat Menengah')@endif>Tingkat Menengah</option>
                        <option value="Master" @if ($item->level == 'Master')@endif>Master</option>
                    @else
                        <option selected value="{{ $item->level }}" >{{ $item->level }}</option>
                        <option value="Pemula" @if ($item->level == 'Pemula')@endif>Pemula</option>
                        <option value="Tingkat Menengah" @if ($item->level == 'Tingkat Menengah')@endif>Tingkat Menengah</option>
                        <option value="Master" @if ($item->level == 'Master')@endif>Master</option>
                    @endif
                </select>
              </div>
              <div class="col-lg-6 align-items-center">
                <input class="form-control" name="skill" id="skill" type="text" placeholder="Default input" aria-label="default input example" value="{{ old('skill', $item->skill) }}">
              </div>
              {{-- delete --}}
              <form action="{{ url('skill/'.$item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus data ?')">
                @method('delete')
                @csrf
                <button><i class="fas fa-trash" style="float: right; "></i></button>
            </form>

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
            @endforeach


            <div class="row align-items-center">
              <div class="col">
                  <a href="{{ url('skill/create') }}">
                      <i class="bi bi-plus-square-fill" style="float: left; color: #4154f1; margin-right: 5px;"> Tambah Keterampilan</i>

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
