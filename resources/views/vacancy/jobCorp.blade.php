@extends('vacancy.layout2')

@section('title', 'Jobs Corp | Lowkerjogja.com')

@section('container')

<div class="container" style="position: relative; top: 130px;">
    <div class="row row-cols-1 row-cols-md-2 g-4">
      <div class="col-sm-4" style="padding-left: 90px;width: 370px;">
          <div class="card">
              <div class="card-body">
                  <!-- Buka Lapak -->
                  <div class="row">
                    @foreach ($corps as $c )
                    <div class="col-sm-2">
                        <div class="">
                            <div class="card-body">
                              <img src="logo/{{$c->logo}}"  id="gambar2" width="50px"><br>
                          </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="col-sm-6">

                        <div class="card-body" style="width: 230px; padding-left: 30px;">
                            <h6 class="card-text" style="padding-right: 50px;"><strong>{{ $c->nama_corp }}</strong></h6>
                        </div>
                    </div>
                </div>


                  <!-- Logo 1-->
                  <div class="row">
                    <div class="col-sm-2">
                        <div class="">
                            <div class="card-body">
                              <i class="fas fa-user-tie fa-2x"></i>
                          </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="col-sm-6">
                        <div class="card-body" style="width: 300px; padding-left: 30px;">
                            <h6 class="card-text" style="padding-right: 50px;"><strong><a href="/owner">Tentang Owner</a> </strong></h6>
                        </div>
                    </div>
                </div>

                  <!-- Logo 2-->
                  <div class="row">
                      <div class="col-sm-2">
                          <div class="">
                              <div class="card-body">
                                  <i class="far fa-bookmark fa-2x"></i>
                              </div>
                          </div>
                      </div>
                      <br><br>
                      <div class="col-sm-6">
                          <div class="card-body" style="width: 300px; padding-left: 30px;">
                              <h6 class="card-text" style="padding-right: 50px;"><strong><a href="">Simpan Kandidat</a></strong></h6>
                          </div>
                      </div>
                  </div>

              </div>
          </div>
      </div>

      <div class="col-sm-2" style="padding-left: 10px; width: 750px;">
        <div class="card">
            <img src="logo/{{$c->logo}}" height="300px"/>

            @endforeach
          <div class="card-body">
              <img src="logo/{{$c->logo}}"  id="gambar2" width="50px" style="z-index: 2;top: 185px;position: absolute;"><br>
            <h5 class="card-title"><strong>{{ $c->nama_corp }}</strong> </h5><br>
            <p class="card-text" style="color: #dcdcdc;">{{ $c->industri }}, {{ $c->location }}</p>
            <p class="card-text">
                <a href="/profilCorp" style="text-decoration: none;"><strong style="padding-right: 20px;">Tentang</strong></a> | <a href="/job" style="text-decoration: none;"><strong style="text-decoration: none; padding-left: 20px;">Jobs</strong></a>
          </p>
          </div>
        </div>
        </div>

      </div>

  </div>
</div>
</div>

<!-- full time -->
<div class="col-sm-8" style="padding-left: 485px; width: 1215px; padding-top: 150px;">
<div class="card">
<div class="card-body">

    <div class="col-sm-8">
        <div class="card" style="width:400px;">
            <div class="card">
            <div class class="card-body" style="width: 1000px;">
                <h5 class="card-title" style="padding-left: 40px;"><strong>Full-time</strong><i class="far fa-clock" style="padding-left: 130px; color: #dcdcdc; padding-right: 10px; font-size: medium;"> 21 May 2021</i></h5>

                <a href="/editCorp" style="color: #006AFF;"><i class="fas fa-edit" style="top: 150px; padding-left: 330px;"></i></a>
                <a href="delete.html"><i class="fas fa-trash-alt" style="top: 150px; padding-right: 330px;"></i></a>

                <div class="row">
                    <div class="col-sm-6">
                            <div class="card-body">
                                <div style="text-align:justify;width:75%; padding:8px;"><img src="/img/8.png" width="70px" style="float:left; margin:0 8px 4px 0;"/>
                                    <br>
                                    <h6 style="color: #006AFF;"><strong>Bukalapak, Indonesian</strong> </h6>
                                </div>
                                <br>
                                <h5><strong>UI Designer</strong></h5>
                                <h6 style="color: #dcdcdc;">Yogyakarta, Indonesia</h6>
                                <h6 style="color:#008080;">Rp.5.000.000 - 7.000.000</h6>
                            </div>
                    </div>


                    <br><br>


                </div>
            </div>

            </div>
        </div>
    </div>

</div>
</div>
</div>
<!-- end full time -->

    </div>
  </div>

  @endsection
