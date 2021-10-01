@extends('admin.layout')

@section('title' , 'Kandidat | Admin')

@section('container')

<!-- Main Container -->
<div class="main-content">
    <section class="section">
        <h1 class="section-header">
            <div>Kandidat</div>
        </h1>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered ">
                                    <tr>
                                        <th>No</th>
                                        <th colspan="2">Nama </th>


                                        <th>Alamat</th>
                                        <th>Position</th>
                                        <th>CV</th>
                                        <th>Status</th>

                                        <th>Aksi</th>
                                    </tr>
                                </table>
                            </div>
                        </div>
@endsection