@extends('main.layout')

@section('title', 'Register Page | Lowkerjogja.com')

@section('container')


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
                @guest
                <form method="POST" action="{{ route('registrasi') }}" class="registrasi">
                    @csrf

                    <div class="class">
                        <p class="mb-3 text-center">Register</p>
                    </div>
                    <div>
                        <label for="name" value="{{ __('Name') }}" />
                        <input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                            autofocus autocomplete="name" />
                    </div>

                    <div>
                        <label for="name" value="{{ __('Address') }}" />
                        <input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')"
                            required autofocus autocomplete="address" />
                    </div>

                    <div class="mt-4">
                        <label for="email" value="{{ __('Email') }}" />
                        <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                            required />
                    </div>

                    <div class="mt-4">
                        <label for="password" value="{{ __('Password') }}" />
                        <input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="new-password" />
                    </div>

                    <div class="mt-4">
                        <label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                        <input id="password_confirmation" class="block mt-1 w-full" type="password"
                            name="password_confirmation" required autocomplete="new-password" />
                    </div>
                    <div class="mt-4">
                        <label for="terms">
                            <div class="flex items-center">
                                <checkbox name="terms" id="terms" />
                                <div class="ml-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'"
                                        class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms
                                        of Service').'</a>',
                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'"
                                        class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy
                                        Policy').'</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <button class="ml-4">

                            {{ __('Register') }}

                        </button>

                    </div>
                </form>
                @endguest
                {{-- end main --}}

            </div>
        </div>
    </div>
</section>

@endsection

@push('script-addon')
<script>
$(document).on("submit", ".registrasi", function() {
    swal("Regis");
});
// $(".registrasi")
</script>
@endpush