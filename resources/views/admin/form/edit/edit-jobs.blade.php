@extends('admin.form.create.layout')

@section('title' , 'Company | Admin')

@section('container')
<!-- Main Container -->
<div class="main-content">
    <section class="section">
        <h1 class="section-header">
            <div>Edit Job</div>
        </h1>

        <!-- Page Content -->
        <div class="content">
            <form action="{{url ('/jobs', $jobs->id)}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <div class="block-content">
                                <label for="description"><strong>Deskripsi Perusahaan</strong></label>
                                <div class="form-group">
                                    <textarea type="text" name="description" id="description" cols="70%" rows="3" placeholder="Deskripsi Perusahaan" required value={{$jobs->description}}></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="position"><strong>Posisi</strong></label>
                                    <input type="text" name="position" id="position" class="form-control" placeholder="Posisi" required value={{$jobs->position}}>
                                </div>
                                <div class="form-group">
                                    <label for="lasteducation"><strong>Pendidikan Terakhir</strong></label>
                                    <input type="text" name="last_education" id="lasteducation" class="form-control" placeholder="Pendidikan Terakhir" required value={{$jobs->last_education}}>
                                </div>
                                <div class="form-group">
                                    <label for="jobtype"><strong>Tipe Pekerjaan</strong></label>
                                    <input type="text" name="job_type" id="jobtype" class="form-control" placeholder="Tipe Pekerjaan" required value={{$jobs->job_type}}>
                                </div>
                                <div class="form-group">
                                    <label for="jobcategory"><strong>Kategori Pekerjaan</strong></label>
                                    <input type="text" name="job_category" id="jobcategory" class="form-control" placeholder="Tipe Pekerjaan" required value={{$jobs->job_category}}>
                                </div>
                                <div class="form-group">
                                    <label for="deadline"><strong>Deadline</strong></label>
                                    <input type="date" name="deadline" id="deadline" class="form-control" placeholder="Deadline" required value="{{$jobs->deadline}}">
                                </div>
                                {{-- <div class="form-group">
                                    <label for="deadline"><strong>Deadline</strong></label>
                                    <input type="text" name="deadline" id="deadline" class="form-control" placeholder="Deadline" required value={{$jobs->deadline}}>
                                </div> --}}
                                {{-- rev
                                <div class="form-group"> rev
                                    <label for="joblocation"><strong>Lokasi</strong></label>rev
                                    <input type="text" name="job_location" id="joblocation" class="form-control" placeholder="Lokasi" required value={{$jobs->job_location}}>rev
                                </div> rev --}}
                                <div class="form-group">
                                    <label for="salaryrange"><strong>Range Gaji</strong></label>
                                    <input type="text" name="salary_range" id="salaryrange" class="form-control" placeholder="Range Gaji" required value={{$jobs->salary_range}}>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-sm btn-primary btn-circle " style="float:left"><span class="fas fa-plus"> </span> Tambah Data</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>



        </div>
        <section>
            <!-- END Page Content -->
</div>
<!-- END Main Container -->
@endsection