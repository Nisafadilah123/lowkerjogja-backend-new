@extends('main.layout')

@section('title', 'Temukan Karir | Detail Pekerjaan')

@section('container')

@foreach($jobs as $i)
<section id="recent-blog-posts" class="recent-blog-posts">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-8">
                <a href="#"><h2 class="cmp" style="font-weight: normal">{{ $i->nama_corp}}</h2></a>
                    <h5 style="margin-top: 8px; font-weight: normal">Membuka Lowongan</h5>

                    <h6 class="ttl" style="margin-top: 8px">{{ $i->position }}</h6>
            </div>

            <div class="col-4 text-right" style="width: 100px;height: 100px;">
                    <a href="">
                    <img style="width: 25px;height: 25px;margin-bottom: 45%;margin-left: 45%" src="https://areakerja.com/img/link.png" class="position-absolute">
                    <img class="gg5" src="/logo/{{$i->logo}}" style="margin: auto;margin-top: 3%;margin-left: 5% " width="100px" height="100px">
                </a>
            </div>
            <hr class="d-flex flex-row" style="width: 100%; margin-left: 0%; margin-top: 12px">
            <h6 class="gg" style="margin-top: 8px; font-weight: normal;">{{ $i->description }}</h6>
            <hr class="d-flex flex-row" style="width: 100%; margin-left: 0%;margin-top: 16px">
            <h6 class="head" style="margin-top: 10px">Ringkasan</h6>
            <div class=" row">
                <ul class="col-5" style="overflow: unset; white-space: nowrap;">
                    <li><h6 class="gg" style="margin-top: 10px; font-weight: normal"><span style="display:inline-block; width: 15px;" class="fa fa-graduation-cap"></span><span style="display:inline-block; width: 15px;"></span>Pendidikan</h6></li>
                    <li><h6 class="gg" style="margin-top: 10px; font-weight: normal"><span style="display:inline-block; width: 15px;" class="fa fa-venus-mars"></span><span style="display:inline-block; width: 15px;"></span>Gender</h6></li>
                    <li><h6 class="gg" style="margin-top: 10px; font-weight: normal"><span style="display:inline-block; width: 15px;" class="fa fa-universal-access"></span><span style="display:inline-block; width: 15px;"></span>Umur</h6></li>
                    <li><h6 class="gg" style="margin-top: 10px; font-weight: normal"><span style="display:inline-block; width: 15px;" class="fa fa-user-circle"></span><span style="display:inline-block; width: 15px;"></span>Status Kerja</h6></li>
                    <li><h6 class="gg" style="margin-top: 10px; font-weight: normal"><span style="display:inline-block; width: 15px;" class="fa fa-money"></span><span style="display:inline-block; width: 15px;"></span>Besaran Gaji</h6></li>
                    <li><h6 class="gg" style="margin-top: 10px; font-weight: normal"><span style="display:inline-block; width: 15px;" class="fa fa-calendar"></span><span style="display:inline-block; width: 15px;"></span>Batas Lamaran</h6></li>
                    <li><h6 class="gg" style="margin-top: 10px; font-weight: normal"><span style="display:inline-block; width: 15px;" class="fa fa-map-marker"></span><span style="display:inline-block; width: 15px;"></span>Lokasi Kerja</h6></li>
                </ul>
                <ul class="col-6 ">
                    <h6 class="gg" style="margin-top: 10px; font-weight: normal">: {{ $i->last_education }}</h6>
                    <h6 class="gg" style="margin-top: 10px; font-weight: normal">: {{ $i->gender }}</h6>
                    <h6 class="gg" style="margin-top: 10px; font-weight: normal">: {{ $i->age }}</h6>
                    <h6 class="gg" style="margin-top: 10px; font-weight: normal">: {{ $i->tipe_pekerjaan }}</h6>
                    <h6 class="gg" style="margin-top: 10px; font-weight: normal">: Rp {{ number_format($i->starting_salary) }} - Rp {{ number_format($i->final_salary) }}</h5>
                    <h6 class="gg" style="margin-top: 10px; font-weight: normal">: {{ $i->deadline }}</h5>
                    <h6 class="gg" style="margin-top: 10px; font-weight: normal">: {{ $i->location }}<h4>
                </ul>
            </div>
            <hr class="d-flex flex-row" style="width: 100%; margin-left: 0%;">
            <h5 class="head" style="margin-top: 10px">Deskripsi Pekerjaan</h5>
            <ul style="list-style-type: disc; margin-left: 20px; font-family: 'Poppins', sans-serif; color: #222222;">
                <li>
                    <h6 class="gg" style="margin-top: 10px; font-weight: normal; margin-left: 5px; text-align: justify;">{{ $i->description_job }}</h6>
                </li>
            </ul>
            <hr class="d-flex flex-row" style="width: 100%; margin-left: 0%;">
            <h5 class="head" style="margin-top: 10px">Syarat Pekerjaan</h5>
                        <ul style="list-style-type: disc; margin-left: 20px; font-family: 'Poppins', sans-serif; color: #222222;">
                <li>
                    <h6 class="gg" style="margin-top: 10px; font-weight: normal; margin-left: 5px; text-align: justify;">{{ $i->syarat }}</h6>
                </li>
            </ul>
            <hr class="d-flex flex-row" style="width: 100%; margin-left: 0%;">
            <h5 class="head" style="margin-top: 10px">Kirim Lamaran</h5>
            <div class="row no-gutters">
                <ul class="col-4" style="overflow: unset; white-space: nowrap;">
                    <li><h6 class="gg" style="margin-top: 10px; font-weight: normal"><span style="display:inline-block; width: 15px;" class="fa fa-graduation-cap"></span><span style="display:inline-block; width: 15px;"></span>Email</h6></li>
                </ul>
                <ul class="col-auto" style="overflow: unset; white-space: nowrap;">
                    <li><h6 class="gg6" style="margin-top: 10px; font-weight: normal;" id="sample">{{ $i->email }}</h6>
                </li></ul>
            </div>
            <div class="row no-gutters">
                <ul class="col-4" style="overflow: unset; white-space: nowrap;">
                    <li id="telepon1"><h5 class="gg" style="margin-top: 10px; font-weight: normal"><span style="display:inline-block;" class="fa fa-phone"></span><span style="display:inline-block; width: 15px;"></span>Nomor Telepon</h4></li>
                    <li style="display: none" id="telepon2"><h4 class="gg" style="margin-top: 10px; font-weight: normal"><span style="display:inline-block; width: 15px;" class="fa fa-phone"></span><span style="display:inline-block; width: 15px;"></span>Telepon</h4></li>
                </ul>
                <ul class="col-auto" style="overflow: unset; white-space: nowrap;">

                    <li><h6 class="gg6" style="margin-top: 10px; font-weight: normal" id="sample2">{{ $i->telp }}</h6></li>
                </ul>
            </div>

            <hr class="d-flex flex-row" style="width: 100%; margin-left: 0%;">

            <div class="row">
                <div class="col">
                        <a href="/findjobs" style="margin-left: 350px ;" class="btn-get-started-new scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Kembali</span>
                        </a>
                        <a href="/login" style="margin-left: 10px;" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
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
