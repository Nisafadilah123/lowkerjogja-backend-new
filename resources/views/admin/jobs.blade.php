@extends('admin.layout')

@section('title' , 'Job | Admin')

@section('container')

<!-- Main Container -->
<div class="main-content">
    <section class="section">
        <h1 class="section-header">
            <div>Job</div>
        </h1>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="block-options p-3">
                        <a href="{{url('create/jobs')}}" class="btn btn-primary"><span class="fa fa-plus"></span> Tambah Baru</a>
                    </div>
                    <div class="card"> 

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered ">
                                    <tr>
                                        <th>No</th>
                                        <th>Deskripsi Pekerjaan</th>
                                        <th>Posisi Kerja</th>
                                        <th>Pendidikan Terakhir</th>
                                        <th>Job Type</th>
                                        <th>Job Category</th>
                                        <th>Deadline</th>
                                        <th>Provinsi</th>
                                        <th>Kota</th>
                                        <th>Range Gaji</th>
                                        <th>Kuota</th>
                                        <th>Aksi</th>
                                        {{-- description	position	last_education	job_type	job_category	deadline	job_location	salary_range --}}
                                    </tr>
                                    @foreach ($jobs as $job)
                                    <tr>
                                        <td style="vertical-align: middle;">{{$i++}}</td>
                                        <td style="vertical-align: middle;">{{$job->description}}</td>
                                        <td style="vertical-align: middle;">{{$job->position}}</td>
                                        <td style="vertical-align: middle;">{{$job->last_education}}</td>
                                        <td style="vertical-align: middle;">{{$job->job_type}}</td>
                                        <td style="vertical-align: middle;">{{$job->job_category}}</td>
                                        <td style="vertical-align: middle;">{{$job->deadline}}</td>
                                        <td style="vertical-align: middle;">{{$job->provinces}}</td>
                                        <td style="vertical-align: middle;">{{$job->city}}</td>
                                        <td style="vertical-align: middle;">{{$job->salary_range}}</td>
                                        <td style="vertical-align: middle;">{{$job->kuota}}</td>
                                        
                                       
                                        
                                        <td style="width: 120px;text-align: center;vertical-align: middle; ">
                                            <a href="/jobs/{{$job->id}}/edit" class="btn btn-sm btn-primary btn-circle " style="float:left"><i class="far fa-edit"></i></a>
                                            <form action="/jobs/{{$job->id}}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-primary btn-circle" style="float:right" onclick="return confirm('anda yakin ingin menghapus data?');"><span class="far fa-trash-alt"></span></button>
                                                <!-- <input type="submit" class="btn btn-danger btn-sm" value="Delete" onclick="return confirm('anda yakin ingin menghapus data?');"> -->
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach


                                </table>
                            </div>
                        </div> 

    
@endsection