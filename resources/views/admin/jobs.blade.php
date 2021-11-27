@extends('admin.layout')

@section('title' , 'Karir | Admin')

@section('container')

<!-- Main Container -->
<div class="main-content">
    <section class="section">
        <h1 class="section-header">
            <div>Karir</div>
        </h1>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="block-options p-3">
                        <!-- <a href="{{url('create/jobs')}}" class="btn btn-primary"><span class="fa fa-plus"></span>   Tambah Karir</a> -->
                    </div>
                    <div class="card">


                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered data" id="add-row">
                                    <thead>
                                        <tr>
                                        <th>No</th>
                                        <th>Nama Perusahaan</th>
                                        <th>Deskripsi Pekerjaan</th>
                                        <th>Posisi Kerja</th>
                                        <th>Pendidikan Terakhir</th>
                                        <th>Tipe Pekerjaan</th>
                                        <th>Kategori Pekerjaan</th>
                                        <th>Deadline</th>
                                        <th>Provinsi</th>
                                        <th>Kota</th>
                                        <th>gaji_awal - gaji_akhir</th>
                                        <th>Kuota</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Umur</th>
                                        <th>Lokasi</th>
                                        <th>Syarat</th>
                                        <th>Email</th>
                                        <th>Telp</th>
                                        <th>Aksi</th>
                                    </tr>
                                    @foreach ($jobs as $key =>$job)
                                    </thead>
                                    <tr>
                                        <td style="vertical-align: middle;">{{$key+1}}</td>
                                        <td style="vertical-align: middle;">{{$job->nama_corp}}</td>
                                        <td style="vertical-align: middle;">{{$job->description_job}}</td>
                                        <td style="vertical-align: middle;">{{$job->position}}</td>
                                        <td style="vertical-align: middle;">{{$job->last_education}}</td>
                                        <td style="vertical-align: middle;">{{$job->tipe_pekerjaan}}</td>
                                        <td style="vertical-align: middle;">{{$job->kategori_pekerjaan}}</td>
                                        <td style="vertical-align: middle;">{{date('d-m-Y', strtotime($job->deadline))}}</td>
                                        <td style="vertical-align: middle;">{{$job->province_name}}</td>
                                        <td style="vertical-align: middle;">{{$job->city_name}}</td>
                                        <td style="vertical-align: middle;">Rp {{number_format($job->starting_salary)}} - Rp {{number_format($job->final_salary)}} </td>
                                        <td style="vertical-align: middle;">{{$job->kuota}}</td>
                                        <td style="vertical-align: middle;">{{$job->gender}}</td>
                                        <td style="vertical-align: middle;">{{$job->age}}</td>
                                        <td style="vertical-align: middle;">{{$job->location}}</td>
                                        <td style="vertical-align: middle;">{{$job->syarat}}</td>
                                        <td style="vertical-align: middle;">{{$job->email}}</td>
                                        <td style="vertical-align: middle;">{{$job->telp}}</td>


                                        <td style="width: 120px;text-align: center;vertical-align: middle; ">
                                            <!-- <a href="/jobs/{{$job->id}}/edit" class="btn btn-sm btn-primary btn-circle"><i class="far fa-edit"></i></a> -->
                                            <form action="/jobs/{{$job->id}}" method="post" id="delete-jobs">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-primary btn-circle delete"><span class="far fa-trash-alt"></span></button>
                                                <!-- <input type="submit" class="btn btn-danger btn-sm" value="Delete" onclick="return confirm('anda yakin ingin menghapus data?');"> -->
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach



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

<script>
    $('.delete').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
            title: `Apakah anda yakin ingin menghapus data ini ?`,
              text: "Jika anda menghapusnya maka datanya akan di hapus secara permanen",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });

</script>
@endpush
