@extends('user.layout')

@section('title', 'Education | Lowkerjogja.com')

@section('container')

<!-- ======= Recent Blog Posts Section ======= -->
<style>
.image{
            border-radius: 50%;
            -webkit-border-radius: 200px;
            -moz-border-radius: 200px;
            width: 100px;
            height: 100px;
            object-fit: cover;
        }
        .aksi{
            float: right;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }

        table, th, td {
            border: 1px solid white;
        }
        th, td {
            padding: 10px;
        }

</style>
<section id="recent-blog-posts" class="recent-blog-posts" style="padding-top: 150px;">

    <div class="container" data-aos="fade-up" style="width: 100%">
        <div class="row">

            <div class="col-lg-4">

              <div class="post-box" style="background-color: #F9FAFF;">

                <div class="row align-items-start">
                  <div class="col">
                      <div>
                          <img src="{{  Auth::user()->profile_photo_url   }}" class="image">
                          <h6 style="font-weight: bold;padding-right:150px; float:right">{{ ucfirst (Auth::user()->name) }}</h6>
                          <h6 style="color:#A5B2C2; font-size:15 px; float:right;position:relative; bottom:70px;padding-right:100px;">View Profile</h6>
                      </div>
                  </div>

                  <div class="row align-items-center mt-4">

                    <div class="col-sm-2">
                      <div class="">

                        <div class="card-body">
                          <img src="img/icons/user.png" width="30px" alt="">
                        </div>
                      </div>
                    </div>
                    <br><br>
                    <div class="col-sm-6">
                      <a href="/profileUser" class="about">
                        <div class="card-body" style="width: 300px; padding-left: 30px;">
                          <h6 style="font-weight: bold;" style="padding-right: 50px;">My Profile</h6>
                        </div>
                      </a>
                    </div>
                  </div>

                  <div class="row align-items-center">

                    <div class="col-sm-2">
                      <div class="">

                        <div class="card-body">
                          <img src="img/icons/mortarboard.png" width="35px" alt="">
                        </div>
                      </div>
                    </div>
                    <br><br>
                    <div class="col-sm-6">
                      <a href="/education" class="about">
                        <div class="card-body" style="width: 300px; padding-left: 30px;">
                          <h6 style="font-weight: bold;" style="padding-right: 50px;">Education</h6>
                        </div>
                      </a>
                    </div>
                  </div>

                  <div class="row align-items-center">

                    <div class="col-sm-2">


                      <div class="card-body">
                        <img src="img/icons/bar-chart.png" width="30px" alt="">

                      </div>
                    </div>
                    <br><br>
                    <div class="col-sm-6">
                      <a href="/skill" class="about">
                        <div class="card-body" style="width: 300px; padding-left: 30px;">
                          <h6 style="font-weight: bold;" style="padding-right: 50px;">Skills</h6>
                        </div>
                      </a>
                    </div>
                  </div>

                  <div class="row align-items-center">

                    <div class="col-sm-2">
                      <div class="">

                        <div class="card-body">
                          <img src="img/icons/password.png" width="30px" alt="">
                        </div>
                      </div>
                    </div>
                    <br><br>
                    <div class="col-sm-6">
                      <a href="/password" class="about">
                        <div class="card-body" style="width: 300px; padding-left: 30px;">
                          <h6 style="font-weight: bold;" style="padding-right: 50px;">Password</h6>
                        </div>
                      </a>
                    </div>
                  </div>

                </div>
              </div>
            </div>



            <div class="col-sm-8">

                <div class="post-box" style=" background-color: #F9FAFF;">

                    <div class="row align-items-center">
                        <div class="col align-items-center">
                            <img src="img/icons/mortarboard.png" alt="" width="35px" style="float: left;">
                            <h6 style="font-weight: bold; margin-left: 50px; margin-top: 8px;">Education

                            <a href="{{ url('education/create') }}" class="btn btn-success" id="tambah" style="position: relative; float: right;"><i class="fas fa-plus" style="position: relative; float: right;">Add</i></a><br><br>

                            <table>

                                    <tbody>
                                        @foreach ($educations as $item)

                                        <tr>
                                            <td><p style="color: #A5B2C2;font-size:14px;">{{ $item->graduate }}
                                                </p></td>
                                            <td>
                                                <strong>{{ $item->name }}</strong>
                                                <p>{{ $item->major }}</p>
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ url('education/'.$item->id.'/edit') }}" class="btn btn-warning">
                                                <i class="fas fa-edit"></i></a>
                                                <td>
                                                    <form id="delete-education" action="{{ url('education/'.$item->id) }}" method="POST">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger delete">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                                </td>

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
    </div>


    </div>

    </div>

</section><!-- End Recent Blog Posts Section -->
@endsection

@push('script-addon')
<script>
    $(document).ready(function() {
    $('#data').DataTable();
} );
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
