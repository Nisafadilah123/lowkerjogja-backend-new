@extends('admin.form.create.layout')

@section('title' , 'Perusahaan | Admin')

@section('container')
<!-- Main Container -->
<div class="main-content">
    <section class="section">
        <h1 class="section-header">
            <div>Edit Perusahaan</div>
        </h1>

        <!-- Page Content -->
        <div class="content">
            <form action="{{url ('/company', $corp->id)}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <div class="block-content">
                                <div class="form-group">
                                    <label for="namacorp"><strong>Nama Perusahaan</strong></label>
                                    <input type="text" name="nama_corp" id="namacorp" class="form-control" placeholder="Nama Perusaan" required value={{$corp->nama_corp}}>
                                </div>
                                <label for="deskripsi"><strong>Deskripsi Perusahaan</strong></label>
                                <div class="form-group">
                                    <textarea type="text" name="description" id="deskripsi" cols="70%" rows="3" placeholder="Deskripsi Perusahaan" required value={{old('description',$corp->description)}}>{{ $corp->description }}</textarea>
                                </div>
                                <label for="gambar1">Logo</label>
                                <div class="form-group">
                                    <input type="file" name="logo" id="logo" class="dropify" data-height="190" >
                                </div>
                                <div class="form-group">
                                    <img src="{{ asset('logo/'.$corp->logo)}}" height="10%" width="30%" alt="">
                                </div>
                                <div class="form-group">
                                    <label for="industri"><strong>Industri</strong></label>
                                    <input type="text" name="industri" id="industri" class="form-control" placeholder="Industri" required value={{$corp->industri}}>
                                </div>
                                <div class="form-group">
                                    <label for="location"><strong>Lokasi</strong></label>
                                    <input type="text" name="location" id="location" class="form-control" placeholder="Lokasi" required value={{$corp->location}}>
                                </div>
                                <div class="form-group">
                                    <label for="workday"><strong>Hari Kerja</strong></label>
                                    <input type="text" name="work_day" id="workday" class="form-control" placeholder="Hari Kerja" required value={{$corp->work_day}}>
                                </div>
                                <div class="form-group">
                                    <label for="foundedyear"><strong>Tahun Berdiri</strong></label>
                                    <input type="text" name="founded_year" id="foundedyear" class="form-control" placeholder="Tahun Berdiri" required value={{$corp->founded_year}}>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-sm btn-primary btn-circle " style="float:left"><span class="far fa-edit"> </span> Edit Perusahaan</button>
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
