@extends('vacancy.layout2')

@section('title', 'Form Unggahan | Lowkerjogja.com')

@section('container')

<!-- ======= Form Unggahan Section ======= -->
<section>
    <div class="container-fluid" style="position: relative;right: 200px;">
      <div class="row justify-content-center">
        <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
          <div class="card px-0 pt-4 pb-0 mt-3 mb-3" style="width: 1000px;">
            <h2 id="heading">Post vacancies and find the best candidates</h2>
            <form id="msform" action="{{ url('/formUnggahan') }}" method="POST" >
              @csrf
              <!-- progressbar -->
                    <ul id="progressbar" style="width: 1000px; margin-left: 100px;">
                      <li class="active" id="account"><strong>Post vacancy</strong></li>
                      <li id="personal"><strong>Insert Desc Jobs</strong></li>
                      <li id="payment"><strong>Finish</strong></li>
                    </ul>
                    <div class="progress">
                      <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br>
              <!-- fieldsets -->
              <fieldset>
                <div class="form-card">
                  <div class="container px-4">
                      <div class="row gx-5">
                        <div class="col">
                          <label for="job" style="padding-bottom: 10px;"><strong>Job Position</strong> </label>
                          <input id="job_position" type="text" class="form-control" name="job_position" placeholder="Position">
                        </div>
                        <div class="col">
                          <label for="job" style="padding-bottom: 10px;"><strong>Kuota</strong> </label>
                          <input id="kuota" type="text" class="form-control" name="kuota" placeholder="Kuota">
                        </div>
                      </div>
                  </div>
                  <!---Pembatas--->
                  <div class="container px-4">
                    <div class="row gx-5">
                      <div class="col">
                        <label for="education" style="padding-bottom: 10px;padding-top: 10px;"><strong>Last Education</strong> </label>
                        <select name="education" class="form-select form-select-sm" aria-label=".form-select-sm example" style="position: relative; width: 435px;">
                           <option selected>Select Last Education</option>
                           <option value="1">SMA / SMK</option>
                           <option value="2">D3</option>
                           <option value="3">D4 /S1</option>
                           <option value="3">S2</option>
                           <option value="3">S3</option>
                        </select>
                      </div>
                      <div class="col">
                         <label for="education" style="padding-bottom: 10px;padding-top: 10px;"><strong>Job Type</strong> </label>
                         <select name="job_type" class="form-select form-select-sm" aria-label=".form-select-sm example" style="position: relative; width: 435px;">
                           <option selected>Select Job Type</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                         </select>
                       </div>
                      </div>
                      </div>
                      <!--Pembatas-->
                  <div class="container px-4">
                    <div class="row gx-4">
                      <div class="coldeadline">
                        <label for="date" style="padding-bottom: 10px;padding-top: 10px;"><strong>Deadline for submitting application</strong> </label>
                        <input id="deadline" type="date" class="form-control" name="deadline" placeholder="Deadline" style="width: 400px;">
                      </div>
                      <div class="col">
                        <label for="education" style="padding-bottom: 10px;padding-top: 10px; position: relative; left: 500px;bottom: 110px;"><strong>Job Category</strong> </label>
                        <select name="job_category" class="form-select form-select-sm" aria-label=".form-select-sm example" style="padding-bottom: 10px;padding-top: 10px; position: relative; left: 500px;bottom: 110px;width: 450px;">
                          <option selected>Select Job Category</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                       </select>
                      </div>
                     </div>
                    </div>
                      <!--Pembatas-->
                  <div class="container px-4">
                    <div class="row gx-5">
                      <div class="col">
                        <label for="salary"style="padding-bottom: 10px;padding-top: 10px; position: relative; left: 2px;bottom: 110px;"><strong>Salary Range</strong></label>
                          <div class="input-group mb-3">
                            <input type="number" name="gaji_awal" class="form-control" placeholder="Rp xxx.xxx.xxx" aria-label="salary" aria-describedby="basic-addon1" style="padding-bottom: 10px;padding-top: 10px; position: relative; left: 2px;bottom: 110px;">
                            <input type="number" name="gaji_akhir" class="form-control" placeholder="Rp xxx.xxx.xxx" aria-label="salary" aria-describedby="basic-addon1" style="padding-bottom: 10px;padding-top: 10px; position: relative; left: 2px;bottom: 110px;">
                          </div>
                        </div>
                        <div class="col">
                          <label for="location" style="padding-bottom: 10px;padding-top: 10px; position: relative; left: 2px;bottom: 110px;"><strong>Job Location</strong> </label>
                          <div class="form-group" style="padding-bottom: 5px;padding-top: 5px; position: relative; left: 2px;bottom: 110px;">
                            <label name="provinces" for="provinces" style=""><strong>Provinces</strong></label>
                                  <select name="provinces" class="form-select form-select-sm prov-data" aria-label=".form-select-sm example" style="position: relative; width: 250px;height:25px">
                                      <option selected>-- Pilih Provinsi   --</option>
                                  </select>
                          </div>
                          <div class="form-group" style="padding-bottom: 5px;padding-top: 5px; position: relative; left: 2px;bottom: 110px;">
                            <label name="city" for="city"><strong>City</strong></label>
                            <select name="city" class="form-select form-select-sm kota-data" aria-label=".form-select-sm example" style="position: relative; width: 250px;height:25px">
                                <option selected>-- Pilih Kota --</option>
                              </select>
                            </div>
                          <div class="form-group" style="padding-bottom: 5px;padding-top: 5px; position: relative; left: 2px;bottom: 110px;">
                            <label for="location" style="padding-bottom: 10px;"><strong>Location</strong> </label>
                            <input id="job_location" type="text" class="form-control" name="job_location" placeholder="Location">
                          </div>
                        </div>
                        </div>
                      </div>
                      <!--Pembatas-->
                      <div class="container px-4">
                        <div class="row gx-5">
                          <div class="col">
                            <label for="gender" style="padding-bottom: 10px;padding-top: 10px; position: relative; left: 2px;bottom: 150px;"><strong>Gender</strong> </label>
                            <select name="gender" class="form-select form-select-sm" aria-label=".form-select-sm example" style="padding-bottom: 10px;padding-top: 10px; position: relative; left: 5px;bottom: 145px;width: 250px;">
                              <option selected>Select Gender</option>
                              <option value="1">Male</option>
                              <option value="2">Female</option>
                              <option value="3">All Gender</option>
                            </select>
                          </div>
                          <div class="col">
                            <label for="age" style="padding-bottom: 10px;padding-top: 10px; position: relative; left:2px;bottom: 150px"><strong>Age</strong> </label>
                            <input id="age" type="text" class="form-control" name="age" placeholder="Age" style="padding-bottom: 10px;padding-top: 10px; position: relative; left: 5px;bottom: 145px;width: 100px;">
                          </div>
                        </div>
                      </div>
                      <!--Pembatas-->
                      <div class="container px-4">
                        <div class="row gx-5">
                          <div class="col">
                            <label for="syarat" style="padding-bottom: 10px;padding-top: 10px; position: relative; left: 2px;bottom: 150px;"><strong>Requirement</strong> </label>
                            <input id="syarat" type="text" class="form-control" name="syarat" placeholder="Enter Company Requirement" style="padding-bottom: 10px;padding-top: 10px; position: relative; left: 5px;bottom: 145px;width: 350px;">
                          </div>
                          <div class="col">
                            <div class="form-group" style="padding-bottom: 10px;padding-top: 10px; position: relative; left: 2px;bottom: 150px;">
                              <label for="email" style="padding-bottom: 10px;"><strong>Email</strong> </label>
                              <input id="email" type="text" class="form-control" name="email" placeholder="Email" style="padding-bottom: 10px;padding-top: 10px;">
                            </div>
                            <div class="form-group" style="padding-bottom: 10px;padding-top: 10px; position: relative; left: 2px;bottom: 170px;">
                              <label for="telepon" style="padding-bottom: 10px;"><strong>Contact</strong> </label>
                              <input id="telepon" type="text" class="form-control" name="telepon" placeholder="Enter Contact Company" style="padding-bottom: 10px;padding-top: 10px;">
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                <input type="button" name="next" class="next action-button" value="Next" />
              </fieldset>
              <!-- fieldsets -->
              <fieldset>
                <div class="form-card">
                    <div class="font-weight-bold head pb-1">Description</div> <textarea name="des" id="desc" cols="50" rows="5" placeholder="Description"></textarea>
                </div> <input type="submit" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
              </fieldset>
              <!-- fieldsets -->
              <fieldset>
                <div class="form-card">
                  <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                  <div class="row justify-content-center">
                    <div class="col-5"> <img src="img/check.jpg" class="fit-image"> </div>
                  </div> <br><br>
                  <div class="row justify-content-center">
                    <div class="col-10 text-center">
                      <h5 class="purple-text text-center">Jobs Posted</h5>
                      <a href="index.html" class="btn btn-primary" style="width: 350px;" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        View Job Posts
                        </a>
                    </div>
                  </div>
                </div>
              </fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>
    </section>

<!-- End Form Unggahan Section -->

@endsection

@push('script-addon')
<script>
    $.ajax({
        "url":"/get-provinsi",
        "type":"GET",
        success:function(hasil_result){
            console.log("prov",hasil_result)
            var option_prov="<option>-- Pilih Provinsi --</option>";
            hasil_result.forEach(element => {
                option_prov+=`<option value="${element.province_id}">${element.province}</option>`;
            });
            $(".prov-data").html(option_prov);
        }
    });

    $(document).on("change",".prov-data",function(){
        var prov_sel = $(".prov-data option:selected").val();
        console.log("pilih prov",prov_sel)
        $.ajax({
            "url":"/get-kota",
            "data":{prov_id:prov_sel},
            "type":"GET",
            success:function(hasil_result){
                console.log("kota",hasil_result)
                var option_prov="<option>-- Pilih Kota --</option>";
                hasil_result.forEach(element => {
                    option_prov+=`<option value="${element.city_id}">${element.city_name}</option>`;
                });
                $(".kota-data").html(option_prov);
            }
        });
    });

</script>
@endpush
