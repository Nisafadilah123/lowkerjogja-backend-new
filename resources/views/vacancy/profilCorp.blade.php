@extends('vacancy.layout2')

@section('title', 'Profil Perusahaan | Lowkerjogja.com')

@section('container')


<div class="container" style="position: relative; top: 130px;height:1000px">
    <div class="row row-cols-1">

        @foreach ($corps as $c )

      <div class="col-sm-3">
          <div class="card">

              <img src="{{asset('logo/'. $c->logo)}}"/>

            <div class="card-body">
                <img src="{{asset('logo/'. $c->logo)}}"  id="gambar2" width="50px" style="z-index: 2;top: 140px;position: absolute;"><br>
              <h5 class="card-title"><strong>{{ $c->nama_corp }}</strong> </h5><br>
              <p class="card-text" style="color: #dcdcdc;">{{ $c->industri }}, {{ $c->location }}</p>
              <p class="card-text">
                  <a href="/profilCorp" style="text-decoration: none;"><strong style="padding-right: 20px;">Tentang</strong></a> | <a href="/karir" style="text-decoration: none;"><strong style="text-decoration: none; padding-left: 20px;">Jobs</strong></a>
            </p>
            </div>
          </div>
        </div>

        <div class="col-sm-9">
            <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                         <strong>Nama Perusahaan</strong>
                         <p>{{$c->nama_corp}}</p>

                    </div>
                    <div class="col-sm-6">
                        <a href="{{ url('perusahaan/'. $c->id.'/edit') }}">
                        <i class="fas fa-edit"style="position:relative;float:right"></i></a>
                    </div>
                </div>
                <hr>
                <strong>Tentang Perusahaan</strong>
                <p>{{$c->description}}</p>
                <hr>
                <strong>Industri</strong>
                <p>{{$c->industri}}</p>
                <hr>
                <strong>Lokasi</strong>
                <p>{{$c->location}}</p>
                <hr>
                <strong>Hari Kerja</strong>
                <p>{{$c->work_day}}</p>
                <hr>
                <strong>Tahun Berdiri</strong>
                <p>{{$c->founded_year}}</p>
            </div>
            </div>
        </div>
            <!-- end full time -->

            @endforeach
      </div>

  </div>


  @endsection
