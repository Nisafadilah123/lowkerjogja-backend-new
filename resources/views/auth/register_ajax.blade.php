@extends('main.layout')

@section('title', 'Register Page | Lowkerjogja.com')

@section('container')


<section>
    <div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="class">
                <div class="card-body">
                    <img src="/img/2.png" alt="logo" class="float-right" width="500px" />
                </div>
            </div>
        </div>

        <div class="col-sm-6">
{{-- main --}}
@guest
    <div class="class">
        <p class="mb-3 text-center">Register</p>
    </div>
    <div class="d-none regis-error card my-3">
        <div class="card-body">

        </div>
    </div>
    <div>
        <label for="name" >{{ __('Name') }} </label>
        <input id="name" class="block mt-1 w-full form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
    </div>

    <div>
        <label for="name" >{{ __('Address') }} </label>
        <input id="address" class="block mt-1 w-full form-control" type="text" name="address" :value="old('address')" required autofocus autocomplete="address" />
    </div>

    <div class="mt-4">
        <label for="email" >{{ __('Email') }} </label>
        <input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required />
    </div>

    <div class="mt-4">
        <label for="password">{{ __('Password') }}</label>
        <input id="password" class="block mt-1 w-full form-control" type="password" name="password" required autocomplete="new-password" />
    </div>

    <div class="mt-4">
        <label for="password_confirmation" >{{ __('Confirm Password') }} </label>
        <input id="password_confirmation" class="block mt-1 w-full form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
    </div>

    <div class="mt-4">
        <label for="terms">
            <div class="flex items-center">
                <input type="checkbox" name="terms" id="terms"/>
                <div class="ml-2">
                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                            'terms_of_service' => '<a target="_blank" href="#" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                            'privacy_policy' => '<a target="_blank" href="#" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                    ]) !!}
                </div>
            </div>
        </label>
    </div>

    <div class="flex items-center justify-end mt-4">
        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
            {{ __('Already registered?') }}
        </a>

        <button class="ml-4 btn btn-success register-account">

                {{ __('Register') }}

        </button>

    </div>
@endguest

{{-- end main --}}

</div>
</div>
</div>
</section>

@endsection

@push('script-addon')
    <script>
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':"{{ csrf_token() }}"
            }
        });
        $(document).on('click', '.register-account', function (e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "/user/create",
                data: {
                    name:$("#name").val(),
                    address:$("#address").val(),
                    email:$("#email").val(),
                    password:$("#password").val()
                },
                success: function (result ) {
                    if(result.status){
                        swal({
                            title: "Are you sure!",
                            type: "success",
                            confirmButtonClass: "btn-danger",
                            confirmButtonText: "Yes!",
                            showCancelButton: true,
                        });
                    }else{
                        // swal({
                        //     title: "Are you sure!",
                        //     type: "error",
                        //     confirmButtonClass: "btn-danger",
                        //     confirmButtonText: "Yes!",
                        //     showCancelButton: true,
                        // })
                        $(".regis-error").removeClass("d-none");
                        let isi_error = `<ul>`;
                        console.log("create ",result.result)

                        result.result.forEach(function(index,element){
                            isi_error+=`<li class="text-danger">${element}</li>`;
                            // lagi mau dipake?iya kak jm 9 balik magang
                            // ok next time aja kalau gitu nanti di kosan aja
                            // ok
                        });
                        isi_error += `</ul>`;
                        $(".regis-error").childern(".card-body").html(isi_error);
                    }
                }
            });
        });
    </script>
@endpush
