@extends('vacancy.layout2')

@section('title', 'Profil Perusahaan | Lowkerjogja.com')

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
                              <h6 class="card-text" style="padding-right: 50px;"><strong><a href="">Simpan Kandidat</a> </strong></h6>
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
<strong>Tentang Perusahaan</strong>
  <p>
{{$c->description}}
  </p>

</div>
</div>
</div>
<!-- end full time -->

    </div>
  </div>

  @endsection
