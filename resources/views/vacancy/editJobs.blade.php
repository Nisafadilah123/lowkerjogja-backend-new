@extends('vacancy.layout2')

@section('title', 'Edit Lowongan Pekerjaan | Lowkerjogja.com')

@section('container')

<div class="container" style="position: relative; top: 100px; height: 1150px;">
	<div class="col-sm-6">
		<div class="card" style="width: 1000px; position: relative; left: 100px; height: 1100px;">
			<div class="card-body">
                @foreach ($jobs as $c )

                <form method="post" action="/karir/{{ ($c->id) }}" enctype="multipart/form-data">
                    @method('PUT')
                       @csrf


                       		<div class="form-group">
								<div class="container px-4">
                                    <input type="text" value="{{ $c->id }}">
									<div class="row gx-5">
									  <div class="col-sm-6">
										   <label for="corp" style="padding-bottom: 10px;"><strong>Nama Perusahaan</strong> </label>
										   <input id="corp" type="text" class="form-control" name="nama_corp" placeholder="Nama Perusahaan Anda" value="{{$c->corp->nama_corp}}">
										</div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                            <label for="lasteducation"><strong>Pendidikan Terakhir</strong></label>
                                            <select class="form-control" id="last_education" name="last_education">{{$c->last_education}}
                                                <option value="0">-- Pilih Pendidikan Terakhir --</option>
                                                <option value="SMA/SMK">SMA/SMK</option>
                                                <option value="D3">D3</option>
                                                <option value="S1/D4">S1/D4</option>
                                                <option value="S2">S2</option>
                                            </select>
                                        </div>
                                        </div>

                                    </div>
								  </div>
							</div>

						<div class="form-group">
							<div class="container px-4">
								<div class="row gx-5">
								  <div class="col-sm-6">

									   <label for="position" style="padding-bottom: 10px;padding-top: 10px;"><strong>Posisi</strong> </label>
									   <input type="text" id="position" class="form-control" name="position" placeholder="Silahkan isi posisi perusahaan anda" value="{{$c->position}}">
									</div>

                                    <div class="col-sm-6">

                                        <label for="job_type" style="padding-bottom: 10px;padding-top: 10px;"><strong>Tipe Pekerjaan</strong> </label>
                                        <input type="text" id="job_type" class="form-control" name="job_type" placeholder="Silahkan isi Tipe Pekerjaan perusahaan anda" value="{{$c->job_type}}">
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
                                    <label for="job_category"><strong>Kategori Pekerjaan</strong></label>
                                    <input type="text" name="job_category" class="form-control" value="{{$c->job_category}}" placeholder="Silahkan Isi Kategori Pekerjaan Perusahaan Anda">
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="deadline"><strong>Deadline</strong></label>
                                        <br>
                                        <input type="date" name="deadline" id="deadline" placeholder="Deadline" required class="datepicker" data-date-format="mm/dd/yyyy" value="{{$c->deadline}}" >
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
                                    <strong><label name="provinces" for="provinsi">Provinsi</label></strong>
                                    <select name="provinces" class="form-select form-select-sm prov-data" aria-label="Default select example">
                                        <option selected>-- Pilih Provinsi --</option>
                                    </select>
                                </div>


                        <div class="col-sm-6">
                            <strong><label name="city" for="kota">Kota</label></strong>
                        <select name="city" class="form-select form-select-sm kota-data" aria-label="form-select-sm example">
                            <option selected>-- Pilih Kota --</option>
                        </select>
                        </div>
                    </div>
                    </div>

                    <br>
                    <div class="form-group">
					    <div class="container px-4">
                            <div class="row gx-5">
                                <div class="form-group">
                                    <label for="starting_salary"><strong>Range Gaji</strong></label>
                                    <div class="row">
                                         <div class="col-sm-6">
                                        <input type="text" name="starting_salary" id="starting_salary" class="form-control" placeholder="Range Gaji" value="{{$c->starting_salary}}">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="final_salary" id="final_salary" class="form-control" placeholder="Range Gaji" value="{{$c->final_salary}}">
                                    </div>
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
                                    <label for="job_category"><strong>Kuota Pekerjaan</strong></label>
                                    <input type="number" name="kuota" class="form-control" value="{{$c->kuota}}" placeholder="Silahkan Isi Kategori Pekerjaan Perusahaan Anda">
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lasteducation"><strong>Jenis Kelamin</strong></label>
                                        <select class="form-control" id="gender" name="gender">
                                            <option value="0">-- Pilih Jenis Kelamin --</option>
                                            <option value="Pria">Pria</option>
                                            <option value="Wanita">Wanita</option>
                                            <option value="Pria/Wanita">Pria/Wanita</option>
                                        </select>
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

                                   <label for="age" style="padding-bottom: 10px;padding-top: 10px;"><strong>Umur</strong> </label>
                                   <input type="text" id="age" class="form-control" name="age" placeholder="Silahkan Min. Umur Pekerjaan perusahaan anda" value="{{$c->age}}">
                                </div>

                                <div class="col-sm-6">

                                    <label for="location" style="padding-bottom: 10px;padding-top: 10px;"><strong>Lokasi</strong> </label>
                                    <input type="text" id="location" class="form-control" name="location" placeholder="Silahkan Isi Lokasi Pekerjaan perusahaan anda" value="{{$c->location}}">
                                 </div>

                          </div>
                        </div>
                    </div>
                    <br>

                    <div class="form-group">
                        <div class="container px-4">
                            <div class="row gx-5">
                              <div class="col-sm-6">

                                   <label for="email" style="padding-bottom: 10px;padding-top: 10px;"><strong>Email</strong> </label>
                                   <input type="email" id="email" class="form-control" name="email" placeholder="Silahkan Email perusahaan anda" value="{{$c->email}}">
                                </div>

                                <div class="col-sm-6">

                                    <label for="location" style="padding-bottom: 10px;padding-top: 10px;"><strong>Telpone</strong> </label>
                                    <input type="text" id="telp" class="form-control" name="telp" placeholder="Silahkan Isi Telpon perusahaan anda" value="{{$c->telp}}">
                                 </div>

                          </div>
                        </div>
                    </div>
                    <br>

                    <div class="form-group">
					    <div class="container px-4">
                            <div class="row gx-5">
                                <div class="col-sm-12">
                                    <label for="description"><strong>Deskripsi Pekerjaan</strong></label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" cols="3" name="description_job" placeholder="Isi Deskripsi Perusahaan Anda">{{$c->description_job}}</textarea>
                                </div>

                            </div>

                        </div>
                    </div>

                    <br>

                    <div class="form-group">
					    <div class="container px-4">
                            <div class="row gx-5">
                                <div class="col-sm-12">
                                    <label for="description"><strong>Syarat Pekerjaan</strong></label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" cols="3" name="syarat" placeholder="Isi Deskripsi Syarat Pekerjaan Perusahaan Anda">{{$c->syarat}}</textarea>
                                </div>

                            </div>

                        </div>
                    </div>

                    <br>
                    <div class="form-group">
                        <div class="container px-4">
                            <div class="row gx-5">
                                <div class="col-sm-6">
                                    <a href="/user" style="margin-left: 10px ;" class="btn btn-outline-primary"><span>Batalkan</span></a>
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
