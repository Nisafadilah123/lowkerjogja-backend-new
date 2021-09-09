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
                            <h6 style="font-weight: bold; margin-left: 50px; margin-top: 8px;">Education
                            <a href="{{ url('education/create') }}" class="btn btn-success" style="position: relative; float: right;"><i class="fas fa-plus" style="position: relative; float: right;">Add</i></a><br><br>
                            @foreach ($educations as $item)
                            <table style="float: right; ">
                                <td><a href="{{ url('education/'.$item->id.'/edit') }}">
                                    <i class="bi bi-pencil-square"></i></a></h6></td>
                                <td><form action="{{ url('education/'.$item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus data ?')">
                                    @method('delete')
                                    @csrf
                                    <button><i class="fas fa-trash" style="float: right; "></i></button>
                                </form>
                                    <a href="" >
                                   </a></h6></td>
                            </table>


                            </div>

                        </div>

                            <div class="row align-items-start" style="padding-top: 20px;">
                            <div class="col-8">
                                <strong style="color: black;">User id : </strong>{{ $item->user->name}}
                                <strong style="color: black;">Graduate : </strong>{{ $item->graduate}}
                                <br>
                                <strong style="color: black;">Universitas / Institusi / Sekolah : </strong>{{ $item->name}}
                                <br>
                                <strong style="color: black;">Pendidikan Terakhir : </strong>{{ $item->level}}
                                <br>
                                <strong style="color: black;">Jurusan : </strong>{{ $item->major}}
                                <br>
                                <strong style="color: black;">Nilai Akhir : </strong>{{ $item->gpa}}/

                            </div>

                        </div>
                        @endforeach



                    </div>
                </div>
            </div>

        </div>
    </div>


    </div>

    </div>

</section><!-- End Recent Blog Posts Section -->
@endsection
