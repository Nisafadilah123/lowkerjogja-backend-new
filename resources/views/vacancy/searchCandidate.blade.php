@extends('vacancy.layout2')

@section('title', 'Cari Kandidat | Lowkerjogja.com')

@section('container')

<!-- Pencarian -->
<section id="find" class="find">
    <div class="container" data-aos="fade-up" style="margin-top: 100px;">
        <div class="row">
            {{-- @foreach ($user as $item ) --}}
            <form action="/candidate" method="GET">
                <label for="posisi" style="position: relative;left:430px; width: 220px;height:40px;"><strong>Posisi Pekerjaan</strong> </label>
                <input class="form-select form-select-sm" aria-label=".form-select-sm example" style="position: relative;left:400px; width: 220px;height:40px;background-image:url('mortarboard.png');" id="position-option" name="cari" name="cari" type="search" placeholder="Cari Posisi" aria-label="Search">
                <button type="submit" class="btn btn-primary" style="position: relative; left:650px;width:100px;bottom:40px"><i class="fas fa-search" style="position: relative;padding-right:5px" value="cari">   Cari</a></i>
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
            @foreach( $kandidat as $k )
            <div class="col-lg-4">
                <div class="post-box">
                    <div class="row align-items-start">
                        <div class="col">
                            <p style="background-color: #F9FAFF; text-align: center; border-radius: 13%; box-shadow: 0px 2px 20px rgba(1, 41, 112, 0.1);"></p>
                        </div>
                                <input type="hidden" class="form-control" name="iduser" id="iduser" value="{{ $k->user_id }}">
                                <input type="hidden" class="form-control" name="ida" id="ida" value="{{ $k->apply_jobs_id }}">
                                <input type="hidden" class="form-control" name="idc" id="idc" value="">
                            <div>
                                {{-- saved candidate/rekrut atau tidak --}}
                                <button class="btn" type="button" data-toggle="modal" data-target="#modalSaya" style="float: right">
                                    <i class="far fa-save"></i>

                                </button>


                                {{-- foto user --}}

                                <img src="{{asset('profile_photos/'.$k->apply_jobs->user->profile_photo_path)}}" style="float:left;" class="rounded-image" width="20px" height="20px" />
                                {{-- foreach candidate --}}
                                <h6>{{ $k->apply_jobs->user->name}}</h6>
                                <h6>{{ $k->apply_jobs->jobs->position }}</h6>
                            </div>
                    </div>

                        <div class="row align-items-start">
                            <div class="col" style="padding-top: 15px;">
                                {{-- foreach skill --}}

                                {{-- @foreach ($skill as $s) --}}
                                @foreach ( $k->apply_jobs->user->skill as $a )
                                <h1 style="font-weight: bold; font-size: 12px;">{{ $a->ahli }}</h1>

                                @endforeach

                                {{-- @endforeach --}}

                            </div>
                        </div>
                        <div class="row align-items-start">
                            <div class="col" style="padding-top: 15px;">
                                {{-- foreach skill --}}
                                <h1 style="font-weight: bold; font-size: 12px;">Status</h1>
                                <h1 style="font-weight: bold; font-size: 12px;">{{ $k->status }}</h1>
                                {{-- @endforeach --}}

                            </div>
                        </div>
                        <a class="btn btn-primary" href="/profilCandidate/{{ $k->id }}" role="button">Lihat Detail Kandidat</a>
                </div>
            </div>
            {{-- @endforeach --}}
            @endforeach
            <!-- bikin modal -->

        </div>
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
