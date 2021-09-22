@extends('user.layout')

@section('title', 'Find Jobs | Detail Pekerjaan')

@section('container')

<!-- Pencarian -->
<section id="find" class="find">
    <div class="container" data-aos="fade-up" style="margin-top: 100px;">
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <div class="container px-4">
                        <div class="row">
                        <div class="col-md-2">

                            <label for="graduate" style="padding-bottom: 10px;padding-top: 10px;"><strong>Graduate</strong> </label>
                            <select id="graduate" class="form-select form-select-sm" aria-label=".form-select-sm example" style="position: relative; width: 220px;height:40px;background-image:url('mortarboard.png');">
                                <option selected> Semua Lulusan</option>
                                <option value="1">SMA/SMK</option>
                                <option value="2">Diploma</option>
                                <option value="3">S1</option>
                            </select>
                            </div>

                            <div class="col-md-6">
                                <label name="provinsi" for="provinsi" style="position: relative; left:200px;width: 300px;padding-top:10px;padding-bottom: 10px;"><strong>Province</strong></label>
                                <select name="provinsi" class="form-select form-select-sm prov-data" aria-label=".form-select-sm example" style="position: relative; left:200px;width: 250px;height:40px">
                                    <option selected>-- Pilih Provinsi --</option>
                                </select>


                            </div>
                        <div class="col-sm-2">
                            <label name="kota" for="kota" style="position: relative; left:320px;width: 300px;padding-top:10px;padding-bottom: 10px;"><strong>City</strong></label>
                            <select name="kota" class="form-select form-select-sm kota-data" aria-label=".form-select-sm example" style="position: relative; left:320px;width: 250px;height:40px">
                                <option selected>-- Pilih Kota --</option>
                            </select>
                            </div>

                            <div class="col-sm-2">
                                <button type="button" class="btn btn-primary" style="position: relative; left:550px;width:100px;top:45px"><i class="fas fa-search" style="position: relative;padding-right:5px">   Search</a></i>
                            </div>
                    </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- end Pencarian -->
@foreach($jobs as $i)
<section id="recent-blog-posts" class="recent-blog-posts">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-8">
                <a href="#"><h2 class="cmp" style="font-weight: normal">Link aja, Indonesian,</h2></a>
                    <h5 style="margin-top: 8px; font-weight: normal">Membuka Lowongan</h5>

                    <h1 class="ttl" style="margin-top: 8px">{{ $i->position }}</h1>
            </div>

            <div class="col-4 text-right" style="width: 100px;height: 100px;">
                    <a href="">
                    <img style="width: 25px;height: 25px;margin-bottom: 45%;margin-left: 45%" src="https://areakerja.com/img/link.png" class="position-absolute">
                    <img class="gg5" src="img/7.png" style="margin: auto;margin-top: 3%;margin-left: 5% ">
                </a>
            </div>
            <hr class="d-flex flex-row" style="width: 100%; margin-left: 0%; margin-top: 12px">
            <h4 class="gg" style="margin-top: 8px; font-weight: normal;">Link Aja merupakan perusahaan yang berfokus pada industri clothing/apparel pria</h4>
            <hr class="d-flex flex-row" style="width: 100%; margin-left: 0%;margin-top: 16px">
            <h3 class="head" style="margin-top: 10px">Ringkasan</h3>
            <div class=" row">
                <ul class="col-5" style="overflow: unset; white-space: nowrap;">
                    <li><h4 class="gg" style="margin-top: 10px; font-weight: normal"><span style="display:inline-block; width: 15px;" class="fa fa-graduation-cap"></span><span style="display:inline-block; width: 15px;"></span>Pendidikan</h4></li>
                    <li><h4 class="gg" style="margin-top: 10px; font-weight: normal"><span style="display:inline-block; width: 15px;" class="fa fa-venus-mars"></span><span style="display:inline-block; width: 15px;"></span>Gender</h4></li>
                    <li><h4 class="gg" style="margin-top: 10px; font-weight: normal"><span style="display:inline-block; width: 15px;" class="fa fa-universal-access"></span><span style="display:inline-block; width: 15px;"></span>Umur</h4></li>
                    <li><h4 class="gg" style="margin-top: 10px; font-weight: normal"><span style="display:inline-block; width: 15px;" class="fa fa-user-circle"></span><span style="display:inline-block; width: 15px;"></span>Status Kerja</h4></li>
                    <li><h4 class="gg" style="margin-top: 10px; font-weight: normal"><span style="display:inline-block; width: 15px;" class="fa fa-money"></span><span style="display:inline-block; width: 15px;"></span>Besaran Gaji</h4></li>
                    <li><h4 class="gg" style="margin-top: 10px; font-weight: normal"><span style="display:inline-block; width: 15px;" class="fa fa-calendar"></span><span style="display:inline-block; width: 15px;"></span>Batas Lamaran</h4></li>
                    <li><h4 class="gg" style="margin-top: 10px; font-weight: normal"><span style="display:inline-block; width: 15px;" class="fa fa-map-marker"></span><span style="display:inline-block; width: 15px;"></span>Lokasi Kerja</h4></li>
                </ul>
                <ul class="col-6 ">
                    <h4 class="gg" style="margin-top: 10px; font-weight: normal">: {{ $i->last_education }}</h4>
                    <h4 class="gg" style="margin-top: 10px; font-weight: normal">: {{ $i->gender }}</h4>
                    <h4 class="gg" style="margin-top: 10px; font-weight: normal">: {{ $i->age }}</h4>
                    <h4 class="gg" style="margin-top: 10px; font-weight: normal">: {{ $i->job_type }}</h4>
                    <h4 class="gg" style="margin-top: 10px; font-weight: normal">: {{ $i->salary_range }}</h4>
                    <h4 class="gg" style="margin-top: 10px; font-weight: normal">: {{ $i->deadline }}</h4>
                    <h4 class="gg" style="margin-top: 10px; font-weight: normal">: {{ $i->location }}<h4>
                </ul>
            </div>
            <hr class="d-flex flex-row" style="width: 100%; margin-left: 0%;">
            <h3 class="head" style="margin-top: 10px">Deskripsi Pekerjaan</h3>
            <ul style="list-style-type: disc; margin-left: 20px; font-family: 'Poppins', sans-serif; color: #222222;">
                <li>
                    <h4 class="gg" style="margin-top: 10px; font-weight: normal; margin-left: 5px; text-align: justify;">{{ $i->description }}</h4>
                </li>
            </ul>
            <hr class="d-flex flex-row" style="width: 100%; margin-left: 0%;">
            <h3 class="head" style="margin-top: 10px">Syarat Pekerjaan</h3>
                        <ul style="list-style-type: disc; margin-left: 20px; font-family: 'Poppins', sans-serif; color: #222222;">
                <li>
                    <h4 class="gg" style="margin-top: 10px; font-weight: normal; margin-left: 5px; text-align: justify;">{{ $i->syarat }}</h4>
                </li>
            </ul>
            <hr class="d-flex flex-row" style="width: 100%; margin-left: 0%;">
            <h3 class="head" style="margin-top: 10px">Kirim Lamaran</h3>
            <div class="row no-gutters">
                <ul class="col-4" style="overflow: unset; white-space: nowrap;">
                    <li><h4 class="gg" style="margin-top: 10px; font-weight: normal"><span style="display:inline-block; width: 15px;" class="fa fa-graduation-cap"></span><span style="display:inline-block; width: 15px;"></span>Email</h4></li>
                </ul>
                <ul class="col-auto" style="overflow: unset; white-space: nowrap;">
                    <li><h4 class="gg6" style="margin-top: 10px; font-weight: normal;" id="sample">{{ $i->email }}</h4>
                </li></ul>
            </div>
            <div class="row no-gutters">
                <ul class="col-4" style="overflow: unset; white-space: nowrap;">
                    <li id="telepon1"><h4 class="gg" style="margin-top: 10px; font-weight: normal"><span style="display:inline-block; width: 15px;" class="fa fa-phone"></span><span style="display:inline-block; width: 15px;"></span>Nomor Telepon</h4></li>
                    <li style="display: none" id="telepon2"><h4 class="gg" style="margin-top: 10px; font-weight: normal"><span style="display:inline-block; width: 15px;" class="fa fa-phone"></span><span style="display:inline-block; width: 15px;"></span>Telepon</h4></li>
                </ul>
                <ul class="col-auto" style="overflow: unset; white-space: nowrap;">

                    <li><h4 class="gg6" style="margin-top: 10px; font-weight: normal" id="sample2">{{ $i->telp }}</h4></li>
                </ul>
            </div>

            <hr class="d-flex flex-row" style="width: 100%; margin-left: 0%;">

            <div class="row">
                <div class="col">
                        <a href="/findjobsUser" style="margin-left: 350px ;" class="btn-get-started-new scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Kembali</span>
                        </a>
                        <a href="/lamar{{ $i->id }}" style="margin-left: 10px;" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span style="padding: 5px;">Lamar</span>
                        </a>
                </div>
            </div>

            

        </div>
    </div>                
</section>
@endforeach
@endsection

{{-- ini ke scirpt yang numpukin itu. --}}
{{-- ini ke scirpt yang numpukin itu. --}}
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