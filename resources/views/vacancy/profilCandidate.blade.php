@extends('layouts.layout3')

@section('title', 'Profil Kandidat | Lowkerjogja.com')

@section('container')

<div class="container" style="position: relative; top: 150px;height:600px">
            <div class="row row-cols-1 row-cols-md-2 g-4">
              <div class="col-sm-8">
                <div class="card">
                    {{-- foreach candidate --}}
                    {{-- foto --}}

                                <div class="row align-items-start">
                                    <div class="col">
                                        <p style="background-color: #F9FAFF; text-align: center; border-radius: 13%; box-shadow: 0px 2px 20px rgba(1, 41, 112, 0.1);"></p>
                                    </div>
                                        <div class="col-sm-4">
                                            <button class="btn btn-primary">Download CV</button>
                                        </div>
                                        <div>
                                            {{-- foto user --}}
                                            <img src="img/7.png" style="float:left; margin:0 8px 4px 0;" />
                                            {{-- foreach candidate --}}
                                            <h6>Nama Kandidat</h6>
                                            <h6>Lamar sebagai</h6>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                {{-- email candidate --}}
                                            </div>
                                            <div class="col-sm-6">
                                                {{-- provinsi candidate --}}
                                            </div>
                                        </div>
                                </div>

                                    <div class="row align-items-start">
                                        <div class="col-sm-6" style="padding-top: 15px;position: relative;left:300px">
                                                <button class="btn btn-primary" >Rekrut</button>
                                        </div>
                                        <div class="col-sm-6" style="padding-top: 15px;position: relative;left:100px">
                                            <button class="btn btn-danger" >Tolak</button>
                                    </div>
                                    </div><br>


                </div>
              </div>


              <div class="col-sm-4" style="width: 500px; padding-top: 20px;">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title" style="font-weight:bold">Bio</h5>
                      {{-- deskripsi candidate --}}
                      <p class="card-text"></p>
                    <hr>
                    <h5 class="card-title" style="font-weight:bold">Pendidikan</h5>
                    {{-- deskripsi candidate --}}
                    <div class="row">
                        <div class="col-sm-4">
                            {{-- tahun graduate candidate --}}
                            <h6>Tahun Lulus</h6>
                        </div>
                        <div class="col-sm-4">
                            {{-- universitas candidate --}}
                            <h6>Universitas</h6>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                            {{-- major --}}
                            <h6>Jurusan</h6>
                        </div>
                        <div class="col-sm-4">
                            {{-- data major --}}
                            <h6>Jurusan</h6>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                            {{-- major --}}
                            <h6>IPK</h6>
                        </div>
                        <div class="col-sm-4">
                            {{-- data ipk --}}
                            <h6>IPK</h6>
                        </div>
                    </div>
                    <hr>

                    <h5 class="card-title" style="font-weight:bold">Skill</h5>
                    {{-- deskripsi candidate --}}
                    <div class="row">
                        <div class="col-sm-4">
                            {{-- tingkat skill candidate --}}
                            <h6>Tingkatan Keahlian</h6>
                        </div>
                        <div class="col-sm-4">
                            {{-- skill candidate --}}
                            <h6>Keahlian</h6>
                        </div>
                    </div>
                    <hr>
                    <h5 class="card-title" style="font-weight:bold">Alamat</h5>
                    {{-- deskripsi candidate --}}
                    <div class="row">
                        <div class="col-sm-4">
                            {{-- alamat candidate --}}
                            <h6>Alamat</h6>
                        </div>
                        <div class="col-sm-4">
                            {{-- data alamat candidate --}}
                            <h6>Alamat</h6>
                        </div>
                    </div>


                    </div>
                  </div>
                </div>
            </div>
            <br>
          </div>
</div>
@endsection
