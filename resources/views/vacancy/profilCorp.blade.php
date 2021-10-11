@extends('layouts.layout3')

@section('title', 'Profil Perusahaan | Lowkerjogja.com')

@section('container')


<div class="container" style="position: relative; top: 130px;">
    <div class="row row-cols-1 row-cols-md-2 g-4">
      <div class="col-sm-4" style="padding-left: 90px;width: 370px;">
          <div class="card">
              <div class="card-body">
                  <!-- Buka Lapak -->
                  <div class="row">
                      <div class="col-sm-2">
                          <div class="">
                              <div class="card-body">
                                  <img src="/img/8.png" alt="logo"width="50px">
                              </div>
                          </div>
                      </div>
                      <br><br>
                      <div class="col-sm-6">
                          <div class="card-body" style="width: 230px; padding-left: 30px;">
                              <h6 class="card-text" style="padding-right: 50px;"><strong>Bukalapak</strong></h6>
                              <p class="card-text" style="color: #dcdcdc;">View My Profile</p>
                          </div>
                      </div>
                  </div>

                  <!-- Logo 1-->
                  <div class="row">
                      <div class="col-sm-2">
                          <div class="">
                              <div class="card-body">
                                  <i class="far fa-building fa-2x"></i>
                              </div>
                          </div>
                      </div>
                      <br><br>
                      <div class="col-sm-6">
                          <div class="card-body" style="width: 300px; padding-left: 30px;">
                              <h6 class="card-text" style="padding-right: 50px;"><strong><a href=""></a> Tentang Perusahaan</strong></h6>
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
                              <h6 class="card-text" style="padding-right: 50px;"><strong><a href=""></a> Simpan Kandidat</strong></h6>
                          </div>
                      </div>
                  </div>

              </div>
          </div>
      </div>

      <div class="col-sm-2" style="padding-left: 10px; width: 750px;">
          <div class="card">
            <img src="/img/4.png" class="card-img-top" id="gambar1">
            <div class="card-body">
                <img src="/img/8.png"  id="gambar2" width="50px" style="z-index: 2;top: 185px;position: absolute;"><br>
              <h5 class="card-title"><strong>Link Aja</strong> </h5><br>
              <h6 class="card-title"><strong>Best Payment</strong></h6>
              <p class="card-text" style="color: #dcdcdc;">technology company Jakarta, Indonesian</p>
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
      Our dream to offer mobile games to the entire planet through our products is about to become a reality. We owe our success to the talent and passion of our teams. It is because of their dedication to excellence and attention to detail that we can offer games of unparalleled quality to our millions of fans. We also have a great network of partners to help us deliver cool new games to your favorite device. Think Universal, Illumination Disney®, Marvel®, Hasbro®, Fox Digital Entertainment, Mattel®, Ferrari® and many more.

  </p>

</div>
</div>
</div>
<!-- end full time -->

    </div>
  </div>

  @endsection
