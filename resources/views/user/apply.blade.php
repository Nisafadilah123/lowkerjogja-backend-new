@extends('user.layout')

@section('title', 'Application Letter User | Lowkerjogja.com')

@section('container')

<!-- ======= Apply User Section ======= -->

<div class="container" style="position: relative; top: 100px;height: 850px;">
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col-sm-8" style="padding-left: 250px;">

                <div class="card" style="width: 630px;">
                <div class class="card-body" style="width: 1000px;">

                    <div class="row">
                        <div class="col-sm-8">

                                <div class="card-body">
                                    <div style="text-align:justify;width:140%;color:#4682B4; padding:8px;"><img src="img/7.png" style="float:left; margin:0 20px 16px 0; width: 150px;"/>
                                        <i class="far fa-clock" style="padding-left: 300px; color: #dcdcdc; padding-right: 20px; top: 50px;"> 21 May 2021</i>
                                        <h3><strong style="color: black;top: 300px;">UI Designer</strong>
                                            <i class="fas fa-plus-square" style="padding-left: 220px; color: black;"></i>
                                        </h3>
                                        <h4>Link aja</h4>
                                    <h6 style="color: #dcdcdc;">Yogyakarta, Indonesia</h6>
                                    <h6 style="color:#008080;">Rp.5.000.000 - 7.000.000</h6>

                                    </div>
                                    <br>
                                </div>

                        </div>

                    </div>
                </div>

                </div>

        </div>



        </div>

        <div class="col-sm-8" style="padding-left: 240px; padding-top: 50px;">
          <div class="card" style="width: 630px;">
            <div class="card-body">
              <form class="row g-3">

                <div class="mb-3">
                    <h5 class="card-title"><strong>Upload CV</strong> </h5>
                    <input class="form-control" type="file" id="formFile">
                </div>

                <div class="col-sm-12">
                    <h5 class="card-title"><strong>Application Letter</strong></h5>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Tulis surat lamaran kamu"></textarea>
                </div>
                <br><br><br>
    <center>
    <button type="submit" class="btn btn-primary btn-block" style="width: 580px;margin-left: 20px;margin-top: 20px;">
        <center><strong>Send Application</strong> </center>
    </button></center>
              </form>

            </div>
          </div>
        </div>
      </div>

<!-- End Apply Section -->

@endsection
