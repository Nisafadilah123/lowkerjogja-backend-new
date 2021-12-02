@extends('vacancy.layout')

@section('title', 'Masuk Perusahaan | Lowkerjogja.com')

@section('container')

<!-- Login Section -->
<div class="container" style="position: relative; top: 100px; height: 550px">
    <div class="row">
        <div class="col-sm-6">
            <div class="">
                <div class="card-body">
                    <img src="img/1.png" alt="logo" class="float-right" width="500px" />
                </div>
            </div>
        </div>
        <br /><br /><br /><br />
        <div class="col-sm-6">
            <div class="card" style="width: 360px">
                <div class="card-body">
                    <h4 class="card-title" style="color: #006aff">
                        <center><strong>Masuk</strong></center>
                    </h4>
                    <form method="POST" class="my-login-validation" novalidate="">
                        <div class="form-group">
                            <label for="email"><strong>Email</strong></label><br />
                            <input id="email" type="email" class="form-control" name="email" value="" required autofocus placeholder="jhons" />
                            <div class="invalid-feedback">Email tidak valid</div>
                        </div>

                        <br />
                        <div class="grouppassword">
                            <label for="password"><strong>Kata Sandi</strong></label><br />
                            <input id="password" type="password" class="form-control" name="password" placeholder="******************" />
                            <i class="far fa-eye" aria-hidden="true"></i>
                            <div class="invalid-feedback">Kata Sandi diperlukan</div>
                        </div>

                        <br />
                        <div class="form-group">
                            <br />
                            <a href=""></a>
                            <label for="" style="color: #006aff"><strong><a href="" style="color: #006aff">Lupa kata sandi ?</a></strong></label>
                        </div>

                        <div class="form-group m-0">
                            <br />
                            <a href="/home" type="submit" class="btn btn-primary" style="width: 330px; font-size: 20px">
                                <center><strong>Masuk</strong></center>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Login Section -->

@endsection
