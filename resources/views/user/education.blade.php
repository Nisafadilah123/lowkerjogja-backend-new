@extends('user.layout')

@section('title', 'Education | Lowkerjogja.com')

@section('container')

<!-- ======= Recent Blog Posts Section ======= -->
<style>
.image{
            border-radius: 50%;
            -webkit-border-radius: 200px;
            -moz-border-radius: 200px;
            width: 80px;
            height: 80px;
            object-fit: cover;
        }
        .aksi{
            float: right;
        }

</style>
<section id="recent-blog-posts" class="recent-blog-posts" style="padding-top: 150px;">

    <div class="container" data-aos="fade-up" style="width: 100%">
        <div class="row">
            <div class="col-sm-3">
                <div class="post-box" style="background-color: #F9FAFF;">
                    <div class="row align-items-start">
                        <div class="col">
                            <div>
                                <img src="{{  Auth::user()->profile_photo_url   }}" class="image">
                                <h6 style="font-weight: bold;padding-right:50px; float:right">{{ ucfirst (Auth::user()->name) }}</h6>
                                <h6 style="color:#A5B2C2; font-size: 15px; float:right;position:relative; bottom:60px;padding-right:5px;">View Profile</h6>
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
                            <div class="col-sm-4">
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
                            <div class="col-sm-4">
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
                            <div class="col-sm-4">
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
                            <div class="col-sm-4">
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


            <div class="col-sm-12">

                <div class="post-box" style=" background-color: #F9FAFF;">

                    <div class="row align-items-center">
                        <div class="col align-items-center">
                            <img src="img/icons/mortarboard.png" alt="" width="35px" style="float: left;">
                            <h6 style="font-weight: bold; margin-left: 50px; margin-top: 8px;">Education
                            <a href="{{ url('education/create') }}" class="btn btn-success" style="position: relative; float: right;"><i class="fas fa-plus" style="position: relative; float: right;">Add</i></a><br><br>

                            <table id="data" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Graduate</th>
                                        <th>Institusi/Universitas</th>
                                        <th>Last Education</th>
                                        <th>Jurusan</th>
                                        <th>Nilai Akhir</th>
                                        <th class="text-center"></th>

                                    </tr>
                                </thead>

                                    <tbody>
                                        @foreach ($educations as $item)

                                        <tr>
                                            <td>{{ $item->graduate }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->level }}</td>
                                            <td>{{ $item->major }}</td>
                                            <td>{{ $item->gpa }}/{{ $item->gpa_limit }}</td>
                                            <td class="text-center">
                                                <a href="{{ url('education/'.$item->id.'/edit') }}" class="btn btn-warning">
                                                <i class="fas fa-edit"></i></a>
                                                <td>
                                                    <form action="{{ url('education/'.$item->id) }}" method="POST" onsubmit="return confirm('Yakin hapus data ?')">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-danger">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                                </td>

                                            </td>
                                            <td>

                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>


                            </table>

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

@push('script-addon')
<script>
    $(document).ready(function() {
    $('#data').DataTable();
} );
</script>

@endpush
