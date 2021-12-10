@extends('vacancy.layout2')

@section('title', 'Edit Perusahaan | Lowkerjogja.com')

@section('container')

<div class="container" style="position: relative; top: 100px; height: 800px;">
	<div class="col-sm-6">
		<div class="card" style="width: 1000px; position: relative; left: 100px; height: 600px;">
			<div class="card-body">
                @foreach ($corps as $c )

                <form method="post" action="/perusahaan/{{ ($c->id) }}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf


                    <div class="form-group">
								<div class="container px-4">
                                    {{-- <input type="text" value="{{ $c->id }}"> --}}
									<div class="row gx-5">
									<div class="col-sm-6">
										<label for="corp" style="padding-bottom: 10px;"><strong>Nama Perusahaan</strong> </label>
										<input id="corp" type="text" class="form-control" name="nama_corp" placeholder="Nama Perusahaan Anda" value="{{$c->nama_corp}}" required>
										</div>

                                        <div class="col-sm-6">

                                            <label for="education" style="padding-bottom: 10px;"><strong>Industri</strong> </label>
                                            <input type="text" id="industri" class="form-control" name="industri" placeholder="Silahkan isi industri perusahaan anda" value="{{$c->industri}}" required>
                                            </div>
                                    </div>
								</div>
							</div>

						<div class="form-group">
							<div class="container px-4">
								<div class="row gx-5">
                                    <div class="col-sm-6">
                                        <label for="founded_year" style="padding-bottom: 10px;padding-top: 10px;"><strong>Tahun Berdiri Perusahaan</strong></label>
                                        <input type="number" name="founded_year" class="form-control" value="{{$c->founded_year}}" placeholder="Silahkan Isi Data Tahun Berdiri Perusahaan Anda" required>
                                    </div>
                                    <div class="col-sm-6">
									<label for="work_day" style="padding-bottom: 10px;padding-top: 10px;"><strong>Hari Kerja</strong></label>
									<input type="text" class="form-control" id="work_day" name="work_day" placeholder="Silahkan isi data hari kerja perusahaan anda" value="{{$c->work_day}}" required>
									</div>
							</div>
							</div>
						</div>

                        <br>
					<!-- datepicker -->
                    <div class="form-group">
					    <div class="container px-4">
                            <div class="row gx-5">

                                <div class="col-sm-6">
                                    <label for="location"><strong>Alamat Perusahaan</strong></label>
                                    <input type="text" class="form-control" id="location" name="location" placeholder="Silahkan isi alamat perusahaan anda" value="{{$c->location}}" required>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1"><strong>Logo Perusahaan</strong> </label>
                                        <input name="logo" type="file" class="form-control-file" id="profile_photo_path" accept=".img, .jpg, .jpeg, .png">
                                        <img src="{{asset('logo/'. $c->logo)}}" class="img-thumbnail" width="100px">
                                        <input name="logo" type="hidden" name="hidden_image" value="{{asset('logo/'. $c->logo)}}" class="form-control-file" id="hidden_image">
                                    </div>
                                </div>
                            </div>

				        </div>
                    </div>

                    <br>
                    <div class="form-group">
					    <div class="container px-4">
                            <div class="row gx-5">
                                <div class="col-sm-12">
                                    <label for="description"><strong>Deskripsi Perusahaan</strong></label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" cols="3" name="description" placeholder="Isi Deskripsi Perusahaan Anda" required>{{$c->description}}</textarea>
                                </div>


                            </div>

                        </div>
                    </div>

                    <br>
                    <div class="form-group">
                        <div class="container px-4">
                            <div class="row gx-5">
                                <div class="col-sm-6">
                                    <a href="/perusahaan" style="margin-left: 10px ;" class="btn btn-outline-primary"><span>Batalkan</span></a>
                                    <button type="submit" style="margin-left: 10px;" class="btn btn-primary"><span style="padding: 5px;">Simpan</span>
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
