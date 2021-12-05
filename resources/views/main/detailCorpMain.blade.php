@extends('main.layout')

@section('title', 'Detail Perusahaan | Lowkerjogja.com')

@section('container')

<section id="recent-blog-posts" class="recent-blog-posts" style="padding-top: 150px;">

    <div class="container" data-aos="fade-up">

        <div class="row">
            @foreach ($corps as $c)
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <img class="gg5" src="/logo/{{$c->logo}}" style="margin: auto;" width="400px" height="300px">
                            <h4 class="cmp" style="font-weight: normal">{{ $c->nama_corp}}</h4>
                            <hr>
                            <h6 class="cmp" style="font-weight: normal">{{ $c->description}}</h6>
                        </div>
                    </div>
                </div>
            @endforeach

            </div>
        </div>
    </div>
</section>
@endsection
