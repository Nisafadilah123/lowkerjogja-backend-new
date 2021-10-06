@extends('admin.layout')

@section('title' , 'Dashboard | Admin')

@section('container')

<div class="main-content">
  <section class="section">
    <h1 class="section-header">
      <div>Dashboard</div>
    </h1>
    <!-- Row -->
    <div class="row">
      <div class="col-lg-3 col-md-6 col-12">
        <div class="card card-sm-3">
          <div class="card-icon bg-primary">
            <i class="fa fa-building"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Perusahaan</h4>
            </div>
            <div class="card-body">
              {{$corp}}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
        <div class="card card-sm-3">
          <div class="card-icon bg-success">
            <i class="ion ion-android-clipboard "></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Pekerjaan</h4>
            </div>
            <div class="card-body">
              {{$jobs}}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
        <div class="card card-sm-3">
          <div class="card-icon bg-info">
            <i class="fas fa-users"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Kandidat</h4>
            </div>
            <div class="card-body">
              {{$candidate}} 
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
        <div class="card card-sm-3">
          <div class="card-icon bg-danger">
            <i class="ion ion-ios-person""></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Pengguna</h4>
            </div>
            <div class="card-body">
               {{$user}}
            </div>
          </div>
        </div>
      </div>
      <!-- End Row -->
    </div>
  </section>
</div>
@endsection