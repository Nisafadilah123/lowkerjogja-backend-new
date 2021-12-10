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
                            <div style="color: #BEBFC0; font-size: 12px;float:right"><i style="padding-right: 10px;" class="bi bi-clock"></i>{{ \Carbon\Carbon::parse($i->created_at)->diffForHumans() }}</div>
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col">
                            <div>
                                <img src="logo/{{$i->logo}}" width="200px" height="150px" alt="400" style="float:left; margin:0 10px 10px 0;" />
                                <br>
                                <h6><b>{{ $i->position }}<b></h1>
                                <h6>{{ $i->nama_corp }}</h6>
                                <h6 style="color:#808080;">{{ $i->city_name }}, {{ $i->province_name }}</h6>
                                <h6 style="color:#4154f1;">Rp {{ number_format($i->starting_salary) }} - Rp {{ number_format($i->final_salary) }}</h6>
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
                    <!-- Foreac disini -->
                    <form method="post" enctype="multipart/form-data" action="{{ URL::to('/') }}/kirimcv">
                    {{csrf_field()}}
                    <div class="row align-items-start">
                        <div class="col">
                            <div>
                                <br>
                                <input type="hidden" class="form-control" name="idjob" id="idjob" value="{{ $i->id }}">
                                <h2><b>UNGGAH CV<b></h2>
                                <input type="file" class="form-control-file" id="cv" name="cv" required accept=".pdf">
                                <p style="font-size: 10px; color :red">* Harap Mengupload File Pdf</p>
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
