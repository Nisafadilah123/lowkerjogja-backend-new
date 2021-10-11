@extends('user.layout')

@section('title', 'Lamar | Lowkerjogja.com')

@section('container')

<!-- ======= Recent Blog Posts Section ======= -->
<section id="recent-blog-posts" class="recent-blog-posts" style="padding-top: 130px;">
@foreach($lamarview as $i)
<div class="container" data-aos="fade-up">
        <div class="row" style="padding-bottom:20px ">
            <div class="col-lg-12">
                <div class="post-box">
                    <div class="row align-items-start">
                        <div class="col">
                        </div>
                        <div class="col">
                            <div style="color: #BEBFC0; font-size: 12px;"><i style="padding-left: 400px;" class="bi bi-clock"></i>{{ $i->created_at}}</div>
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col">
                            <div>
                                <img src="/template/img/logo/{{$i->logo}}" width="150px" height="150px" alt="400" style="float:left; margin:0 10px 10px 0;" />
                                <br>
                                <h1><b>{{ $i->position }}<b></h1>
                                <h5>{{ $i->nama_corp }}</h5>
                                <h6 style="color:#808080;">{{ $i->city_name }}, {{ $i->province_name }}</h6>
                                <h6 style="color:#4154f1;">Rp {{ number_format($i->salary_range) }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="post-box">
                    <div class="row align-items-start">
                        <div class="col">
                        </div>
                        <div class="col">
                            <h1></h1>
                    </div>
                    <!-- Foreac disini -->
                    <form method="post" enctype="multipart/form-data" action="{{ URL::to('/') }}/kirimcv">
                    {{csrf_field()}}
                    <div class="row align-items-start">
                        <div class="col">
                            <div>
                                <br>
                                <input type="hidden" class="form-control" name="idjob" id="idjob" value="{{ $i->id }}">
                                <h2><b>UNGGAH CV<b></h2>
                                <input type="file" class="form-control-file" id="cv" name="cv" required="required">
                                <p style="font-size: 10px">* Harap Mengupload File Pdf</p>
                                <br>
                                <strong>Deskripsi Anda</strong>
                                <br>
                                <textarea class="form-control" id="letter" name="letter" rows="3" required="required" placeholder="Tulis Deskripsi Anda"></textarea>
                                <br>
                                <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary" name="Submit">Kirim Lamaran</button>
                                <a class="btn btn-primary" href="/findjobsUser" role="button">Kembali</a>
                            </div>
                            </div>
                        </div>
                    </div>
                    </form>
                    <!-- endforeach -->
                </div>
            </div>
        </div>
@endforeach
</section><!-- End Recent Blog Posts Section -->
@endsection
