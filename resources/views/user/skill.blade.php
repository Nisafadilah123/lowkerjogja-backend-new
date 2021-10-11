@extends('user.layout')

@section('title', 'Keahlian | Lowkerjogja.com')

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
</style>
<section id="recent-blog-posts" class="recent-blog-posts" style="padding-top: 150px;">

  <div class="container" data-aos="fade-up">


    <div class="row">

      <div class="col-lg-4">

        <div class="post-box" style="background-color: #F9FAFF;">

          <div class="row align-items-start">
            <div class="col">
                <div>
                    <img src="{{asset('profile_photos/'. Auth::user()->profile_photo_path)     }}" class="image">
                    <h6 style="font-weight: bold;padding-right:150px; float:right">{{ ucfirst (Auth::user()->name) }}</h6>
                    <h6 style="color:#A5B2C2; font-size: 15px; float:right;position:relative; bottom:70px;padding-right:100px;">View Profile</h6>
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
                <a href="/user" class="about">
                  <div class="card-body" style="width: 300px; padding-left: 30px;">
                    <h6 style="font-weight: bold;" style="padding-right: 50px;">Profil Saya</h6>
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
                    <h6 style="font-weight: bold;" style="padding-right: 50px;">Pendidikan</h6>
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

                    <h6 style="font-weight: bold;" style="padding-right: 50px;">Keahlian</h6>
                  </div>
                </a>
              </div>
            </div>

            <div class="row align-items-center">

                <div class="col-sm-2">
                    <div class="">

                        <div class="card-body">
                            <img src="/img/icons/password.png" width="30px" alt="">
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="col-sm-6">
                    <a href="/password" class="about">
                        <div class="card-body" style="width: 300px; padding-left: 30px;">
                            <h6 style="font-weight: bold;" style="padding-right: 50px;">Kata Sandi</h6>
                        </div>
                    </a>
                </div>
            </div>

          </div>
        </div>
      </div>


      <div class="col-lg-8">

        <div class="post-box" style="height: 350px; background-color: #F9FAFF;">

          <div class="row align-items-center">
            <div class="col align-items-center">
              <img src="img/icons/bar-chart.png" alt="" width="35px" style="float: left;">
                  <h6 style="font-weight: bold; margin-left: 50px; margin-top: 8px;">Keahlian
                    {{-- create --}}
                    <a href="{{ url('skill/create') }}" class="btn btn-success" style="position: relative; float: right;">
                  <i class="fas fa-plus" style="float: right; "> Tambah</i></a></h6>

            </div>
              @foreach ($skills as $item)

            <div class="row align-items-center" style="padding-top: 20px;">
              <div class="col-lg-3">
                    <h6 style="color: #A5B2C2;">{{ $item->level }}</h6>

              </div>

              <div class="col-lg-4">
                <h6 style="font-weight: bold;">{{ $item->skill }}</h6>
              </div>

              <div class="col-lg-2">
                    <a href="{{ url('skill/'.$item->id.'/edit') }}" class="btn btn-warning">
                    <i class="bi bi-pencil-square" style="float: right; "></i></a>
              </div>

               {{-- delete --}}
               <div class="col-lg-2 align-items-center">

                <form action="{{ url('skill/'.$item->id) }}" method="POST" class="d-inline">
                  @method('delete')
                  @csrf
                  <button type="submit" class="btn btn-danger delete"><i class="fas fa-trash-alt" style="float: right; "></i></button>
              </form>
                </div>
            </div>

            @endforeach

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
