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
                                <table class="table table-striped table-bordered data" id="add-row">
                                    <thead>
                                        <tr>
                                        <th>No</th>
                                        <th>Nama </th>
                                        <th>Email</th>
                                        <th>Foto Pengguna</th>
                                        <th>Role Pengguna</th>
                                        <th>Aksi</th>
                                    </tr>

                                    </thead>

                                    <tbody>
                                         @foreach ($users as $user)
                                    <tr>

                                        <td style="vertical-align: middle;">{{$i++}}</td>
                                        <td style="vertical-align: middle;">{{$user->name}}</td>
                                        <td style="vertical-align: middle;">{{$user->email}}</td>
                                        <td style="vertical-align: middle;">
                                            <img style="margin-bottom: 5px;" src="{{asset('profile_photos/'. $user->profile_photo_path)}}" width="100" alt="Foto Pengguna">
                                        </td>
                                        <td style="vertical-align: middle;">{{$user->utype}}</td>
                                        <td style="width: 50px;text-align: center;vertical-align: middle; ">
                                            <form id="delete-user" action="/users/{{$user->id}}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-primary btn-circle delete" style="float:right" ><span class="far fa-trash-alt"></span></button>
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
