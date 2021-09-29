@extends('user.layout')

@section('title', 'Lamar | Lowkerjogja.com')

@section('container')

<!-- ======= Recent Blog Posts Section ======= -->
<section id="recent-blog-posts" class="recent-blog-posts" style="padding-top: 150px;">
@foreach($lamarview as $i)
<div class="container" data-aos="fade-up">
        <div class="row">
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
                            <div> <i style="padding-left: 990px; padding-top: 10px; z-index: 1; font-size: 30px;" class="bi bi-plus-square-fill"></i>
                                <img src="/template/img/logo/{{$i->logo}}" width="180" height="180" alt="400" style="float:left; margin:0 10px 10px 0;" />
                                <br>
                                <h1><b>{{ $i->position }}<b></h1>
                                <h2 style="color:#4154f1;">{{ $i->nama_corp }}</h2>
                                <h3 style="color:#808080;">{{ $i->city }}, {{ $i->provinces }}</h3>
                                <h3 style="color:#4154f1;">{{ $i->salary_range }}</h3>
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
                                <h2><b>UPLOAD CV<b></h2>
                                <input type="file" class="form-control-file" id="cv" name="cv" required="required">
                                <br><br>
                                <h2><b>Application Letter</b></h2>
                                <br>
                                <textarea class="form-control" id="letter" name="letter" rows="3" required="required" placeholder="Tulis surat lamaran kamu"></textarea>
                                <br>
                                <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary" name="Submit">Send Application</button>
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
