@extends('admin.layout')

@section('title' , 'Pengguna | Admin')

@section('container')

<!-- Main Container -->
<div class="main-content">
    <section class="section">
        <h1 class="section-header">
            <div>Pengguna</div>
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
                                        <th>Nama </th>
                                        <th>Email</th>

                                        <th>Aksi</th>
                                    </tr>

                                    @foreach ($users as $user)
                                    <tr>

                                        <td style="vertical-align: middle;">{{$i++}}</td>
                                        <td style="vertical-align: middle;">{{$user->name}}</td>
                                        <td style="vertical-align: middle;">{{$user->email}}</td>

                                        <td style="width: 50px;text-align: center;vertical-align: middle; ">
                                            <form action="/users/{{$user->id}}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-primary btn-circle" style="float:right" onclick="return confirm('anda yakin ingin menghapus data?');"><span class="far fa-trash-alt"></span></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach

                                </table>
                            </div>
                        </div>
@endsection 