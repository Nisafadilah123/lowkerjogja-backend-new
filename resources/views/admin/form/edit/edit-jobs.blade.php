@extends('admin.form.create.layout')

@section('title' , 'Karir | Admin')

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
                                <label for="description"><strong>Deskripsi Pekerjaan</strong></label>
                                <div class="form-group">
                                    <textarea type="text" name="description_job" id="description" cols="70%" rows="3" placeholder="Deskripsi Perusahaan" required value={{$jobs->description_job}}>{{$jobs->description_job}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="position"><strong>Posisi</strong></label>
                                    <input type="text" name="position" id="position" class="form-control" placeholder="Posisi" required value={{$jobs->position}}>
                                </div>
                                <div class="form-group">
                                    <label for="lasteducation"><strong>Pendidikan Terakhir</strong></label>
                                    <select class="form-control" id="last_education" name="last_education">
                                        <option value="SMA/SMK">SMA/SMK</option>
                                        <option value="Diploma">Diploma</option>
                                        <option value="S1/D4">S1/D4</option>
                                        <option value="S2">S2</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="jobtype"><strong>Tipe Pekerjaan</strong></label>
                                    <input type="text" name="job_type" id="jobtype" class="form-control" placeholder="Tipe Pekerjaan" required value={{$jobs->job_type}}>
                                </div>
                                <div class="form-group">
                                    <label for="jobcategory"><strong>Kategori Pekerjaan</strong></label>
                                    <input type="text" name="job_category" id="jobcategory" class="form-control" placeholder="Kategori Pekerjaan" required value={{$jobs->job_category}}>
                                </div>
                                <div class="form-group">
                                    <label for="deadline"><strong>Deadline</strong></label>
                                    <input type="date" name="deadline" id="deadline" class="form-control" placeholder="Deadline" required value="{{$jobs->deadline}}">
                                </div>
                                <div class="form-group">
                                    <label for="salaryrange"><strong>Range Gaji</strong></label>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" name="starting_salary" id="starting_salary" class="form-control" placeholder="Range Gaji" required value={{$jobs->starting_salary}}>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" name="final_salary" id="final_salary" class="form-control" placeholder="Range Gaji" required value={{$jobs->final_salary}}>
                                        </div>

                                    </div>

                                </div>
                                <div class="form-group">
                                    <label for="joblocation"><strong>Kuota</strong></label>
                                    <input type="text" name="kuota" id="kuota" class="form-control" placeholder="kuota" required value={{$jobs->kuota}}>
                                </div>
                                <div class="form-group">
                                    <label for="lasteducation"><strong>Jenis Kelamin</strong></label>
                                    <select class="form-control" id="gender" name="gender">
                                        <option value="Pria">Pria</option>
                                        <option value="Wanita">Wanita</option>
                                        <option value="Pria/Wanita">Pria/Wanita</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="age"><strong>Umur</strong></label>
                                    <input type="text" name="age" id="age" class="form-control" placeholder="Umur" required value={{$jobs->age}}>
                                </div>
                                <div class="form-group">
                                    <label for="location"><strong>Lokasi</strong></label>
                                    <input type="text" name="location" id="location" class="form-control" placeholder="Lokasi" required value={{$jobs->location}}>
                                </div>
                                <div class="form-group">
                                    <label for="syarat"><strong>Syarat</strong></label>
                                    <input type="text" name="syarat" id="syarat" class="form-control" placeholder="Syarat" required value={{$jobs->syarat}}>
                                </div>
                                <div class="form-group">
                                    <label for="email"><strong>Email</strong></label>
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Email" required value={{$jobs->email}}>
                                </div>
                                <div class="form-group">
                                    <label for="telp"><strong>Telp</strong></label>
                                    <input type="text" name="telp" id="telp" class="form-control" placeholder="Telp" required value={{$jobs->telp}}>
                                </div>
                                <div class="form-group col-md-2">
                                    <label name="provinces" for="provinces" style=""><strong>Provinsi</strong></label>
                                    <select name="provinces" class="form-select form-select-sm prov-data" aria-label="form-select-sm example" style="position: relative; width: 250px;height:25px">
                                        <option selected> -- Pilih Provinsi --</option>
                                      </select>
                                </div>
                                <div class="form-group col-sm-2">
                                    <label name="city" for="city"><strong>Kota</strong></label>
                                    <select name="city" class="form-select form-select-sm kota-data" aria-label="form-select-sm example" style="position: relative; width: 250px;height:25px">
                                        <option selected>-- Pilih Kota --</option>
                                      </select>
                                    </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-sm btn-primary btn-circle " style="float:left"><span class="far fa-edit"> </span> Edit Karir</button>
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
@push('script-addon')
<script>
    $.ajax({
        "url":"/get-provinsi",
        "type":"GET",
        success:function(hasil_result){
            console.log("prov",hasil_result)
            var option_prov="<option>-- Pilih Provinsi --</option>";
            hasil_result.forEach(element => {
                option_prov+=`<option value="${element.province_id}">${element.province}</option>`;
            });
            $(".prov-data").html(option_prov);
        }
    });

    $(document).on("change",".prov-data",function(){
        var prov_sel = $(".prov-data option:selected").val();
        console.log("pilih prov",prov_sel)
        $.ajax({
            "url":"/get-kota",
            "data":{prov_id:prov_sel},
            "type":"GET",
            success:function(hasil_result){
                console.log("kota",hasil_result)
                var option_prov="<option>-- Pilih Kota --</option>";
                hasil_result.forEach(element => {
                    option_prov+=`<option value="${element.city_id}">${element.city_name}</option>`;
                });
                $(".kota-data").html(option_prov);
            }
        });
    });

</script>
@endpush
