@extends('main.layout')

@section('title', 'Find Jobs | Lowkerjogja.com')

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


<section id="recent-blog-posts" class="recent-blog-posts">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-4">
                <div class="post-box">
                    <div class="row align-items-start">
                        <div class="col">
                            <p style="background-color: #F9FAFF; text-align: center; border-radius: 13%; box-shadow: 0px 2px 20px rgba(1, 41, 112, 0.1);">Full-time</p>
                        </div>
                        <div class="col">
                            <div></div>
                        </div>
                        <div class="col">
                            <div style="color: #BEBFC0; font-size: 12px;"><i style="padding-left: 4px;" class="bi bi-clock"></i>21 Mei 2021</div>
                        </div>
                    </div>

                    <div class="row align-items-start">
                        <div class="col">
                            <div> <i style="padding-left: 200px; padding-top: 10px; z-index: 1; font-size: 20px;" class="bi bi-plus-square-fill"></i>
                                <img src="img/7.png" style="float:left; margin:0 8px 4px 0;" />
                                <br>
                                <h6 style="color:#4154f1; font-weight: bold;">Link aja, Indonesian</h6>
                            </div>
                        </div>
                        <div class="row align-items-start">
                            <div class="col" style="padding-top: 15px;">
                                <h1 style="font-weight: bold; font-size: 27px;">UI Designer</h1>
                                <h6 style="color: #BEBFC0;">Yogyakarta, Indonesia</h6>
                                <h6 style="color: #28A59F; padding-top: 5px;">Rp.5.000.000 - 7.000.000</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Row Satu-->
            <div class="col-lg-4">
                <div class="post-box">
                    <div class="row align-items-start">
                        <div class="col">
                            <p style="background-color: #F9FAFF; text-align: center; border-radius: 13%; box-shadow: 0px 2px 20px rgba(1, 41, 112, 0.1);">Full-time</p>
                        </div>
                        <div class="col">
                            <div></div>
                        </div>
                        <div class="col">
                            <div style="color: #BEBFC0; font-size: 12px;"><i style="padding-right: 2px;" class="bi bi-clock"></i>21 Mei 2021</div>
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col">
                            <div> <i style="padding-left: 200px; padding-top: 10px; z-index: 1; font-size: 20px;" class="bi bi-plus-square-fill"></i>
                                <img src="img/7.png" style="float:left; margin:0 8px 4px 0;" />
                                <br>
                                <h6 style="color:#4154f1; font-weight: bold;">Link aja, Indonesian</h6>
                            </div>
                        </div>
                        <div class="row align-items-start">
                            <div class="col" style="padding-top: 15px;">
                                <h1 style="font-weight: bold; font-size: 27px;">Product Manager</h1>
                                <h6 style="color: #BEBFC0;">Yogyakarta, Indonesia</h6>
                                <h6 style="color: #28A59F; padding-top: 5px;">Rp.5.000.000 - 7.000.000</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="post-box">
                    <div class="row align-items-start">
                        <div class="col">
                            <p style="background-color: #F9FAFF; text-align: center; border-radius: 13%; box-shadow: 0px 2px 20px rgba(1, 41, 112, 0.1);">Full-time</p>
                        </div>
                        <div class="col">
                            <div></div>
                        </div>
                        <div class="col">
                            <div style="color: #BEBFC0; font-size: 12px;"><i style="padding-right: 2px;" class="bi bi-clock"></i>21 Mei 2021</div>
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col">
                            <div> <i style="padding-left: 200px; padding-top: 10px; z-index: 1; font-size: 20px;" class="bi bi-plus-square-fill"></i>
                                <img src="img/7.png" style="float:left; margin:0 8px 4px 0;" />
                                <br>
                                <h6 style="color:#4154f1; font-weight: bold;">Link aja, Indonesian</h6>
                            </div>
                        </div>
                        <div class="row align-items-start">
                            <div class="col" style="padding-top: 15px;">
                                <h1 style="font-weight: bold; font-size: 27px;">Programmer</h1>
                                <h6 style="color: #BEBFC0;">Yogyakarta, Indonesia</h6>
                                <h6 style="color: #28A59F; padding-top: 5px;">Rp.5.000.000 - 7.000.000</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Row Dua-->
    </div>
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-4">
                <div class="post-box">
                    <div class="row align-items-start">
                        <div class="col">
                            <p style="background-color: #F9FAFF; text-align: center; border-radius: 13%; box-shadow: 0px 2px 20px rgba(1, 41, 112, 0.1);">Full-time</p>
                        </div>
                        <div class="col">
                            <div></div>
                        </div>
                        <div class="col">
                            <div style="color: #BEBFC0; font-size: 12px;"><i style="padding-right: 2px;" class="bi bi-clock"></i>21 Mei 2021</div>
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col">
                            <div> <i style="padding-left: 200px; padding-top: 10px; z-index: 1; font-size: 20px;" class="bi bi-plus-square-fill"></i>
                                <img src="img/7.png" style="float:left; margin:0 8px 4px 0;" />
                                <br>
                                <h6 style="color:#4154f1; font-weight: bold;">Link aja, Indonesian</h6>
                            </div>
                        </div>
                        <div class="row align-items-start">
                            <div class="col" style="padding-top: 15px;">
                                <h1 style="font-weight: bold; font-size: 27px;">UI Designer</h1>
                                <h6 style="color: #BEBFC0;">Yogyakarta, Indonesia</h6>
                                <h6 style="color: #28A59F; padding-top: 5px;">Rp.5.000.000 - 7.000.000</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Row Tiga-->
            <div class="col-lg-4">
                <div class="post-box">
                    <div class="row align-items-start">
                        <div class="col">
                            <p style="background-color: #F9FAFF; text-align: center; border-radius: 13%; box-shadow: 0px 2px 20px rgba(1, 41, 112, 0.1);">Full-time</p>
                        </div>
                        <div class="col">
                            <div></div>
                        </div>
                        <div class="col">
                            <div style="color: #BEBFC0; font-size: 12px;"><i style="padding-right: 2px;" class="bi bi-clock"></i>21 Mei 2021</div>
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col">
                            <div> <i style="padding-left: 200px; padding-top: 10px; z-index: 1; font-size: 20px;" class="bi bi-plus-square-fill"></i>
                                <img src="img/7.png" style="float:left; margin:0 8px 4px 0;" />
                                <br>
                                <h6 style="color:#4154f1; font-weight: bold;">Link aja, Indonesian</h6>
                            </div>
                        </div>
                        <div class="row align-items-start">
                            <div class="col" style="padding-top: 15px;">
                                <h1 style="font-weight: bold; font-size: 27px;">Product Manager</h1>
                                <h6 style="color: #BEBFC0;">Yogyakarta, Indonesia</h6>
                                <h6 style="color: #28A59F; padding-top: 5px;">Rp.5.000.000 - 7.000.000</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="post-box">
                    <div class="row align-items-start">
                        <div class="col">
                            <p style="background-color: #F9FAFF; text-align: center; border-radius: 13%; box-shadow: 0px 2px 20px rgba(1, 41, 112, 0.1);">Full-time</p>
                        </div>
                        <div class="col">
                            <div></div>
                        </div>
                        <div class="col">
                            <div style="color: #BEBFC0; font-size: 12px;"><i style="padding-right: 2px;" class="bi bi-clock"></i>21 Mei 2021</div>
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col">
                            <div> <i style="padding-left: 200px; padding-top: 10px; z-index: 1; font-size: 20px;" class="bi bi-plus-square-fill"></i>
                                <img src="img/7.png" style="float:left; margin:0 8px 4px 0;" />
                                <br>
                                <h6 style="color:#4154f1; font-weight: bold;">Link aja, Indonesian</h6>
                            </div>
                        </div>
                        <div class="row align-items-start">
                            <div class="col" style="padding-top: 15px;">
                                <h1 style="font-weight: bold; font-size: 27px;">Programmer</h1>
                                <h6 style="color: #BEBFC0;">Yogyakarta, Indonesia</h6>
                                <h6 style="color: #28A59F; padding-top: 5px;">Rp.5.000.000 - 7.000.000</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Row Empat-->
    </div>
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-4">
                <div class="post-box">
                    <div class="row align-items-start">
                        <div class="col">
                            <p style="background-color: #F9FAFF; text-align: center; border-radius: 13%; box-shadow: 0px 2px 20px rgba(1, 41, 112, 0.1);">Full-time</p>
                        </div>
                        <div class="col">
                            <div></div>
                        </div>
                        <div class="col">
                            <div style="color: #BEBFC0; font-size: 12px;"><i style="padding-right: 2px;" class="bi bi-clock"></i>21 Mei 2021</div>
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col">
                            <div> <i style="padding-left: 200px; padding-top: 10px; z-index: 1; font-size: 20px;" class="bi bi-plus-square-fill"></i>
                                <img src="img/7.png" style="float:left; margin:0 8px 4px 0;" />
                                <br>
                                <h6 style="color:#4154f1; font-weight: bold;">Link aja, Indonesian</h6>
                            </div>
                        </div>
                        <div class="row align-items-start">
                            <div class="col" style="padding-top: 15px;">
                                <h1 style="font-weight: bold; font-size: 27px;">UI Designer</h1>
                                <h6 style="color: #BEBFC0;">Yogyakarta, Indonesia</h6>
                                <h6 style="color: #28A59F; padding-top: 5px;">Rp.5.000.000 - 7.000.000</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Row Lima-->
            <div class="col-lg-4">
                <div class="post-box">
                    <div class="row align-items-start">
                        <div class="col">
                            <p style="background-color: #F9FAFF; text-align: center; border-radius: 13%; box-shadow: 0px 2px 20px rgba(1, 41, 112, 0.1);">Full-time</p>
                        </div>
                        <div class="col">
                            <div></div>
                        </div>
                        <div class="col">
                            <div style="color: #BEBFC0; font-size: 12px;"><i style="padding-right: 2px;" class="bi bi-clock"></i>21 Mei 2021</div>
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col">
                            <div> <i style="padding-left: 200px; padding-top: 10px; z-index: 1; font-size: 20px;" class="bi bi-plus-square-fill"></i>
                                <img src="img/7.png" style="float:left; margin:0 8px 4px 0;" />
                                <br>
                                <h6 style="color:#4154f1; font-weight: bold;">Link aja, Indonesian</h6>
                            </div>
                        </div>
                        <div class="row align-items-start">
                            <div class="col" style="padding-top: 15px;">
                                <h1 style="font-weight: bold; font-size: 27px;">Product Manager</h1>
                                <h6 style="color: #BEBFC0;">Yogyakarta, Indonesia</h6>
                                <h6 style="color: #28A59F; padding-top: 5px;">Rp.5.000.000 - 7.000.000</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="post-box">
                    <div class="row align-items-start">
                        <div class="col">
                            <p style="background-color: #F9FAFF; text-align: center; border-radius: 13%; box-shadow: 0px 2px 20px rgba(1, 41, 112, 0.1);">Full-time</p>
                        </div>
                        <div class="col">
                            <div></div>
                        </div>
                        <div class="col">
                            <div style="color: #BEBFC0; font-size: 12px;"><i style="padding-right: 2px;" class="bi bi-clock"></i>21 Mei 2021</div>
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col">
                            <div> <i style="padding-left: 200px; padding-top: 10px; z-index: 1; font-size: 20px;" class="bi bi-plus-square-fill"></i>
                                <img src="img/7.png" style="float:left; margin:0 8px 4px 0;" />
                                <br>
                                <h6 style="color:#4154f1; font-weight: bold;">Link aja, Indonesian</h6>
                            </div>
                        </div>
                        <div class="row align-items-start">
                            <div class="col" style="padding-top: 15px;">
                                <h1 style="font-weight: bold; font-size: 27px;">Programmer</h1>
                                <h6 style="color: #BEBFC0;">Yogyakarta, Indonesia</h6>
                                <h6 style="color: #28A59F; padding-top: 5px;">Rp.5.000.000 - 7.000.000</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Row Dua-->
    </div>
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-4">
                <div class="post-box">
                    <div class="row align-items-start">
                        <div class="col">
                            <p style="background-color: #F9FAFF; text-align: center; border-radius: 13%; box-shadow: 0px 2px 20px rgba(1, 41, 112, 0.1);">Full-time</p>
                        </div>
                        <div class="col">
                            <div></div>
                        </div>
                        <div class="col">
                            <div style="color: #BEBFC0; font-size: 12px;"><i style="padding-right: 2px;" class="bi bi-clock"></i>21 Mei 2021</div>
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col">
                            <div> <i style="padding-left: 200px; padding-top: 10px; z-index: 1; font-size: 20px;" class="bi bi-plus-square-fill"></i>
                                <img src="img/7.png" style="float:left; margin:0 8px 4px 0;" />
                                <br>
                                <h6 style="color:#4154f1; font-weight: bold;">Link aja, Indonesian</h6>
                            </div>
                        </div>
                        <div class="row align-items-start">
                            <div class="col" style="padding-top: 15px;">
                                <h1 style="font-weight: bold; font-size: 27px;">UI Designer</h1>
                                <h6 style="color: #BEBFC0;">Yogyakarta, Indonesia</h6>
                                <h6 style="color: #28A59F; padding-top: 5px;">Rp.5.000.000 - 7.000.000</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Row Satu-->
            <div class="col-lg-4">
                <div class="post-box">
                    <div class="row align-items-start">
                        <div class="col">
                            <p style="background-color: #F9FAFF; text-align: center; border-radius: 13%; box-shadow: 0px 2px 20px rgba(1, 41, 112, 0.1);">Full-time</p>
                        </div>
                        <div class="col">
                            <div></div>
                        </div>
                        <div class="col">
                            <div style="color: #BEBFC0; font-size: 12px;"><i style="padding-right: 2px;" class="bi bi-clock"></i>21 Mei 2021</div>
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col">
                            <div> <i style="padding-left: 200px; padding-top: 10px; z-index: 1; font-size: 20px;" class="bi bi-plus-square-fill"></i>
                                <img src="img/7.png" style="float:left; margin:0 8px 4px 0;" />
                                <br>
                                <h6 style="color:#4154f1; font-weight: bold;">Link aja, Indonesian</h6>
                            </div>
                        </div>
                        <div class="row align-items-start">
                            <div class="col" style="padding-top: 15px;">
                                <h1 style="font-weight: bold; font-size: 27px;">Product Manager</h1>
                                <h6 style="color: #BEBFC0;">Yogyakarta, Indonesia</h6>
                                <h6 style="color: #28A59F; padding-top: 5px;">Rp.5.000.000 - 7.000.000</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="post-box">
                    <div class="row align-items-start">
                        <div class="col">
                            <p style="background-color: #F9FAFF; text-align: center; border-radius: 13%; box-shadow: 0px 2px 20px rgba(1, 41, 112, 0.1);">Full-time</p>
                        </div>
                        <div class="col">
                            <div></div>
                        </div>
                        <div class="col">
                            <div style="color: #BEBFC0; font-size: 12px;"><i style="padding-right: 2px;" class="bi bi-clock"></i>21 Mei 2021</div>
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col">
                            <div> <i style="padding-left: 200px; padding-top: 10px; z-index: 1; font-size: 20px;" class="bi bi-plus-square-fill"></i>
                                <img src="img/7.png" style="float:left; margin:0 8px 4px 0;" />
                                <br>
                                <h6 style="color:#4154f1; font-weight: bold;">Link aja, Indonesian</h6>
                            </div>
                        </div>
                        <div class="row align-items-start">
                            <div class="col" style="padding-top: 15px;">
                                <h1 style="font-weight: bold; font-size: 27px;">Programmer</h1>
                                <h6 style="color: #BEBFC0;">Yogyakarta, Indonesia</h6>
                                <h6 style="color: #28A59F; padding-top: 5px;">Rp.5.000.000 - 7.000.000</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Row Dua-->
    </div>
    <nav class="pagination-outer" aria-label="Page navigation">
        <ul class="pagination">
            <li class="page-item">
                <a href="#" class="page-link" aria-label="Previous">
                    <span aria-hidden="true">«</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item active"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item">
                <a href="#" class="page-link" aria-label="Next">
                    <span aria-hidden="true">»</span>
                </a>
            </li>
        </ul>
    </nav>
    </div>

</section>
<!-- End Find Jobs Section -->
<!-- Laravel Baru -->

@endsection

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
