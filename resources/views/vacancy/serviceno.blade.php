@extends('vacancy.layout')

@section('title', 'Produk dan Layanan | Lowkerjogja.com')

@section('container')

<!-- ======= Produk Section ======= -->
<section id="team" class="team">
    <div class="container" data-aos="fade-up" style="margin-top: 100px">
      <header class="section-header">
        <p>Produk & Layanan</p>
      </header>
      <div class="row gy-4" style="position: relative; left:250px;">

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="member">
            <div class="member-info">
                <div class="card-header" style="background-color: #006AFF;color: white;">
                    <center><strong>Lowongan Pekerjaan</strong> </center>
                </div>
                <div class="card-body">
                    <center style="color: #006AFF;"><strong> Lowongan Pekerjaan</strong></center>
                    <center>Bayar hanya untuk apa yang Anda butuhkan</center>
                    <center>
                        <a href="" class="btn btn-outline-primary" style="margin-top: 520px;width: 200px;border-radius: 10px; height: 50px; font-size: 20px;">Coba Sekarang</a>
                    </center>
                </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
          <div class="member">
            <div class="member-info">
                <div class="card-header" style="background-color: #006AFF;color: white;">
                    <center><strong>Cari Kandidat</strong> </center>
                </div>
                <div class="card-body">
                    <center style="color: #006AFF;"><strong> Lowongan Pekerjaan</strong></center>
                    <center>Tak Terbatas</center>
                    <p style="color: #006AFF; position: relative; top: 30px;text-align: center;">
                        <strong>Fitur</strong>
                    </p>
                    <p style="position: relative; top: 10px;text-align: center;">
                        5 Featured Job posts
                        Recommended talent Employer branding Salary insights
                    </p>
                    <div class="card" style="position: relative; top: 50px;background: rgba(196, 196, 196, 0.1);box-shadow: 2px 2px 2px rgba(0,0,0,0);">
                        <div class="card-body">
                            <div class="card-title">
                                <p style="color: #006AFF; position: relative;text-align: center; bottom: 20px;right: 20px;">
                                    <strong>
                                        <img src="img/icons/search.png" style="position: relative;right: 30px;">
                                        Talent Search
                                    </strong>
                                <h5 style="position: relative;text-align: center; font-size: 20px;">
                                    Unlimited
                                </h5>
                                </p>
                            </div>
                            <div class="card-text">
                                <p style="position: relative;text-align: center;color: #dcdcdc; font-size: 12px;">Full access to 50,000+ resumes </p>
                            </div>
                        </div>
                    </div>
                    <br><br><br>
                    <center>
                        <a href="" class="btn btn-primary btn-lg" style="margin-top: 43px;width: 200px;border-radius: 10px;">Get Premium</a>
                    </center>
                </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
<!-- ======= End Section ======= -->
@endsection
