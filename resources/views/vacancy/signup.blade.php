@extends('vacancy.layout')

@section('title', 'Sign Up | Lowkerjogja.com')

@section('container')

<!-- ======= Sign Up Section ======= -->

<div class="container" style="position: relative; top: 100px; height: 700px">
    <div class="row">
        <div class="col-sm-6">
            <div class="">
                <div class="card-body">
                    <img src="img/2.png" alt="logo" class="float-right" width="500px" />
                </div>
            </div>
        </div>
        <br /><br /><br /><br />
        <div class="col-sm-6">
            <div class="card" style="width: 360px">
                <div class="card-body">
                    <h4 class="card-title" style="color: #006aff">
                        <center><strong>Sign Up</strong></center>
                    </h4>
                    <form method="POST" class="my-login-validation" novalidate="">
                        <div class="form-group">
                            <label for="email"><strong>Email</strong></label><br />
                            <input id="email" type="email" class="form-control" name="email" value="" required autofocus placeholder="jhons" />
                            <div class="invalid-feedback">Email is invalid</div>
                        </div>

                        <br />
                        <div class="form-group">
                            <label for="nama"><strong>Nama</strong></label>
                            <input id="nama" type="text" class="form-control" name="nama" value="" required autofocus placeholder="adfastas@gmail.com" />
                            <div class="invalid-feedback">Email is invalid</div>
                        </div>
                        <br />
                        <div class="grouppassword">
                            <label for="password"><strong>Password</strong> </label>
                            <input id="password" type="password" class="form-control" name="password" placeholder="******************" />
                            <i class="far fa-eye" aria-hidden="true"></i>
                            <div class="invalid-feedback">Password is required</div>
                        </div>
                        <br />
                        <div class="grouppassword">
                            <label for="password"><strong>Password</strong></label><br />
                            <input id="password" type="password" class="form-control" name="password" placeholder="******************" />
                            <i class="far fa-eye" aria-hidden="true"></i>
                            <div class="invalid-feedback">Password is required</div>
                        </div>

                        <br />
                        <div class="form-group">
                            <br />
                            <a href=""></a>
                            <label for="" style="color: #006aff"><strong><a href="" style="color: #006aff">Forgot Password ?</a></strong></label>
                        </div>

                        <div class="form-group mt-2">
                            <a href="/succesCorp" class=" btn btn-primary " style="width: 330px; font-size: 20px">Sign Up</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Sign Up Section -->

@endsection