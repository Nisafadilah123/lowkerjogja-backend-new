@extends('user.layout')

@section('title', 'Profil Perusahaan | Lowkerjogja.com')

@section('container')


<!-- main body -->
         <div class="container" style="position: relative; top: 100px;height: 900px;">
            <div class="row row-cols-1 row-cols-md-2 g-4">
              <div class="col-sm-8" style=" width: 700px;">
                <div class="card">
                  Hai
                  {{-- <img src="assets/img/4.png" class="card-img-top" id="gambar1"> --}}
                  <div class="card-body">
                      {{-- <img src="assets/img/7.png"  id="gambar2" width="50px" style="z-index: 2;top: 160px;position: absolute;"> --}}

                    <h5 class="card-title">Link Aja</h5><br>
                    <h6 class="card-title">Best Payment</h6>
                    <p class="card-text">technology company Jakarta, Indonesian</p>
                    <p class="card-text">
                        <a href="#" class="about" style="text-decoration: none;" ><strong style="padding-right: 20px;">About</strong></a> | <a href="job.html" style="text-decoration: none;" class="about"><strong style="text-decoration: none; padding-left: 20px;">Jobs</strong></a>
                  </p>

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

@endsection
