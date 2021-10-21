@extends('vacancy.layout2')

@section('title', 'Edit Perusahaan | Lowkerjogja.com')

@section('container')

<div class="container" style="position: relative; top: 100px; height: 800px;">
	<div class="col-sm-6">
		<div class="card" style="width: 1000px; position: relative; left: 100px; height: 500px;">
			<div class="card-body">
					<form method="POST" class="my-login-validation" novalidate="">
							<div class="form-group">
								<div class="container px-4">
									<div class="row gx-5">
									  <div class="col-sm-6">

										   <label for="corp" style="padding-bottom: 10px;"><strong>Nama Perusahaan</strong> </label>
										   <input id="corp" type="text" class="form-control" name="corp" placeholder="Nama Perusahaan Anda">
										</div>
									  <div class="col-sm-6">
										<label for="job" style="padding-bottom: 10px;"><strong>Email Perusahaan</strong> </label>
										<input id="email" type="email" class="form-control" name="email" placeholder="Bukalapak">                                          </div>
									</div>
								  </div>
							</div>

						<div class="form-group">
							<div class="container px-4">
								<div class="row gx-5">
								  <div class="col-sm-6">

									   <label for="education" style="padding-bottom: 10px;padding-top: 10px;"><strong>Industri</strong> </label>
									   <input type="text" id="industri" class="form-control" name="industri" placeholder="Silahkan isi industri perusahaan anda">
									</div>

								  <div class="col-sm-6">
									<label for="work_day" style="padding-bottom: 10px;padding-top: 10px;"><strong>Hari Kerja</strong></label>
									<input type="text" class="form-control" id="work_day" name="work_day" placeholder="Silahkan isi data hari kerja perusahaan anda">
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
                                    <label for="founded_year"><strong>Tahun Berdiri Perusahaan</strong></label>
                                    <input type="date" name="graduate" class="form-control" id="datepicker">
                                </div>
                                <div class="col-sm-6">
                                    <label for="location"><strong>Alamat Perusahaan</strong></label>
                                    <input type="text" class="form-control" id="location" name="location" placeholder="Silahkan isi alamat perusahaan anda">
                                </div>
                            </div>

				        </div>
                    </div>

                    <br>
                    <div class="form-group">
					    <div class="container px-4">
                            <div class="row gx-5">
                                <div class="col-sm-6">
                                    <label for="description"><strong>Deskripsi Perusahaan</strong></label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" cols="3"></textarea>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1"><strong>Logo Perusahaan</strong> </label>
                                        <input name="profile_photo_path" type="file" class="form-control-file" id="profile_photo_path">
                                        {{-- <img src="{{asset('profile_photos/'. Auth::user()->profile_photo_path)     }}" class="img-thumbnail" width="100px"> --}}
                                        {{-- <input name="profile_photo_path" type="hidden" name="hidden_image" value="{{asset('profile_photos/'. Auth::user()->profile_photo_path)     }}" class="form-control-file" id="hidden_image"> --}}
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <br>
                    <div class="form-group">
                        <div class="container px-4">
                            <div class="row gx-5">
                                <div class="col-sm-6">
                                    <a href="/user" style="margin-left: 350px ;" class="btn btn-outline-primary"><span>Batalkan</span></a>
                                    <button type="submit" style="margin-left: 10px;" class="btn btn-primary"><span style="padding: 5px;">Simpan</span>
                                </div>
                            </div>
                        </div>
                    </div>

					</form>
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
