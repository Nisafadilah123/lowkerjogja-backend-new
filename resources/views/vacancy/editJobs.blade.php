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
                                    {{-- <input type="text" value="{{ $c->id }}"> --}}
									<div class="row gx-5">
									  <div class="col-sm-6">
										   <label for="corp" style="padding-bottom: 10px;"><strong>Nama Perusahaan</strong> </label>
										   <input id="corp" type="text" class="form-control" name="nama_corp" placeholder="Nama Perusahaan Anda" value="{{$c->corp->nama_corp}}">
										</div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                            <label for="lasteducation"><strong>Pendidikan Terakhir</strong></label>
                                            <select class="form-control" id="last_education" name="last_education">
                                                @if ($c->last_education==null)
                                                    <option value="">-- Pilih Pendidikan Terakhir --</option>
                                                    <option value="SMA/SMK">SMA/SMK</option>
                                                    <option value="D3">D3</option>
                                                    <option value="S1/D4">S1/D4</option>
                                                    <option value="S2">S2</option>
                                                @else
                                                    <option selected value="{{ $c->last_education }}" >{{ $c->last_education }}</option>
                                                    <option value="SMA/SMK" @if($c->level == 'SMA/SMK')@endif>SMA/SMK</option>
                                                    <option value="D3" @if($c->level == 'D3')@endif>D3</option>
                                                    <option value="S1/D4" @if($c->level == 'S1/D4')@endif>S1/D4</option>
                                                    <option value="S2" @if($c->level == 'S2')@endif>S2</option>
                                                    <option value="S3" @if($c->level == 'S3')@endif>S3</option>

                                                @endif

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
                                        <div class="form-group">
                                            <label for="deadline" style="padding-bottom: 10px;padding-top: 10px;"><strong>Deadline</strong></label>
                                            <br>
                                            <input type="date" name="deadline" id="deadline" placeholder="Deadline" required class="datepicker" data-date-format="mm/dd/yyyy" value="{{$c->deadline}}" >
                                        </div>
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
                                    <label for="education" style="padding-bottom: 10px;padding-top: 10px;"><strong>Tipe Pekerjaan</strong> </label>
                                    {{-- <input id="job_type_id" type="text" class="form-control" name="job_type_id" placeholder="" value="{{ $job_types->id }}">{{ $job_types->tipe_pekerjaan }}> --}}
                                    <select id="job_type_id" name="job_type_id" class="form-select form-select-sm job_type" aria-label=".form-select-sm example" style="position: relative; width: 435px;">
                                        @if ($c->job_type_id == null)
                                                <option selected>-- Pilih Tipe Pekerjaan --</option>
                                                @foreach ($job_types as $job_type)
                                                <option value="{{ $job_type->id }}">{{ $job_type->tipe_pekerjaan }}</option>
                                                @endforeach

                                        @else

                                            {{-- <option selected value="{{ $c->job_type_id }}">{{ $c->job_type_id }}</option> --}}
                                            @foreach ($job_types as $job_type)
                                                @if($job_type->id == $c->job_type_id)
                                                    <option selected value="{{ $job_type->id }}">{{ $job_type->tipe_pekerjaan }}</option>
                                                @else
                                                    <option value="{{ $job_type->id }}">{{ $job_type->tipe_pekerjaan }}</option>
                                                @endif


                                            @endforeach
                                        @endif
                                    </select>
                                  </div>

                                  <div class="col-sm-6">
                                    <label for="education" style="padding-bottom: 10px;padding-top: 10px; position: relative;"><strong>Kategori Pekerjaan</strong> </label>
                                    <select name="job_cat_id" class="form-select form-select-sm job_category" aria-label=".form-select-sm example" style="padding-bottom: 10px;padding-top: 10px; position: relative;">
                                      {{-- <option selected>-- Pilih Kategori Pekerjaan --</option> --}}
                                      @if($job_type->id == $c->job_type_id)
                                                    <option selected value="{{ $job_type->id }}">{{ $job_type->tipe_pekerjaan }}</option>
                                                @else
                                                    <option value="{{ $job_type->id }}">{{ $job_type->tipe_pekerjaan }}</option>
                                                @endif

                                   </select>
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
                                            @if ($c->gender==null)
                                                <option value="0">-- Pilih Jenis Kelamin --</option>
                                                <option value="Pria">Pria</option>
                                                <option value="Wanita">Wanita</option>
                                                <option value="Pria/Wanita">Pria/Wanita</option>

                                            @else
                                                    <option selected value="{{ $c->gender }}" >{{ $c->gender }}</option>
                                                    <option value="Pria" @if($c->gender == 'Pria')@endif>Pria</option>
                                                    <option value="Wanita" @if($c->gender == 'Wanita')@endif>Wanita</option>
                                                    <option value="Pria/Wanita" @if($c->gender == 'Pria/Wanita')@endif>Pria/Wanita</option>
                                            @endif

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

    $(document).on("change",".job_type",function(){
        var job_type_selected = $(".job_type option:selected").val();
        console.log("pilih job_type",job_type_selected)
        $.ajax({
            "url":"/get-job-category",
            "data":{job_type_selected:job_type_selected},
            "type":"GET",
            success:function(hasil_result){
                console.log("job_category",hasil_result)
                var option_job_category="<option>-- Pilih Kategori Pekerjaan --</option>";
                hasil_result.forEach(element => {
                    option_job_category+=`<option value="${element.id}">${element.kategori_pekerjaan}</option>`;
                });
                $(".job_category").html(option_job_category);
            }
        });
    });

    </script>


@endpush
