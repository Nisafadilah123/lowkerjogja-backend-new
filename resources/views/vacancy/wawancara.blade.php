@extends('vacancy.layout2')

@section('title', 'Wawancara Kandidat | Lowkerjogja.com')

@section('container')

<div class="container" style="position: relative; top: 100px; height: 750px;">
	<div class="col-sm-6">
		<div class="card" style="width: 1000px; position: relative; left: 100px; height: 600px;">
			<div class="card-body">
                @foreach ($kandidat as $c )
                <form method="post" action="/kandidat/{{ $c->id }}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <div class="container px-4">
                            <input type="hidden" name="candidate_id" value="{{$c->id  }}">
                            <div class="row gx-5">
                                <div class="col-sm-6">
                                    <label for="judul" style="padding-bottom: 10px;"><strong>Nama Subjek Email</strong></label>
                                    <input type="text" name="judul" class="form-control" placeholder="Isilah Subjek Email ">
                                </div>
                                <div class="col-sm-6">
                                    <label for="education" style="padding-bottom: 10px;"><strong>Tanggal Wawancara</strong> </label>
                                    <input type="date" id="wawancara" class="form-control" name="wawancara">
                                </div>
                            </div>

                            <div class="row gx-5">
                                <div class="col-sm-6">
                                    <label for="corp" style="padding-bottom: 10px;padding-top: 10px;"><strong>Nama</strong> </label>
                                    <input id="name" type="text" class="form-control" name="name" placeholder="Nama Kandidat" value="{{ $c->user->name }}" readonly>
                                </div>
                                <div class="col-sm-6">
                                    <label for="email" style="padding-bottom: 10px;padding-top: 10px;"><strong>Email Kandidat</strong> </label>
                                    <input id="email" type="email" class="form-control" name="email" placeholder="Email Kandidat" value="{{ $c->user->email }}" readonly>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="container px-4">
                            <div class="row gx-5">
                                <div class="col-sm-6">
                                    <label for="corp" style="padding-bottom: 10px;padding-top: 10px;"><strong>Nama Perusahaan</strong> </label>
                                    <input id="nama_corp" type="text" class="form-control" name="nama_corp" placeholder="Nama Perusahaan" value="{{ $c->apply_jobs->jobs->corp->nama_corp }}" readonly>
                                </div>
                                <div class="col-sm-6">
                                    <label for="corp" style="padding-bottom: 10px;padding-top: 10px;"><strong>Lamar Sebagai</strong> </label>
                                    <input id="position" type="text" class="form-control" name="position" placeholder="Lamar sebagai" value="{{ $c->apply_jobs->jobs->position }}" readonly>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="container px-4">
                            <div class="row gx-5">
                                <div class="col-sm-6">
                                    <label for="corp" style="padding-bottom: 10px;padding-top: 10px;"><strong>Waktu Interview</strong> </label>
                                    <input id="waktu" type="text" class="form-control" name="waktu" placeholder="Waktu Interview">
                                </div>
                                <div class="col-sm-6">
                                    <label for="corp" style="padding-bottom: 10px;padding-top: 10px;"><strong>Tempat Interview</strong> </label>
                                    <input id="tempat" type="text" class="form-control" name="tempat" placeholder="Tempat Interview">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="container px-4">
                            <div class="row gx-5">
                                <div class="col-sm-12">
                                    <label for="corp" style="padding-bottom: 10px;padding-top: 10px;"><strong>Catatan</strong> </label>
                                    <textarea id="catatan" type="text" class="form-control" name="catatan" placeholder="Catatan Interview" rows="4"></textarea>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-4">
                        <div class="container">
                            <div class="row gx-5">
                                <div class="col-sm-6">
                                    <a href="/profilCandidate/{{ $c->id }}" style="margin-left: 10px ;" class="btn btn-outline-primary"><span>Batalkan</span></a>
                                    <button type="submit" style="margin-left: 10px;" class="btn btn-primary"><span style="padding: 5px;">Kirim</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
                @endforeach
{{-- {{ dd($kandidat) }} --}}
            </div>
		</div>
	</div>
</div>
  @endsection

  @push('script-addon')

<script>
    $(function() {
      $( "#datepicker" ).datepicker({
        format: 'dd-mm-yyyy',
      });
        changeMonth: true,
        changeYear: true
    });
    </script>


@endpush
