@extends('vacancy.layout')

@section('title', 'Daftar Perusahaan | Lowkerjogja.com')

@section('container')

<!-- ======= Sign Up Section ======= -->

<section>
    <div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="class">
                <div class="card-body">
                    <img src="img/2.png" alt="logo" class="float-right" width="500px" />
                </div>
            </div>
        </div>

        <div class="col-sm-6">
{{-- main --}}
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}" class="registrasi">
            @csrf

            <div class="class">
                <p class="mb-3 text-center">DAFTAR</p>
            </div>
            <div style="font-size: 10px; color:red;"> * Harap menggunakan email dengan eksistensi @company.com untuk mendaftar</div>
            <br>
            <div>
                <x-jet-label for="name" value="{{ __('Nama Perusahaan') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email Perusahaan') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Kata Sandi') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Konfirmasi Kata Sandi') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <!-- <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" /> -->
                <x-jet-input id="utype" class="block mt-1 w-full" type="hidden" name="utype" value="CPY" required autocomplete="utype" />
            </div>



            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Sudah Daftar ?') }}
                </a>

                <x-jet-button class="ml-4">

                        {{ __('Daftar') }}

                </x-jet-button>

            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>

{{-- end main --}}

</div>
</div>
</div>
</section>

@endsection

@push('script-addon')
    <script>
        // $(document).ready(function(){
        // $.ajax({
        //     type: "POST",
        //     url: "{{ url('/user/create') }}",
        //     data: {
        //     name:$("#name").val(),
        //     address:$("#address").val(),
        //     email:$("#email").val(),
        //     password:$("#password").val()
        //     },
        //     success: function (result){
        //         if(result.status){
        //             swal("Good job!", "You clicked the button!", "success");
        //         }else{
        //             alert("gagal");
        //         }
        //     },
        //     dataType: "json"
        // });
        // });
//         $(document).on('submit', '.registrasi', function (e) {
//             e.preventDefault();
//             var name = $(this).data('name');
//             var address = $(this).data('address');
//             var email = $(this).data('email');
//             var password = $(this).data('password');

//         function() {
//             $.ajax({
//                 type: "POST",
//                 url: "{{url('/registrasi')}}",
//                 data: {
//                     name:name,
//                     address:address,
//                     email:email,
//                     password:password
//                     },
//                 success: function (data) {
//                               //
//                               if(result.status){
//                                 swal({
//                                     title: "Are you sure!",
//                                     type: "success",
//                                     confirmButtonClass: "btn-danger",
//                                     confirmButtonText: "Yes!",
//                                     showCancelButton: true,
//                                 }),
//                               }else{
//                                 swal({
//                                     title: "Are you sure!",
//                                     type: "error",
//                                     confirmButtonClass: "btn-danger",
//                                     confirmButtonText: "Yes!",
//                                     showCancelButton: true,
//                                 }),
//                               }
//                     }
//             });
//     });
// });
    </script>
@endpush
