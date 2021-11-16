@extends('admin.form.create.layout')

@section('title' , 'Karir | Admin')

@section('container')
<!-- Main Container -->
<div class="main-content">
    <section class="section">
        <h1 class="section-header">
            <div>Tambah Data Karir</div>
        </h1>

        <!-- Page Content -->
        <div class="content">
            <form action="{{ route ('create/jobs')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <div class="block-content">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Perusahaan</label>
                                    <select class="form-control" id="idcorp" name="idcorp">
                                    @foreach ($corp as $c)
                                        <option value="{{$c->id }}">  {{$c->id }} {{ $c->nama_corp }}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <br>
                                <label for="descriptionjob"><strong>Deskripsi Pekerjaan</strong></label>
                                <div class="form-group">
                                    <textarea type="text" name="description_job" id="descriptionjob" cols="70%" rows="3" placeholder="Deskripsi Perusahaan" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="position"><strong>Posisi</strong></label>
                                    <input type="text" name="position" id="position" class="form-control" placeholder="Posisi" required>
                                </div>
                                <div class="form-group">
                                    <label for="lasteducation"><strong>Pendidikan Terakhir</strong></label>
                                    <select class="form-control" id="last_education" name="last_education">
                                        <option value="0">Pilih Pedidikan Terakhir</option>
                                        <option value="SMA/SMK">SMA/SMK</option>
                                        <option value="Diploma">D3</option>
                                        <option value="S1/D4">S1/D4</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label name="job_type" for="job_type" style=""><strong>Tipe Pekerjaan</strong></label>
                                    <select name="job_type" class="form-select form-select-sm job_type" aria-label=".form-select-sm example" style="position: relative; width: 250px;height:25px">
                                        <option selected>-- Pilih Tipe Pekerjaan --</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label name="job_category" for="job_category" style=""><strong>Kategori Pekerjaan</strong></label>
                                    <select name="job_category" class="form-select form-select-sm job_category" aria-label=".form-select-sm example" style="position: relative; width: 250px;height:25px">
                                        <option selected>-- Pilih Kategori Pekerjaan --</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="deadline"><strong>Deadline</strong></label>
                                    <input type="date" name="deadline" id="deadline" placeholder="Deadline" required class="datepicker" data-date-format="mm/dd/yyyy" >
                                </div>
                                <div class="form-group">
                                    <label for="starting_salary"><strong>Range Gaji</strong></label>
                                    <div class="row">
                                         <div class="col-sm-6">
                                        <input type="text" name="starting_salary" id="starting_salary" class="form-control" placeholder="Range Gaji" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="final_salary" id="final_salary" class="form-control" placeholder="Range Gaji" required>
                                    </div>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label for="joblocation"><strong>Kuota</strong></label>
                                    <input type="text" name="kuota" id="kuota" class="form-control" placeholder="Kuota" required>
                                </div>
                                <div class="form-group">
                                    <label for="lasteducation"><strong>Jenis Kelamin</strong></label>
                                    <select class="form-control" id="gender" name="gender">
                                        <option value="0">Pilih Jenis Kelamin</option>
                                        <option value="Pria">Pria</option>
                                        <option value="Wanita">Wanita</option>
                                        <option value="Pria/Wanita">Pria/Wanita</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="age"><strong>Umur</strong></label>
                                    <input type="text" name="age" id="age" class="form-control" placeholder="Umur" required>
                                </div>
                                <div class="form-group">
                                    <label for="location"><strong>Lokasi</strong></label>
                                    <input type="text" name="location" id="location" class="form-control" placeholder="Lokasi" required>
                                </div>
                                <div class="form-group">
                                    <label for="syarat"><strong>Syarat</strong></label>
                                    <input type="text" name="syarat" id="syarat" class="form-control" placeholder="Syarat" required>
                                </div>
                                <div class="form-group">
                                    <label for="email"><strong>Email</strong></label>
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <label for="telp"><strong>Telp</strong></label>
                                    <input type="text" name="telp" id="telp" class="form-control" placeholder="Telp" required>
                                </div>
                                <div class="form-group col-md-2">
                                    <label name="provinces" for="provinces" style=""><strong>Provinsi</strong></label>
                                    <select name="provinces" class="form-select form-select-sm prov-data" aria-label=".form-select-sm example" style="position: relative; width: 250px;height:25px">
                                        <option selected>-- Pilih Provinsi --</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-2">
                                    <label name="city" for="city"><strong>Kota</strong></label>
                                    <select name="city" class="form-select form-select-sm kota-data" aria-label=".form-select-sm example" style="position: relative; width: 250px;height:25px">
                                        <option selected>-- Pilih Kota --</option>
                                      </select>
                                    </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-sm btn-primary btn-circle " style="float:left"><span class="fas fa-plus"> </span> Tambah Karir</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    <section>
</div>
<!-- END Main Container -->
@endsection

@push('script-addon')

<script>
    $(function() {
        $("#datepicker").datepicker();
            changeMonth: true,
            changeYear: true
    });
</script>
@endpush
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

    $(document).on("change",".job_type",function(){
        var job_type_selected = $(".job_type option:selected").val();
        console.log("pilih job_type",job_type_selected)
        $.ajax({
            "url":"/get-job-category",
            "data":{job_type_selected:job_type_selected},
            "type":"GET",
            success:function(hasil_result){
                console.log("job_category",hasil_result)
                var option_job_category="<option>-- Pilih Kategori Pekerjaan --</option>";
                hasil_result.forEach(element => {
                    option_job_category+=`<option value="${element.id}">${element.kategori_pekerjaan}</option>`;
                });
                $(".job_category").html(option_job_category);
            }
        });
    });
</script>
@endpush

