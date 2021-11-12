@extends('layouts.layout3')

@section('title', 'Profil Kandidat | Lowkerjogja.com')

@section('container')

<div class="container" style="position: relative; top: 150px;height:600px">
@foreach($kandidat as $k)
{{-- {{ dd($kandidat) }} --}}
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
                                            <a href="/open/{{$k->id}}" target="_blank" class="btn btn-primary">
                                                Download CV <span class="glyphicon glyphicon-eye-open">
                                            </a>
                                        </div>
                                        <div>
                                            {{-- foto user --}}
                                            <img src="{{asset('profile_photos/'.$k->apply_jobs->user->profile_photo_path)}}" style="float:left;" class="rounded-image" width="60px" height="60px" />
                                            {{-- foreach candidate --}}
                                            <h6>{{ $k->apply_jobs->user->name }}</h6>
                                            <h6>{{ $k->apply_jobs->jobs->position }}</h6>
                                            {{-- <h6>{{ date('d-m-Y', strtotime($k->wawancara)) }}</h6> --}}

                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                {{ $k->apply_jobs->user->address}}
                                            </div>
                                            <div class="col-sm-6">
                                                {{ $k->apply_jobs->user->province_name}}
                                                {{-- harusnya muncul provinsi --}}
                                            </div>
                                        </div>
                                </div>

                                    <div class="row align-items-start">
                                        <form method="post" enctype="multipart/form-data" action="{{ URL::to('/') }}/atur">
                                        {{csrf_field()}}
                                        <!-- <h6>user_id<h6> -->
                                        <input type="hidden" class="form-control" name="iduser" id="iduser" value="{{ $k->id }}">
                                        <!-- <h6>id_apply_job<h6> -->
                                        <input type="hidden" class="form-control" name="idapplyjob" id="idapplyjob" value="{{ $k->apply_jobs_id }}">
                                        <!-- <h6>id_candidate<h6> -->
                                        <input type="hidden" class="form-control" name="idcandidate" id="idcandidate" value="{{ $k->id }}">
                                    <div class="row">
                                         <div class="col-sm-6" style="padding-top: 15px;">
                                            <button type="submit" href="/atur" name="terima" class="btn btn-primary" value="{{$k->id}}">Rekrut</button>
                                        </div>
                                        <div class="col-sm-6" style="padding-top: 15px;">
                                            <button type="submit" href="/atur" name="tolak" class="btn btn-danger" value="{{$k->id}}">Tolak</button>
                                    </div>
                                    </div>

                                    </form>

                                    <div class="row align-items-start">
                                        <div class="col-sm-6" style="padding-top: 15px;">
                                            <a href="{{ url('kandidat/'. $k->id.'/edit') }}" name="wawancara" class="btn btn-success" value="">Set Tanggal Wawancara</a>
                                        </div>

                                        <div class="col-sm-6" style="padding-top: 15px;">
                                            <a href="{{ url('kandidat/'.$k->id.'/email') }}" name="wawancara" class="btn btn-success" value="">Kirim Email</a>
                                        </div>

                                    </div>

                                    </div><br>


                </div>
                <br>
                <a class="btn btn-primary" href="/candidate" role="button">Kembali</a>
            </div>


            <div class="col-sm-4" style="width: 500px; padding-top: 20px;">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title" style="font-weight:bold">Bio</h5>
                    {{-- deskripsi candidate --}}
                    <p class="card-text">{{ $k->apply_jobs->status }}</p>
                    <hr>
                    <h5 class="card-title" style="font-weight:bold">Pendidikan</h5>
                    {{-- deskripsi candidate --}}
                    <div class="row">
                        @foreach ( $k->apply_jobs->user->education as $e )
                        <div class="col-sm-4">
                            {{-- tahun graduate candidate --}}
                            <h6>{{ $e -> graduate }}</h6>
                        </div>
                        <div class="col-sm-4">
                            {{-- universitas candidate --}}
                            <h6>{{ $e -> name }}</h6>
                        </div>
                        @endforeach
                    </div>

                    <div class="row">
                        @foreach ( $k->apply_jobs->user->education as $e )
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                            {{-- major --}}
                            <h6>Jurusan</h6>
                        </div>
                        <div class="col-sm-4">
                            {{-- data major --}}
                            <h6>{{ $e -> major}}</h6>
                        </div>
                        @endforeach
                    </div>

                    <div class="row">
                        @foreach ( $k->apply_jobs->user->education as $e )
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                            {{-- major --}}
                            <h6>IPK</h6>
                        </div>
                        <div class="col-sm-4">
                            {{-- data ipk --}}
                            <h6>{{ $e -> gpa}}</h6>
                        </div>
                        @endforeach
                    </div>
                    <hr>

                    <h5 class="card-title" style="font-weight:bold">Skill</h5>
                    {{-- deskripsi candidate --}}
                    <div class="row">
                        @foreach ( $k->apply_jobs->user->skill as $s )
                        <div class="col-sm-4">
                            {{-- tingkat skill candidate --}}
                            <h6>{{ $s -> level }}</h6>
                        </div>
                        <br>
                        <div class="col-sm-4">
                            {{-- skill candidate --}}
                            <h6>{{ $s -> ahli }}</h6>
                        </div>
                        @endforeach
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
                            <h6>{{ $k->apply_jobs->user->address }}</h6>
                        </div>
                    </div>


                    </div>
                </div>
                </div>
            </div>
            <br>
            @endforeach
        </div>
</div>
@endsection
