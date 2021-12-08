@extends('vacancy.layout2')

@section('title', 'Karir Perusahaan | Lowkerjogja.com')

@section('container')


<div class="container" style="position: relative; top: 130px;height:1000px">
    <div class="row" >

        @foreach ($corps as $c )

      <div class="col-sm-3" >
          <div class="card">

            <img src="{{asset('logo/'. $c->logo)}}" height="300px"/>

            <div class="card-body">
                {{-- <img src="{{asset('logo/'. $c->logo)}}"  id="gambar2" width="50px" style="z-index: 2;top: 140px;position: absolute;"><br> --}}
              <h5 class="card-title"><strong>{{ $c->nama_corp }}</strong> </h5><br>
              <p class="card-text" style="color: #dcdcdc;">{{ $c->industri }}, {{ $c->location }}</p>
              <p class="card-text">
                  <a href="/perusahaan" style="text-decoration: none;"><strong style="padding-right: 20px;">Tentang</strong></a> | <a href="/karir" style="text-decoration: none;"><strong style="text-decoration: none; padding-left: 20px;">Karir</strong></a>
            </p>
            </div>
          </div>
        </div>

        @endforeach

        <div class="col-sm-9">
            <div class="card">
                <div class="card-body">
                    <div class="row" >
                        @foreach($lihatjobs as $l)
                        <div class="col-sm-6"style="margin-top: 15px;">

                            <div class="card" >
                            <div class="card-body">

                                            <div class="row align-items-start">
                                                <div class="col-sm-12">
                                                    <p style="background-color: #F9FAFF; text-align: center; border-radius: 13%; box-shadow: 0px 2px 20px rgba(1, 41, 112, 0.1);">{{ $l->tipe_pekerjaan }}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6"></div>
                                                <div class="col-sm-6" style="color: #BEBFC0; font-size: 12px;float: right;">
                                                    <i style="padding-right: 2px;" class="bi bi-clock"></i>{{ \Carbon\Carbon::parse($l->created_at)->diffForHumans() }}
                                                </div>
                                            </div>
                                            <br>
                                                    <div class="row">
                                                        <div class="col-sm-6"></div>
                                                        <div class="col-sm-6">
                                                            <table>
                                                                    <tr>
                                                                        <td style="position: relative;padding-right:20px">
                                                                            <a href="{{ url('karir/'. $l->id.'/edit') }}" class="btn btn-warning">
                                                                            <i class="fas fa-edit"></i></a>
                                                                        </td>

                                                                        <td>
                                                                            <form id="delete-education" action="{{ url('karir/'.$l->id) }}" method="POST">
                                                                                @method('delete')
                                                                                @csrf
                                                                                <button type="submit" class="btn btn-danger delete">
                                                                                    <i class="fas fa-trash-alt"></i>
                                                                                </button>
                                                                            </form>
                                                                        </td>
                                                                    </tr>
                                                            </table>
                                                        </div>


                                                    </div>



                                            <div class="row align-items-start">
                                                <div class="col">
                                                    <form method="post" enctype="multipart/form-data" action="">
                                                        {{csrf_field()}}
                                                        <input type="hidden" class="form-control" name="idjob" id="idjob" value="{{ $l->id }}">
                                                    <div>
                                                        <i class="fas"></i>
                                                        <img src="logo/{{$l->logo}}" style="float:left; margin:0 8px 4px 0;" width="120px" height="100px" />
                                                        <br>
                                                    </div>
                                                    </form>
                                                </div>
                                                <div class="row align-items-start">
                                                    <div class="col-sm-12" style="padding-top: 15px;">
                                                        <h6 style="color:#4154f1; font-weight: bold;">{{$l->nama_corp}}</h6>
                                                        <h6 style="font-weight: bold;">{{ $l->position }}</h6>
                                                        <h6 style="color: #000000;">{{$l->last_education}}</h6>
                                                        <h6 style="color: #000000;">{{$l->gender}}</h6>
                                                        <h6 style="color: #BEBFC0;">{{$l->city_name}}, {{$l->province_name}}</h6>
                                                        <h6 style="color: #28A59F; padding-top: 5px;">Rp {{ number_format($l->starting_salary) }} - Rp {{ number_format($l->final_salary) }}</h6>
                                                        <!-- Button lamar -->

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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

      </div>

  </div>


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

      $(document).on("change",".job_type",function(){
        var job_type_selected = $(".job_type option:selected").val();
        console.log("pilih job_type",job_type_selected)
        $.ajax({
            "url":"/get-job-category",
            "data":{job_type_selected:job_type_selected},
            "type":"GET",
            success:function(hasil_result){
                console.log("job_category",hasil_result)
                var option_job_category="<option>-- Pilih Kategori Pekerjaan --</option>";
                hasil_result.forEach(element => {
                    option_job_category+=`<option value="${element.id}">${element.kategori_pekerjaan}</option>`;
                });
                $(".job_category").html(option_job_category);
            }
        });
    });

</script>
@endpush
