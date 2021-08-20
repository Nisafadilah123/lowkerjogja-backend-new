@extends('user.layout2')

@section('title', 'About Corp | Lowkerjogja.com')

@section('container')

<!-- ======= About Corp Section ======= -->

<div class="container" style="position: relative; top: 100px;height: 850px;">
    <div class="row row-cols-1 row-cols-md-2 g-4">
      <div class="col-sm-8" style=" width: 700px;">
        <div class="card">
          <img src="img/4.png" class="card-img-top" id="gambar1">
          <div class="card-body">
              <img src="img/7.png"  id="gambar2" width="50px" style="z-index: 2;top: 160px;position: absolute;">

            <h5 class="card-title">Link Aja</h5><br>
            <h6 class="card-title">Best Payment</h6>
            <p class="card-text">technology company Jakarta, Indonesian</p>
            <p class="card-text">
                <a href="/aboutcorp" style="text-decoration: none;"><strong style="padding-right: 20px;">About</strong></a> | <a href="/job" style="text-decoration: none;"><strong style="text-decoration: none; padding-left: 20px;">Jobs</strong></a>
          </p>

          </div>
        </div>
      </div>


      <div class="col-sm-2" style="padding-left: 50px;width: 330px;">
          <div class="card">
              <div class="card-body">
                  <h5 class="card-title"><strong> Similiar Company</strong></h5>
                  <!-- Tokopedia -->
                  <div class="row">
                      <div class="col-sm-2">
                          <div class="">
                              <div class="card-body">
                                  <img src="img/6.png" alt="logo"width="50px">
                              </div>
                          </div>

                      </div>
                      <br><br>
                      <div class="col-sm-6">
                          <div class="card-body" style="width: 200px; padding-left: 30px;">
                              <h5 class="card-text" style="padding-right: 50px;"><strong>Tokopedia</strong></h5>
                              <h7 class="card-text" style="padding-right: 50px; padding-top: 5px;"><strong>E-commerce</strong></h7>
                              <p class="card-text">Jakarta, Indonesian</p>
                          </div>
                      </div>
                  </div>

                  <!-- Buka Lapak -->
                  <div class="row">
                      <div class="col-sm-2">
                          <div class="">
                              <div class="card-body">
                                  <img src="img/8.png" alt="logo"width="50px">
                              </div>
                          </div>
                      </div>
                      <br><br>
                      <div class="col-sm-6">
                          <div class="card-body" style="width: 230px; padding-left: 30px;">
                              <h5 class="card-text" style="padding-right: 50px;"><strong>Bukalapak</strong></h5>
                              <h7 class="card-text" style="padding-right: 50px; padding-top: 5px;"><strong>E-commerce</strong></h7>
                              <p class="card-text">Jakarta, Indonesian</p>
                          </div>
                      </div>
                  </div>

                  <!-- By u -->
                  <div class="row">
                      <div class="col-sm-2">
                          <div class="">
                              <div class="card-body">
                                  <img src="img/5.png" alt="logo"width="50px">
                              </div>
                          </div>
                      </div>
                      <br><br>
                      <div class="col-sm-6">
                          <div class="card-body" style="width: 230px; padding-left: 30px;">
                              <h5 class="card-text" style="padding-right: 50px;"><strong>By.U</strong></h5>
                              <h7 class="card-text" style="padding-right: 50px; padding-top: 5px;"><strong>Provider</strong></h7>
                              <p class="card-text">Bandung, Indonesian</p>
                          </div>
                      </div>
                  </div>

              </div>
          </div>
      </div>

      <div class="col-sm-8" style="width: 700px; padding-top: 20px;">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">About Corporate</h5>
              <p class="card-text">Our dream to offer mobile games to the entire planet through our products is about to become a reality. We owe our success to the talent and passion of our teams. It is because of their dedication to excellence and attention to detail that we can offer games of unparalleled quality to our millions of fans. We also have a great network of partners to help us deliver cool new games to your favorite device. Think Universal, Illumination Disney®, Marvel®, Hasbro®, Fox Digital Entertainment, Mattel®, Ferrari® and many more.</p>
            </div>
          </div>
        </div>
    </div>
    <br>
  </div>

  <!-- End about corp Section -->

  @endsection
