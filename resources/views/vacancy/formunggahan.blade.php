@extends('vacancy.layout')

@section('title', 'Form Unggahan | Lowkerjogja.com')

@section('container')

<!-- ======= Form Unggahan Section ======= -->
<section>
    <div class="container-fluid" style="position: relative;right: 200px;">
      <div class="row justify-content-center">
        <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
          <div class="card px-0 pt-4 pb-0 mt-3 mb-3" style="width: 1000px;">
            <h2 id="heading">Post vacancies and find the best candidates</h2>
            <form id="msform">
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
                          <input id="password" type="password" class="form-control" name="password" placeholder="Job Position">
                        </div>
                        <div class="col">
                          <label for="job" style="padding-bottom: 10px;"><strong>Corporate</strong> </label>
                          <input id="password" type="password" class="form-control" name="password" placeholder="Bukalapak">
                        </div>
                      </div>
                   </div>
                  <!---Pembatas--->
                  <div class="container px-4">
                    <div class="row gx-5">
                      <div class="col">
                        <label for="education" style="padding-bottom: 10px;padding-top: 10px;"><strong>Lost Education</strong> </label>
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example" style="position: relative; width: 435px;">
                           <option selected>Select Lost Education</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                        </select>
                      </div>
                      <div class="col">
                         <label for="education" style="padding-bottom: 10px;padding-top: 10px;"><strong>Lost Education</strong> </label>
                         <select class="form-select form-select-sm" aria-label=".form-select-sm example" style="position: relative; width: 435px;">
                           <option selected>Select Lost Education</option>
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
                        <label for="job" style="padding-bottom: 10px;padding-top: 10px;"><strong>Deadline for submitting application</strong> </label>
                        <input id="password" type="password" class="form-control" name="password" placeholder="	Select date" style="width: 400px;">
                        <i class="fas fa-calendar-week"></i>
                      </div>
                      <div class="col">
                        <label for="education" style="padding-bottom: 10px;padding-top: 10px; position: relative; left: 500px;bottom: 110px;"><strong>Lost Education</strong> </label>
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example" style="padding-bottom: 10px;padding-top: 10px; position: relative; left: 500px;bottom: 110px;width: 450px;">
                          <option selected>Select Lost Education</option>
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
                            <span class="input-group-text" id="basic-addon1" style="padding-bottom: 10px;padding-top: 10px; position: relative; left: 2px;bottom: 110px;">Rp</span>
                            <input type="text" class="form-control" placeholder="xxxxxxxx" aria-label="salary" aria-describedby="basic-addon1" style="padding-bottom: 10px;padding-top: 10px; position: relative; left: 2px;bottom: 110px;">
                          </div>
                        </div>
                        <div class="col">
                          <label for="salary"style="padding-bottom: 10px;padding-top: 10px; position: relative; left: 2px;bottom: 110px;"><strong>Salary Range</strong> </label>
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1" style="padding-bottom: 10px;padding-top: 10px; position: relative; left: 2px;bottom: 110px;">Rp</span>
                            <input type="text" class="form-control" placeholder="xxxxxxxx" aria-label="salary" aria-describedby="basic-addon1" style="padding-bottom: 10px;padding-top: 10px; position: relative; left: 2px;bottom: 110px;">
                            </div>
                          </div>
                          <div class="col">
                            <label for="education" style="padding-bottom: 10px;padding-top: 10px; position: relative; left: 2px;bottom: 110px;"><strong>Lost Education</strong> </label>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" style="padding-bottom: 10px;padding-top: 10px; position: relative; bottom: 110px;width: 450px;">
                              <option selected>Select Lost Education</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                           </select>
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
                </div> <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
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
