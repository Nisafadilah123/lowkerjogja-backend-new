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
                                <table class="table table-striped table-bordered data" id="add-row">
                                    <thead>
                                        <tr>
                                        <th>No</th>
                                        <th>Nama </th>


                                        <th>Alamat</th>
                                        <th>Position</th>
                                        <th>CV</th>
                                        <th>Status</th>

                                        <th>Aksi</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                         @foreach ($candidate as $c)
                                    <tr>
                                        <td style="vertical-align: middle;">{{$i++}}</td>
                                        <td style="vertical-align: middle;">{{$c->name}}</td>
                                        <td style="vertical-align: middle;">{{$c->address}}</td>
                                        <td style="vertical-align: middle;">{{$c->position}}</td>
                                        <td>
                                            <a href="/opencv/{{$c->id}}" target="_blank" class="btn btn-primary">
                                                View File <span class="glyphicon glyphicon-eye-open">
                                            </a>
                                        </td>
                                        <td style="vertical-align: middle;">{{$c->status}}</td>

                                        <td style="width: 120px;text-align: center;vertical-align: middle; ">
                                            <form action="" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-primary btn-circle" onclick="return confirm('anda yakin ingin menghapus data?');"><span class="far fa-trash-alt"></span></button>
                                                <!-- <input type="submit" class="btn btn-danger btn-sm" value="Delete" onclick="return confirm('anda yakin ingin menghapus data?');"> -->
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>

                                </table>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
@endsection

@push('script-addon')
<script>
    $(document).ready(function () {
        $('.data').dataTable();
    });
</script>
@endpush
