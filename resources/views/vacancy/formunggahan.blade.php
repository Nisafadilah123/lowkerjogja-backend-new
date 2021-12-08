@extends('vacancy.layout2')

@section('title', 'Form Unggahan | Lowkerjogja.com')

@section('container')

<!-- ======= Form Unggahan Section ======= -->
<div style="position: relative;top:150px;">

    <a href="/landingPageCorp" class="btn btn-secondary" style="position: relative; left:20px">
        <i class="fas fa-long-arrow-alt-left"></i>  Kembali </a>
</div>
<section>
    <div class="container-fluid" style="position: relative;right: 200px;top:80px">
      <div class="row justify-content-center">
        <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">

          <div class="card px-0 pt-4 pb-0 mt-3 mb-3" style="width: 1000px;">
            <h2 id="heading">Lowongan Pekerjaan dan Pemilihan Kandidat Terbaik</h2>
            <form id="msform" action="{{ url('/formUnggahan') }}" method="POST" >
              @csrf
              <!-- progressbar -->
                    <ul id="progressbar" style="width: 1000px; margin-left: 100px;">
                      <li class="active" id="account"><strong>Lowongan Pekerjaan</strong></li>
                      <li id="personal"><strong>Masukkan Desk Pekerjaan</strong></li>
                      <li id="payment"><strong>Selesai</strong></li>
                    </ul>
                    <div class="progress">
                      <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br>
              <!-- fieldsets -->
              <fieldset>
                <div class="form-card">
                  <div class="container px-4">
                      <div class="row gx-5">
                        <div class="col">
                          <label for="job" style="padding-bottom: 10px;"><strong>Posisi Kerja</strong> </label>
                          <input id="job_position" type="text" class="form-control posisi_kerja border-info placeicon" name="job_position" placeholder="Posisi">
                          <input id="corp_id" type="text" class="form-control" name="corp_id" placeholder="" value="{{ ucfirst(Auth::user()->id) }}" hidden>
                        </div>
                        <div class="col">
                          <label for="job" style="padding-bottom: 10px;"><strong>Kuota</strong> </label>
                          <input id="kuota" type="text" class="form-control kuota border-info placeicon" name="kuota" placeholder="Kuota">
                        </div>
                      </div>
                  </div>
                  <!---Pembatas--->
                  <div class="container px-4">
                    <div class="row gx-5">
                      <div class="col">
                        <label for="education" style="padding-bottom: 10px;padding-top: 10px;"><strong>Pendidikan Terakhir</strong> </label>
                        <select name="education" class="form-select form-select-sm pendidikan_terakhir border-info placeicon" aria-label=".form-select-sm example" style="position: relative; width: 435px;">
                            <option selected>-- Pilih Pendidikan Terakhir --</option>
                           <option value="SMA / SMK">SMA / SMK</option>
                           <option value="D3">D3</option>
                           <option value="D4 / S1">D4 / S1</option>
                           <option value="S2">S2</option>
                           <option value="S3">S3</option>
                        </select>
                      </div>
                      <div class="col">
                         <label for="education" style="padding-bottom: 10px;padding-top: 10px;"><strong>Tipe Pekerjaan</strong> </label>
                         {{-- <input id="job_type_id" type="text" class="form-control" name="job_type_id" placeholder="" value="{{ $job_types->id }}">{{ $job_types->tipe_pekerjaan }}> --}}
                         <select id="job_type" name="job_type" class="form-select form-select-sm job_type tipe_pekerjaan" aria-label=".form-select-sm example" style="position: relative; width: 435px;">
                           <option selected>-- Pilih Tipe Pekerjaan --</option>
                           @foreach ($job_types as $job_type)
                           <option value="{{ $job_type->id }}">{{ $job_type->tipe_pekerjaan }}</option>
                           @endforeach
                         </select>
                       </div>
                      </div>
                      </div>
                      <!--Pembatas-->
                  <div class="container px-4">
                    <div class="row gx-4">
                      <div class="coldeadline">
                        <label for="date" style="padding-bottom: 10px;padding-top: 10px;"><strong>Batas Waktu Pengisian Data Pada Aplikasi</strong> </label>
                        <input id="deadline" type="date" class="form-control batas_waktu_pengisian_data_pada_aplikasi  border-info placeicon" name="deadline" placeholder="Deadline" style="width: 400px;">
                      </div>
                      <div class="col">
                        <label for="education" style="padding-bottom: 10px;padding-top: 10px; position: relative; left: 500px;bottom: 110px;"><strong>Kategori Pekerjaan</strong> </label>
                        <select name="job_category" class="form-select form-select-sm job_category kategori_pekerjaan  border-info placeicon" aria-label=".form-select-sm example" style="padding-bottom: 10px;padding-top: 10px; position: relative; left: 500px;bottom: 110px;width: 450px;">
                            <option selected>-- Pilih Kategori Pekerjaan --</option>
                       </select>
                      </div>
                     </div>
                    </div>
                      <!--Pembatas-->
                  <div class="container px-4">
                    <div class="row gx-5">
                      <div class="col">
                        <label for="salary"style="padding-bottom: 10px;padding-top: 10px; position: relative; left: 2px;bottom: 110px;"><strong>Kisaran Gaji</strong></label>
                          <div class="input-group mb-3">
                            <input type="number" name="gaji_awal" class="form-control gaji_awal  border-info placeicon" placeholder="Rp xxx.xxx.xxx" aria-label="salary" aria-describedby="basic-addon1" style="padding-bottom: 10px;padding-top: 10px; position: relative; left: 2px;bottom: 110px;">
                            <input type="number" name="gaji_akhir" class="form-control gaji_akhir  border-info placeicon" placeholder="Rp xxx.xxx.xxx" aria-label="salary" aria-describedby="basic-addon1" style="padding-bottom: 10px;padding-top: 10px; position: relative; left: 2px;bottom: 110px;">
                          </div>
                        </div>
                        <div class="col">
                          <label for="location" style="padding-bottom: 10px;padding-top: 10px; position: relative; left: 2px;bottom: 110px;"><strong>Lokasi Pekerjaan</strong> </label>
                          <div class="form-group" style="padding-bottom: 5px;padding-top: 5px; position: relative; left: 2px;bottom: 110px;">
                            <label name="provinces" for="provinces" style=""><strong>Provinsi</strong></label>
                            <select name="provinces" class="form-select form-select-sm prov-data provinsi  border-info placeicon" aria-label=".form-select-sm example" style="position: relative; width: 250px;height:25px">
                                <option selected>-- Pilih Provinsi   --</option>
                                  </select>
                          </div>
                          <div class="form-group" style="padding-bottom: 5px;padding-top: 5px; position: relative; left: 2px;bottom: 110px;">
                            <label name="city" for="city"><strong>Kota</strong></label>
                            <select name="city" class="form-select form-select-sm kota-data kota  border-info placeicon" aria-label=".form-select-sm example" style="position: relative; width: 250px;height:25px">
                                <option selected>-- Pilih Kota --</option>
                              </select>
                            </div>
                          <div class="form-group" style="padding-bottom: 5px;padding-top: 5px; position: relative; left: 2px;bottom: 110px;">
                            <label for="location" style="padding-bottom: 10px;"><strong>Alamat</strong> </label>
                            <input id="job_location" type="text" class="form-control alamat  border-info placeicon" name="job_location" placeholder="Alamat Perusahaan">
                          </div>
                        </div>
                        </div>
                      </div>
                      <!--Pembatas-->
                      <div class="container px-4">
                        <div class="row gx-5">
                          <div class="col">
                            <label for="gender" style="padding-bottom: 10px;padding-top: 10px; position: relative; left: 2px;bottom: 220px;"><strong>Jenis Kelamin</strong> </label>
                            <select name="gender" class="form-select form-select-sm jenis_kelamin  border-info placeicon" aria-label=".form-select-sm example" style="padding-bottom: 10px;padding-top: 10px; position: relative; left: 5px;bottom: 225px;width: 250px;">                              <option selected>-- Pilih Jenis Kelamin --</option>
                              <option value="Pria">Pria</option>
                              <option value="Wanita">Wanita</option>
                              <option value="Pria/Wanita">Pria/Wanita</option>
                            </select>
                          </div>
                          <div class="col">
                            <label for="age" style="padding-bottom: 10px;padding-top: 10px; position: relative; left:2px;bottom: 140px"><strong>Umur</strong> </label>
                            <input id="age" type="text" class="form-control umur  border-info placeicon" name="age" placeholder="Umur" style="padding-bottom: 10px;padding-top: 10px; position: relative; left: 5px;bottom: 145px;width: 100px;">
                          </div>
                        </div>
                      </div>
                      <!--Pembatas-->
                      <div class="container px-4">
                        <div class="row gx-5">
                          <div class="col">
                            <label for="syarat" style="padding-bottom: 10px;padding-top: 10px; position: relative; left: 2px;bottom: 250px;"><strong>Syarat Pekerjaan</strong> </label>
                            <input id="syarat" type="text" class="form-control syarat_pekerjaan  border-info placeicon" name="syarat" placeholder="Masukkan Syarat Perusahaan" style="padding-bottom: 10px;padding-top: 10px; position: relative; left: 5px;bottom: 255px;width: 350px;">
                          </div>
                          <div class="col">
                            <div class="form-group" style="padding-bottom: 10px;padding-top: 10px; position: relative; left: 2px;bottom: 150px;">
                              <label for="email" style="padding-bottom: 10px;"><strong>Email</strong> </label>
                              <input id="email" type="email" class="form-control email  border-info placeicon" name="email" placeholder="Email" style="padding-bottom: 10px;padding-top: 10px;" value="{{ ucfirst(Auth::user()->email) }}">
                            </div>
                            <div class="form-group" style="padding-bottom: 10px;padding-top: 10px; position: relative; left: 2px;bottom: 170px;">
                              <label for="telepon" style="padding-bottom: 10px;"><strong>Telepon</strong> </label>
                              <input id="telepon" type="number" class="form-control telepon  border-info placeicon" name="telepon" placeholder="Masukkan No. Telp Perusahaan" style="padding-bottom: 10px;padding-top: 10px;">
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                <input type="button" name="next" class="next action-button btn-lanjut" value="Lanjut">
                <div style="position: relative;top:150px;">
                  <a href="/landingPageCorp" class="btn btn-secondary" style="position: relative; left:20px">
                      <i class="fas fa-long-arrow-alt-left"></i>  Kembali </a>
              </div>
              </fieldset>
              <!-- fieldsets -->
              <fieldset>
                <div class="form-card">
                    <div class="font-weight-bold head pb-1">Deskripsi Pekerjaan</div> <textarea class="deskripsi" name="des" id="desc" cols="50" rows="5" placeholder="Deskripsi"></textarea>
                </div> <input type="submit" name="next" class="next action-button btn-lanjut2" value="Lanjut" /> <input type="button" name="previous" class="previous action-button-previous" value="Sebelumnya" />
              </fieldset>
              <!-- fieldsets -->
              <fieldset>
                <div class="form-card">
                  <h2 class="purple-text text-center"><strong>SUKSES!!</strong></h2> <br>
                  <div class="row justify-content-center">
                    <div class="col-5"> <img src="img/check.jpg" class="fit-image"> </div>
                  </div> <br><br>
                  {{-- <div class="row justify-content-center">
                    <div class="col-10 text-center">
                      <h5 class="purple-text text-center">Postingan Pekerjaan</h5>
                      <a href="index.html" class="btn btn-primary" style="width: 350px;" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Lihat Postingan Pekerjaan
                        </a>
                    </div>
                  </div> --}}
                </div>
              </fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>
    </section>


<!-- End Form Unggahan Section -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
  // h1
  $(".btn-lanjut").click(function(){
    var posisi_kerja = $(".posisi_kerja").val();
    var kota = $(".kota").val();
    var pendidikan_terakhir = $(".pendidikan_terakhir").val();
    var tipe_pekerjaan = $(".tipe_pekerjaan").val();
    var batas_waktu_pengisian_data_pada_aplikasi = $(".batas_waktu_pengisian_data_pada_aplikasi").val();
    var kategori_pekerjaan = $(".kategori_pekerjaan").val();
    var gaji_awal = $(".gaji_awal").val();
    var gaji_akhir = $(".gaji_akhir").val();
    var provinsi = $(".provinsi").val();
    var kota = $(".kota").val();
    var alamat = $(".alamat").val();
    var jenis_kelamin = $(".jenis_kelamin").val();
    var umur = $(".umur").val();
    var syarat_pekerjaan = $(".syarat_pekerjaan").val();
    var email = $(".email").val();
    var telepon = $(".telepon").val();

    if(
      posisi_kerja != null &&
      kota != null &&
      pendidikan_terakhir != null &&
      tipe_pekerjaan != null &&
      batas_waktu_pengisian_data_pada_aplikasi != null &&
      kategori_pekerjaan != null &&
      gaji_awal != null &&
      gaji_akhir != null &&
      provinsi != null &&
      kota != null &&
      alamat != null &&
      jenis_kelamin != null &&
      umur != null &&
      syarat_pekerjaan != null &&
      email != null &&
      telepon != null
      ) {
      $("#account").attr("id", "check");
    }
    // alert(posisi_kerja);
  });

  // h2
  $(".btn-lanjut2").click(function(){
    var deskripsi = $(".deskripsi").val();

  if(deskripsi != null)
  {
    $("#personal").attr("id", "check");
    $("#payment").attr("id", "check");
  }
  });

</script>

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
