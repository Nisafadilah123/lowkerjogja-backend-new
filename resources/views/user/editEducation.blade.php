@extends('user.layout')

@section('title', 'Edit Education | Lowkerjogja.com')

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
            .col-6{
                grid-column: 1 / 2;
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
                                        <h6 style="font-weight: bold;" style="padding-right: 50px;">Education</h6>
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

                <div class="card">
                    <h5 class="card-header">
                        <div class="container px-1">
                            <div class="row">
                                <div class="col align-items-center">
                                    <img src="/img/icons/mortarboard.png" alt="" width="35px" style="float: left;">

                                    <h6 style="font-weight: bold; margin-left: 50px; margin-top: 8px;">Education<a href="corp-edit-about.html"></a></h6>

                                </div>
                            </div>
                        </div>
                    </h5>
                    <div class="card-body">

                    @foreach ($educations as $item)
                        <form method="post" action="/education/{{ $item->id }}">
                         @method('PUT')
                            @csrf


                            <div class="form-group" class="form-label">
                              <label for="institut">Institusi / Universitas</label>
                              <input type="text" name="name" class="form-control" id="univ" placeholder="Lengkapi Data Asal Institusi / Universitas Anda" value="{{old('name', $item->name)}}">
                            </div>

                            <div class="form-group">
                                <label for="jenjang">Jenjang</label>
                                <select class="form-select" name="level" id="level">
                                    @if ($item->level==null)
                                        <option selected value="" >-- Pilih Jenjang -- </option>
                                    <option value="S3" @if ($item->level == 'S3')@endif>S3</option>
                                    <option value="S2" @if ($item->level == 'S2')@endif>S2</option>
                                    <option value="S1/D4" @if ($item->level == 'SI/D4')@endif>S1/D4</option>
                                    <option value="D3" @if ($item->level == 'D3')@endif>D3</option>
                                    <option value="SMA/SMK" @if ($item->level == 'SMA/SMK')@endif>SMA/SMK</option>
                                        @else
                                        <option selected value="{{ $item->level }}" >{{ $item->level }}</option>
                                        <option value="S3" @if ($item->level == 'S3')@endif>S3</option>
                                        <option value="S2" @if ($item->level == 'S2')@endif>S2</option>
                                        <option value="S1/D4" @if ($item->level == 'SI/D4')@endif>S1/D4</option>
                                        <option value="D3" @if ($item->level == 'D3')@endif>D3</option>
                                        <option value="SMA/SMK" @if ($item->level == 'SMA/SMK')@endif>SMA/SMK</option>
                                    @endif



                                  </select>
                            </div>

                            <div class="form-group">
                                <label for="graduate" class="form-label">Tanggal Wisuda</label>
                              <input type="date" name="graduate" class="form-control" id="datepicker" value="{{old('graduate', $item->graduate)}}">
                            </div>

                            <div class="form-group">
                                <label for="jurusan" class="form-label">Jurusan</label>
                                <input type="text" class="form-control" name="major" id="jurusan" placeholder="Lengkapi Data Jurusan Anda" value="{{old('level', $item->major)}}">
                              </div>
                              <div class="form-group">
                                <label for="nilai" class="form-label">Nilai Akhir</label>
                                <div class="row">
                                    <div class="col-6">
                                        <input type="text" class="form-control" name="gpa" id="nilai" placeholder="Lengkapi Data Nilai Akhir Anda" value="{{old('gpa', $item->gpa)}}">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="form-control" name="gpa_limit" id="gpa_limit" placeholder="Lengkapi Batas Data Nilai Akhir Anda" value="{{old('gpa_limit', $item->gpa_limit)}}">
                                    </div>
                                </div>
                              </div>

                              <br>
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

                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

</section><!-- End Recent Blog Posts Section -->
@endsection


@push('script-addon')

<script>
    $(function() {
      $( "#datepicker" ).datepicker();
        changeMonth: true,
        changeYear: true
    });
    </script>
@endpush
