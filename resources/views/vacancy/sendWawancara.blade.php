@extends('vacancy.layout2')

@section('title', 'Kirim Wawancara Kandidat | Lowkerjogja.com')

@section('container')

<div class="container" style="position: relative; top: 100px; height: 500px;">
	<div class="col-sm-6">
		<div class="card" style="width: 1000px; position: relative; left: 100px; height: 300px;">
			<div class="card-body">
                @foreach ($kandidat as $c )
{{-- {{ dd($kandidat) }} --}}
                <form method="post" action="{{ url('kandidat/'. $c->apply_jobs->id .'/sendEmail') }}" enctype="multipart/form-data">
                       @csrf


                       		<div class="form-group">
								<div class="container px-4">
                                    <input type="text" value="{{$c->apply_jobs->id  }}">
                                    <input type="text" name="judul" placeholder="Isi Subjek Judul" id="judul">
									<div class="row gx-5">
									  <div class="col-sm-6">
										   <label for="corp" style="padding-bottom: 10px;"><strong>Nama</strong> </label>
										   <input id="name" type="text" class="form-control" name="name" placeholder="Nama Kandidat" value="{{ $c->apply_jobs->user->name }}">
										</div>

									  <div class="col-sm-6">
                                            <label for="email" style="padding-bottom: 10px;"><strong>Email Kandidat</strong> </label>
                                            <input id="email" type="email" class="form-control" name="email" placeholder="Email Kandidat" value="{{ $c->apply_jobs->user->email }}">
                                        </div>
									    </div>
                                    </div>
								  </div>


						<div class="form-group">
							<div class="container px-4">
								<div class="row gx-5">
								  <div class="col-sm-6">
									   <label for="education" style="padding-bottom: 10px;padding-top: 10px;"><strong>Tanggal Wawancara</strong> </label>
									   <input type="date" id="wawancara" class="form-control" name="wawancara" value="{{ $c->wawancara }}">
									</div>

                                    <div class="col-sm-6">
                                        <label for="corp" style="padding-bottom: 10px;padding-top: 10px;"><strong>Nama Perusahaan</strong> </label>
                                        <input id="nama_corp" type="text" class="form-control" name="nama_corp" placeholder="Nama Kandidat" value="{{ $c->apply_jobs->corp->nama_corp }}">
                                     </div>

							  </div>
							</div>
						</div>

                        <br>

                    <br>
                    <div class="form-group">
                        <div class="container px-4">
                            <div class="row gx-5">
                                <div class="col-sm-6">
                                    <a href="/user" style="margin-left: 10px ;" class="btn btn-outline-primary"><span>Batalkan</span></a>
                                    <button type="submit" style="margin-left: 10px;" class="btn btn-primary"><span style="padding: 5px;">Kirim Wawancara</span>
                                </div>
                            </div>
                        </div>
                    </div>
					</form>
                    @endforeach

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
