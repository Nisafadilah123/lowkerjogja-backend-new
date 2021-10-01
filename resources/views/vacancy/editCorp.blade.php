@extends('layouts.layout3')

@section('title', 'Edit Perusahaan | Lowkerjogja.com')

@section('container')

<div class="container" style="position: relative; top: 100px; height: 870px;">
	<div class="col-sm-6">
		<div class="card" style="width: 1000px; position: relative; left: 100px; height: 400px;">
			<div class="card-body">
					<form method="POST" class="my-login-validation" novalidate="">
							<div class="form-group">
								<div class="container px-4">
									<div class="row gx-5">
									  <div class="col">

										   <label for="job" style="padding-bottom: 10px;"><strong>Posisi Kerja</strong> </label>
										   <input id="job" type="job" class="form-control" name="job" placeholder="Job Position">
										</div>
									  <div class="col">
										<label for="job" style="padding-bottom: 10px;"><strong>Perusahaan</strong> </label>
										<input id="corporate" type="corporate" class="form-control" name="corporate" placeholder="Bukalapak">                                          </div>
									</div>
								  </div>
							</div>

						<div class="form-group">
							<div class="container px-4">
								<div class="row gx-4">
								  <div class="col">

									   <label for="education" style="padding-bottom: 10px;padding-top: 10px;"><strong>Pendidikan Terakhir</strong> </label>
									   <select class="form-select form-select-sm" aria-label=".form-select-sm example" style="position: relative; width: 435px;">
										<option selected>Pilih Pendidikan Terakhir</option>
										<option value="1">SMA</option>
										<option value="2">D3</option>
										<option value="3">D4/S1</option>
									  </select>
									</div>

								  <div class="col">
									<label for="jobtype" style="padding-bottom: 10px;padding-top: 10px; padding-left: 15px;"><strong>Tipe Pekerjaan</strong></label>
									<select class="form-select form-select-sm" aria-label=".form-select-sm example" style="position: relative; left:13px;width: 435px;">
										<option selected>Pilih Tipe Pekerjaan</option>
										<option value="1">One</option>
										<option value="2">Two</option>
										<option value="3">Three</option>
									  </select>
									</div>
							  </div>
							</div>
						</div>

					<!-- datepicker -->
					<div class="form-group">
						<div class="container px-4">
							<div class="row gx-4">
							  <div class="coldeadline">
								   <label for="job" style="padding-bottom: 10px;padding-top: 10px;"><strong>Batas waktu untuk mengajukan lamaran</strong> </label>
								   <input id="password" type="password" class="form-control" name="password" placeholder="	Select date" style="width: 300px;">
									<i class="fas fa-calendar-week"></i>
								</div>

							  <div class="col">
								<label for="job" style="padding-bottom: 10px;padding-top: 10px;position: relative;left: 484px;bottom: 80px;"><strong>Kategori Pekerjaan</strong> </label>
								<select class="form-select form-select-sm" aria-label=".form-select-sm example" style="width: 435px;position: relative;left: 484px;bottom: 80px;">
									<option selected>Pilih Kategori Pekerjaan</option>
									<option value="1">One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
								  </select>
								</div>
						  </div>
					</div>
				</div>

				<div class="form-group">
					<div class="container">
						<div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
						  <div class="col"style="position: relative;left: 14px;bottom: 63px;">
							  <label for="salary" ><strong>Salary Range</strong> </label>
							<div class="input-group mb-3">
								<span class="input-group-text" id="basic-addon1">Rp</span>
								<input type="text" class="form-control" placeholder="xxxxxxxx" aria-label="salary" aria-describedby="basic-addon1">
								<i class="fas fa-minus" style="position: relative; left: 9px;top: 10px;"></i>
							  </div>
						  </div>
						  <div class="col">
							<div class="input-group mb-3" style="position: relative; bottom: 40px; left: 16px;">
								<span class="input-group-text" id="basic-addon1">Rp</span>
								<input type="text" class="form-control" placeholder="xxxxxxxx" aria-label="salary" aria-describedby="basic-addon1">
							  </div>
							</div>

							<div class="col">
								<label for="job" style="padding-bottom: 10px;padding-top: 10px;position: relative;left: 115px;bottom: 80px;"><strong>Jobs Location</strong> </label>
								<select class="form-select form-select-sm" aria-label=".form-select-sm example" style="width: 435px;position: relative;left: 112px;bottom: 80px;">
									<option selected>Select Location</option>
									<option value="1">One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
								  </select>
							</div>
					  </div>
				</div>

				<div class="form-check" style="padding-bottom: 10px;padding-top: 10px;position: relative;left: 20px;bottom: 50px;">
					<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
					<label class="form-check-label" for="flexCheckDefault">
						Hidden salary
					</label>
				  </div>

					</form>
			</div>
		</div>
	</div>
</div>


	<div class="col-sm-12" style="padding-left: 100px; width: 1150px; padding-top: 50px;padding-right: 50px;">
	  <div class="card">
		<div class="card-body">
		  <h5 class="card-title"><strong>Desc Jobs</strong></h5>
		  <div class="container">
			<div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
				<!-- bold -->
				<div class="card" style="width: 30px;height: 30px;position: relative;left: 5px;box-shadow: 2px 2px 2px rgba(0,0,0,0);">
					<div class="card-body">
						<div class="col">
							<i class="fas fa-bold" style="position: relative;bottom: 12px;right: 15px;"></i>
						</div>
					</div>
				</div>

				<!-- italic -->
				<div class="col-sm-2">
					<div class="card" style="width: 30px;height: 30px;position: relative;left: 5px;box-shadow: 2px 2px 2px rgba(0,0,0,0);">
						<div class="card-body">
							<div class="col">
								<i class="fas fa-italic" style="position: relative;bottom: 12px;right: 7px;"></i>
							</div>
						</div>
					</div>
				</div>

				<!-- underline -->
				<div class="col-sm-2">
					<div class="card" style="width: 30px;height: 30px;position: relative;right: 150px;box-shadow: 2px 2px 2px rgba(0,0,0,0);">
						<div class="card-body">
							<div class="col">
								<i class="fas fa-underline" style="position: relative;bottom: 12px;right: 8px;"></i>
							</div>
						</div>
					</div>
				</div>

				<!-- list -->
				<div class="col-sm-2">
					<div class="card" style="width: 30px;height: 30px;position: relative;right: 300px;box-shadow: 2px 2px 2px rgba(0,0,0,0);">
						<div class="card-body">
							<div class="col">
								<i class="fas fa-list" style="position: relative;bottom: 12px;right: 8px;"></i>
							</div>
						</div>
					</div>
				</div>

			</div>
		  </div>
		  <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Tulis deskripsi pekerjaan, syarat dan ketentuan ..." style="position: relative; top: 10px;"></textarea>

		</div>
	  </div>
	</div>
  </div>

  <div class="container px-4" style="position: relative; top: 30px;">
	<div class="row gx-5">
	  <div class="col">
		<button type="button" class="btn btn-outline-primary" style="width: 100px;border-radius: 10px; position: relative;left:800px;top: 2px;">Cancel</button>
		</div>
	  <div class="col">
		<button type="button" class="btn btn-primary btn-lg" style="width: 100px;border-radius: 10px;position: relative;left:350px;height: 38px;top: 2px;text-align: center;font-weight: 100px;">
		<p style="position: relative; bottom: 5px;">Save</p>
		</button>
		</div>
	</div>
  </div>

  @endsection
