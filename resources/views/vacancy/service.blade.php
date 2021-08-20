@extends('vacancy.layout')

@section('title', 'About | Lowkerjogja.com')

@section('container')

<!-- ======= Produk Section ======= -->
<section>
    <div class="container" style="position: relative;top: 60px;height: 750px;">
        <h6 style="font-size: 34px;">
            <center><strong>Product And Service</strong></center>
        </h6>
        <br><br>
        <div class="row">
            <div class="col-sm-6">
                <div class="card" style="width:250px;position: relative;left: 300px;height: 610px;">
                    <div class="card-header" style="background-color: #006AFF;color: white;">
                        <center><strong>Job Postings</strong> </center>
                    </div>

                    <div class="card-body">
                        <center style="color: #006AFF;"><strong> Job Postings</strong></center>
                        <center>Pay for only what you need</center>

                        <center>
                            <a href="" class="btn btn-outline-primary" style="margin-top: 50px;width: 200px;border-radius: 10px;position: relative;top: 400px;
                ">Try Now</a>
                        </center>

                    </div>

                </div>
            </div>

            <div class="col-sm-4">
                <div class="card" style="width:250px;position: relative;left: 50px;">
                    <div class="card-header" style="background-color: #006AFF;color: white;">
                        <center><strong>Search Candidate</strong> </center>
                    </div>

                    <div class="card-body">
                        <center style="color: #006AFF;"><strong> Job Postings</strong></center>
                        <center>Unlimited</center>
                        <p style="color: #006AFF; position: relative; top: 30px;text-align: center;">
                            <strong>Features</strong>
                        </p>
                        <p style="position: relative; top: 10px;text-align: center;">
                            5 Featured Job posts
                            Recommended talent Employer branding Salary insights
                        </p>
                        <div class="card" style="position: relative; top: 50px;background: rgba(196, 196, 196, 0.1);box-shadow: 2px 2px 2px rgba(0,0,0,0);">
                            <div class="card-body">
                                <div class="card-title">

                                    <p style="color: #006AFF; position: relative;text-align: center; bottom: 20px;right: 20px;">
                                        <strong>
                                            <img src="img/icons/search.png" style="position: relative;right: 30px;">
                                            Talent Search
                                        </strong>
                                    <h5 style="position: relative;text-align: center; font-size: 20px;">
                                        Unlimited
                                    </h5>
                                    </p>

                                </div>
                                <div class="card-text">
                                    <p style="position: relative;text-align: center;color: #dcdcdc; font-size: 12px;">Full access to 50,000+ resumes </p>
                                </div>
                            </div>

                        </div>
                        <br><br><br>
                        <center>
                            <a href="" class="btn btn-primary btn-lg" style="margin-top: 43px;width: 200px;border-radius: 10px;
                ">Get Premium</a>
                        </center>
                    </div>
                </div>
            </div>
</section>


        <!-- ======= End Section ======= -->

        @endsection
