@extends('layouts.layout3')

@section('title', 'Search Candidate | Lowkerjogja.com')

@section('container')

<!-- ======= Search Candidate Section ======= -->
<main id="main">
    <div class="container" data-aos="fade-bottom">
        <div class="card" style="position: relative; top: 100px;">
            <div class="card-body">
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="graduate" class="from-label"><b>Graduate</b></label>
                        <div class="input-icons">
                            <i class="fas fa-graduation-cap"></i>
                            <input type="text" class="form-control text-center" id="validationDefault03" placeholder="Semua Lulusan" aria-label="Semua Lulusan">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="Location" class="form-label"><b>Location</b></label>
                        <div class="input-icons">
                            <i class="bi bi-geo-alt-fill"></i>
                            <input type="text" class="form-control text-center" placeholder="City" aria-label="Location">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <label for="Location" class="form-label">&nbsp;</label>
                        </br>
                        <button class="btn btn-primary text-center" type="button"><i class="fa fa-search" aria-hidden="true"></i>&nbsp; Cari &nbsp;&nbsp;</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container" data-aos="fade-bottom">
        <div class="card" style="width: 25rem; position: relative ; top: 150px;">
            <div class="card-header">
                Profile
            </div>
            <div class="card-body">
                <i style=" font-size: 20px; color: #BEBFC0; float: right;" class="far fa-save"></i>
                <img src="assets/img/team/team-1.jpg" class="rounded-circle" alt="" style="float:left; margin:0 8px 4px 0;width: 60px; ">
                <h5 style="font-weight: bold;">John</h5>
                <h6 style="color:#A5B2C2; font-size: 14px;">As a</h6>
                </br>
                <div class="row row-cols-auto">
                    <div class="col" style="color: #000000; font-size: 14px;">Skill 1</div>
                    <div class="col" style="color: #000000; font-size: 14px;">Skill 2</div>
                    <div class="col" style="color: #000000; font-size: 14px;">Skill 3</div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container" data-aos="fade-bottom">
        <div class="card" style="width: 25rem; position: relative; top: 150px;">
            <div class="card-header">
                Profile
            </div>
            <div class="card-body">
                <i style=" font-size: 20px; color: #BEBFC0; float: right;" class="far fa-save"></i>
                <img src="assets/img/blog/comments-6.jpg" class="rounded-circle" alt="" style="float:left; margin:0 8px 4px 0;width: 60px; ">
                <h5 style="font-weight: bold;">Candidate's Full Name</h5>
                <h6 style="color:#A5B2C2; font-size: 14px;">As a</h6>
                </br>
                <div class="row row-cols-auto">
                    <div class="col" style="color: #000000; font-size: 14px;">Skill 1</div>
                    <div class="col" style="color: #000000; font-size: 14px;">Skill 2</div>
                    <div class="col" style="color: #000000; font-size: 14px;">Skill 3</div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container" data-aos="fade-bottom">
        <div class="card" style="width: 25rem; position: relative ; top: 150px;">
            <div class="card-header">
                Profile
            </div>
            <div class="card-body">
                <i style=" font-size: 20px; color: #BEBFC0; float: right;" class="far fa-save"></i>
                <img src="assets/img/blog/comments-1.jpg" class="rounded-circle" alt="" style="float:left; margin:0 8px 4px 0;width: 60px; ">
                <h5 style="font-weight: bold;">Candidate's Full Name</h5>
                <h6 style="color:#A5B2C2; font-size: 14px;">As a</h6>
                </br>
                <div class="row row-cols-auto">
                    <div class="col" style="color:#000000; font-size: 14px;">Skill 1</div>
                    <div class="col" style="color:#000000; font-size: 14px;">Skill 2</div>
                    <div class="col" style="color:#000000; font-size: 14px;">Skill 3</div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="card" style="width: 25rem; position: relative ; top: 150px;">
            <div class="card-header">
                Profile
            </div>
            <div class="card-body">
                <i style=" font-size: 20px; color: #BEBFC0; float: right;" class="far fa-save"></i>
                <img src="assets/img/testimonials/testimonials-4.jpg" class="rounded-circle" alt="" style="float:left; margin:0 8px 4px 0;width: 60px; ">
                <h5 style="font-weight: bold;">Candidate's Full Name</h5>
                <h6 style="color:#A5B2C2; font-size: 14px;">As a</h6>
                </br>
                <div class="row row-cols-auto">
                    <div class="col" style="color:#000000; font-size: 14px;">Skill 1</div>
                    <div class="col" style="color:#000000; font-size: 14px;">Skill 2</div>
                    <div class="col" style="color:#000000; font-size: 14px;">Skill 3</div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container" data-aos="fade-bottom">
        <div class="card" style="width: 25rem; position: relative ; top: 150px;">
            <div class="card-header">
                Profile
            </div>
            <div class="card-body">
                <i style=" font-size: 20px; color: #BEBFC0; float: right;" class="far fa-save"></i>
                <img src="assets/img/team/team-2.jpg" class="rounded-circle" alt="" style="float:left; margin:0 8px 4px 0;width: 60px; ">
                <h5 style="font-weight: bold;">Candidate's Full Name</h5>
                <h6 style="color:#A5B2C2; font-size: 14px;">As a</h6>
                </br>
                <div class="row row-cols-auto">
                    <div class="col" style="color:#000000; font-size: 14px;">Skill 1</div>
                    <div class="col" style="color:#000000; font-size: 14px;">Skill 2</div>
                    <div class="col" style="color:#000000; font-size: 14px;">Skill 3</div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
