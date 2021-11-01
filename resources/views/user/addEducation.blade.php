@extends('user.layout')

@section('title', 'Tambah Pendidikan | Lowkerjogja.com')

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
                                <img src="{{asset('profile_photos/'. Auth::user()->profile_photo_path)     }}" class="image">
                                <h6 style="font-weight: bold;padding-right:100px; float:right">{{ ucfirst(Auth::user()->name)  }}</h6>
                                <h6 style="color:#A5B2C2; font-size: 15px; float:right;position:relative; bottom:70px;padding-right:100px;">Lihat Profil</h6>
                            </div>
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
                                <a href="/user" class="about">
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
                                        <i class="fas fa-user-graduate"></i>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="col-sm-6">
                                <a href="/education" class="about">
                                    <div class="card-body" style="width: 300px;">
                                        <h6 style="font-weight: bold;" style="text-decoration:none">Pendidikan</h6>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="row align-items-center">

                            <div class="col-sm-2">


                                <div class="card-body">
                                    <i class="far fa-chart-bar"></i>
                                </div>
                            </div>
                            <br><br>
                            <div class="col-sm-6">
                                <a href="/skill" class="about">
                                    <div class="card-body" style="width: 300px;">
                                        <h6 style="font-weight: bold;" style="text-decoration:none">Keahlian</h6>
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
                            <a href="/password" class="about">
                                <div class="card-body" style="width: 200px;">
                                    <h6 style="font-weight: bold;">Kata Sandi</h6>
                                </div>
                            </a>
                        </div>
                        </div>

                        <div class="row align-items-center">

                            <div class="col-sm-2">
                                <div class="">

                                    <div class="card-body">
                                        <i class="fas fa-info-circle"></i>
                                    </div>
                                </div>
                            </div>
                        <br><br>
                        <div class="col-sm-6">
                            <a href="/status_user" class="about">
                                <div class="card-body" style="width: 300px;">
                                    <h6 style="font-weight: bold;">Status</h6>
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

                                    <h6 style="font-weight: bold; margin-left: 50px; margin-top: 8px;">Pendidikan<a href="corp-edit-about.html"></a></h6>

                                </div>
                            </div>
                        </div>
                    </h5>



                    <div class="card-body">

                    {{-- @foreach ($educations as $item) --}}
                    {{-- @if (Session::has('add'))
                        <span style="color:green">
                            {{ Session::get('add') }}
                        </span>
                    @endif --}}

                        <form method="post" action="{{ url('education/') }}">
                         {{-- @method('HEAD') --}}
                            @csrf

                              <div class="form-group">
                                <label for="institut" class="form-label">Institusi / Universitas</label>
                              <input type="text" name="name" class="form-control" id="univ" placeholder="Lengkapi Data Asal Institusi / Universitas Anda" value="{{old('name')}}">
                            </div>

                            <div class="form-group" >
                              <label for="graduate" class="form-label">Tanggal Wisuda</label>
                              <input type="date" name="graduate" class="form-control" id="datepicker" value="{{old('graduate')}}">
                            </div>

                            <div class="form-group" class="form-label">
                                <label for="jenjang">Jenjang</label>
                                <select class="form-select" name="level">
                                    <option selected value="{{old('level')}}">-- Pilih Jenjang --</option>
                                    <option value="S3">S3</option>
                                    <option value="S2">S2</option>
                                    <option value="S1/D4">S1/D4</option>
                                    <option value="D3">D3</option>
                                    <option value="SMA/SMK">SMA/SMK</option>

                                  </select>
                            </div>

                            <div class="form-group">
                                <label for="jurusan" class="form-label">Jurusan</label>
                                <input type="text" name="major" class="form-control" id="jurusan" placeholder="Lengkapi Data Jurusan Anda" value="{{old('level')}}">
                            </div>

                            <div class="form-group">
                                <label for="nilai" class="form-label">Nilai Akhir</label>
                                <div class="row">
                                    <div class="col-6">
                                        <input type="text" name="gpa" class="form-control" id="gpa" placeholder="Lengkapi Data Nilai Akhir Anda" value="{{old('gpa')}}">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="gpa_limit" class="form-control" id="gpa_limit" placeholder="Lengkapi Batas Data Nilai Akhir Anda" value="{{old('gpa_limit')}}">
                                    </div>
                                </div>

                            </div>

                            <br>
                            <div class="row">
                                <div class="col">
                                    <a href="/education" style="margin-left: 350px ;" class="btn btn-outline-primary">
                                        <span>Batalkan</span>
                                    </a>
                                    <button type="submit" style="margin-left: 10px;" class="btn btn-primary">
                                        <span style="padding: 5px;">Simpan</span>
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

</section><!-- End Recent Blog Posts Section -->
@endsection


@push('script-addon')

<script>
    $(function() {
      $( "#datepicker" ).datepicker({
        format: 'dd-mm-yyyy',

      });
        changeMonth: true,
        changeYear: true
    });
    </script>
@endpush
