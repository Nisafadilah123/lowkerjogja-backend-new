@extends('admin.layout')

@section('title' , 'Perusahaan | Admin')

@section('container')

<!-- Main Container -->
<div class="main-content">
    <section class="section">
        <h1 class="section-header">
            <div>Perusahaan</div>
        </h1>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="block-options p-3">
                        <a href="{{url('create/company')}}" class="btn btn-primary"><span class="fa fa-plus"></span> Tambah Perusahaan</a>
                    </div>
                    <div class="card">

                        <div class="card-body">
                            <div class="table-responsive" >
                                <table class="table table-striped table-bordered data" id="add-row">
                                    <thead>
                                         <tr>
                                        <th>No</th>
                                        <th>Perusahaan</th>
                                        <th>Desc</th>
                                        <th>Logo</th>
                                        <th>Industri</th>
                                        <th>Lokasi</th>
                                        <th>Hari Kerja</th>
                                        <th>Tahun Berdiri</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>


                                    <tbody>
                                        @foreach ($corp as $corp)
                                         <tr>
                                        <td style="vertical-align: middle;">{{$i++}}</td>
                                        <td style="vertical-align: middle;">{{$corp->nama_corp}}</td>
                                        <td style="vertical-align: middle;">{{$corp->description}}</td>
                                        <td style="vertical-align: middle;">
                                            <img style="margin-bottom: 5px;" src="{{asset('template/img/logo/'. $corp->logo)}}" width="100" alt="Logo">
                                        </td>
                                        <td style="vertical-align: middle;">{{$corp->industri}}</td>
                                        <td style="vertical-align: middle;">{{$corp->location}}</td>
                                        <td style="vertical-align: middle;">{{$corp->work_day}}</td>
                                        <td style="vertical-align: middle;">{{$corp->founded_year}}</td>



                                        <td style="width: 120px;text-align: center;vertical-align: middle; ">
                                            <a href="/company/{{$corp->id}}/edit" class="btn btn-sm btn-primary btn-circle " style="float:left"><i class="far fa-edit"></i></a>
                                            <form action="/company/{{$corp->id}}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-primary btn-circle" style="float:right" onclick="return confirm('anda yakin ingin menghapus data?');"><span class="far fa-trash-alt"></span></button>
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
