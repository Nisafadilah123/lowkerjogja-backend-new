@extends('layouts.layout3')

@section('title', 'Search Candidate | Lowkerjogja.com')

@section('container')

<!-- Pencarian -->
<section id="find" class="find">
    <div class="container" data-aos="fade-up" style="margin-top: 100px;">
        <div class="row">
            {{-- @foreach ($user as $item ) --}}
                <form action="/search" method="get">
                <div class="row">
                    <div class="col-md-2">

                        <label for="position" style="padding-bottom: 10px;padding-top: 10px;"><strong>Position</strong> </label>
                        <select id="filter-position" class="form-control" aria-label="form-select-sm example" style="position: relative; width: 220px;height:40px;background-image:url('mortarboard.png');">
                            <option selected> Semua Lulusan </option>
                            <option value="1">S3</option>
                            <option value="2">S2</option>
                            <option value="3">S1/D4</option>
                            <option value="4">D3</option>
                            <option value="5">SMA/SMK</option>

                        </select>
                        </div>

                        <div class="col-md-4">
                            <label name="provinsi" for="provinsi" style="position: relative; left:100px;width: 300px;padding-top:10px;padding-bottom: 10px;"><strong>Province</strong></label>
                            <select name="provinsi" class="form-select form-select-sm prov-data" aria-label="form-select-sm example" style="position: relative; left:100px;width: 250px;height:40px">
                                <option selected>-- Pilih Provinsi --</option>
                            </select>
                        </div>

                    <div class="col-sm-2">
                        <label name="kota" for="kota" style="position: relative; left:20px;width: 300px;padding-top:10px;padding-bottom: 10px;"><strong>City</strong></label>
                        <select name="kota" class="form-select form-select-sm kota-data" aria-label="form-select-sm example" style="position: relative; left:20px;width: 250px;height:40px">
                            <option selected>-- Pilih Kota --</option>
                        </select>
                    </div>

                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-primary" style="position: relative; left:150px;width:100px;top:45px"><i class="fas fa-search" style="position: relative;padding-right:5px">   Search</a></i>
                        </div>
                </div>
            </form>
            {{-- @endforeach --}}


        </div>
    </div>
</section>
<!-- end Pencarian -->
<section id="recent-blog-posts" class="recent-blog-posts">
    <div class="container" data-aos="fade-up">
        <div class="row">
            {{-- @foreach ($data as $item) --}}
            <div class="col-lg-4">
                <div class="post-box">
                    <div class="row align-items-start">
                        <div class="col">
                            <p style="background-color: #F9FAFF; text-align: center; border-radius: 13%; box-shadow: 0px 2px 20px rgba(1, 41, 112, 0.1);"></p>
                        </div>
                        <div class="col">
                            <div></div>
                        </div>
                        <div class="col">
                            <div style="color: #BEBFC0; font-size: 12px;"><i style="padding-right: 2px;" class="bi bi-clock"></i></div>
                        </div>
                    </div>

                    <div class="row align-items-start">
                        <div class="col">
                            <div> <i style="padding-left: 200px; padding-top: 10px; z-index: 1; font-size: 20px;" class="bi bi-plus-square-fill"></i>
                                <img src="img/7.png" style="float:left; margin:0 8px 4px 0;" />
                                <br>
                                <h6 style="color:#4154f1; font-weight: bold;"></h6>
                            </div>
                        </div>
                        <div class="row align-items-start">
                            <div class="col" style="padding-top: 15px;">
                                <h1 style="font-weight: bold; font-size: 27px;"></h1>
                                <h6 style="color: #BEBFC0;"></h6>
                                <h6 style="color: #28A59F; padding-top: 5px;"></h6>
                                <a class="btn btn-primary" href="/lamar" role="button">Lamar</a>
                                <a class="btn btn-primary" href="/detail" role="button">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- @endforeach --}}


    </div>

</section>
<!-- End Find Jobs Section -->

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
