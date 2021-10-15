@extends('user.layout')

@section('title', 'Temukan Karir | Lowkerjogja.com')

@section('container')

<!-- find jobs section -->
<style>
    #graduate option[selected]{
        background-image: url('mortarboard.png');
    }
    }
</style>
<!-- Pencarian -->
<section id="find" class="find">
    <div class="container" data-aos="fade-up" style="margin-top: 100px;">
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <div class="container px-4">
                        <div class="row">
                        <div class="col-md-2">

                        <form action="/cari" method="GET">
                            <label for="posisi" style="position: relative;left:430px; width: 220px;height:40px;"><strong>Posisi Pekerjaan</strong> </label>                            
                            <input class="form-select form-select-sm" aria-label=".form-select-sm example" style="position: relative;left:400px; width: 220px;height:40px;background-image:url('mortarboard.png');" id="position-option" name="cari" name="cari" type="search" placeholder="Cari Posisi" aria-label="Search">                            
                            <button type="submit" class="btn btn-primary" style="position: relative; left:650px;width:100px;bottom:40px"><i class="fas fa-search" style="position: relative;padding-right:5px" value="cari">   Cari</a></i>                        
                        </form>

                        <!-- <form action="cari" method="GET">
                            <label for="graduate" style="padding-bottom: 10px;padding-top: 10px;"><strong>Lulusan</strong> </label>
                            <select id="graduate" class="form-select form-select-sm" aria-label=".form-select-sm example" style="position: relative; width: 220px;height:40px;background-image:url('mortarboard.png');">
                                <option selected> Semua Lulusan</option>
                                <option value="S3">S3</option>
                                <option value="S2">S2</option>
                                <option value="S1/D4">S1/D4</option>
                                <option value="D3">D3</option>
                                <option value="SMA/SMK">SMA/SMK</option>
                            </select>
                            </div>

                            <div class="col-md-6">
                                <label name="provinsi" for="provinsi" style="position: relative; left:200px;width: 300px;padding-top:10px;padding-bottom: 10px;"><strong>Provinsi</strong></label>
                                <select name="provinsi" class="form-select form-select-sm prov-data" aria-label=".form-select-sm example" style="position: relative; left:200px;width: 250px;height:40px">
                                    <option selected>-- Pilih Provinsi --</option>
                                </select>
                            </div>

                            <div class="col-sm-2">
                            <label name="kota" for="kota" style="position: relative; left:320px;width: 300px;padding-top:10px;padding-bottom: 10px;"><strong>Kota</strong></label>
                            <select name="kota" class="form-select form-select-sm kota-data" aria-label=".form-select-sm example" style="position: relative; left:320px;width: 250px;height:40px">
                                <option selected>-- Pilih Kota --</option>
                            </select>
                            </div>

                            <div class="col-sm-2">
                                <button type="search" class="btn btn-primary" style="position: relative; left:550px;width:100px;top:45px"><i class="fas fa-search" style="position: relative;padding-right:5px" value="cari">   Cari</a></i>
                            </div>
                        </form> -->

                    </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- end Pencarian -->
<section id="recent-blog-posts" class="recent-blog-posts">
    <div class="container" data-aos="fade-up">
        <div class="row">
        @foreach($lihatjobs as $l)
            <div class="col-lg-4">
                <div class="post-box">
                    <div class="row align-items-start">
                        <div class="col">
                            <p style="background-color: #F9FAFF; text-align: center; border-radius: 13%; box-shadow: 0px 2px 20px rgba(1, 41, 112, 0.1);">{{ $l->job_type }}</p>
                        </div>
                        <div class="col">
                            <div></div>
                        </div>
                        <div class="col">
                            <div style="color: #BEBFC0; font-size: 12px;"><i style="padding-right: 2px;" class="bi bi-clock"></i>{{ $l->created_at }}</div>
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col">
                            <form method="post" enctype="multipart/form-data" action="{{ URL::to('/') }}/simpanjob">
                                {{csrf_field()}}
                                <input type="hidden" class="form-control" name="idjob" id="idjob" value="{{ $l->id }}">
                            <div>
                                <button class="btn" style="float: right;">
                                    <i class="bi bi-plus-square-fill"></i>
                                </button>
                                <img src="logo/{{$l->logo}}" style="float:left; margin:0 8px 4px 0;" width="60px" height="60px" />
                                <br>
                                <h6 style="color:#4154f1; font-weight: bold;">{{$l->nama_corp}}</h6>
                            </div>
                            </form>
                        </div>
                        <div class="row align-items-start">
                            <div class="col" style="padding-top: 15px;">
                                <h1 style="font-weight: bold; font-size: 27px;">{{ $l->position }}</h1>
                                <h6 style="color: #000000;">{{$l->last_education}}</h6>
                                <h6 style="color: #BEBFC0;">{{$l->city}}, {{$l->provinces}}</h6>
                                <h6 style="color: #28A59F; padding-top: 5px;">Rp {{ number_format($l->starting_salary) }} - Rp {{ number_format($l->final_salary) }}</h6>
                                <!-- Button lamar -->
                                <a class="btn btn-primary" href="/lamar{{ $l->id }}" role="button">Lamar</a>
                                <!-- Button detail -->
                                <a class="btn btn-primary" href="/detail{{ $l->id }}" role="button">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

         
              
            <div style="padding-left:500px">
                <!-- {{ $lihatjobs->links() }} -->
            </div>
        
    </div>

</section>
<!-- End Find Jobs Section -->

@endsection

{{-- ini ke scirpt yang numpukin itu. --}}
{{-- ini ke scirpt yang numpukin itu. --}}
{{-- @push('script-addon')
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
@endpush --}}
