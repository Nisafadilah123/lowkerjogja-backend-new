@extends('main.layout')

@section('title', 'Masuk | Lowkerjogja.com')

@section('container')


<section>
    <div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="class">
                <div class="card-body">
                    <img src="img/1.png" alt="logo" class="float-right" width="500px" />
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

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <p class="mb-4 text-center">Masuk</p>

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Kata Sandi') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            {{-- <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div> --}}
            <div class="block mt-4"></div>
            {!! NoCaptcha::renderJs() !!}
            {!! NoCaptcha::display() !!}

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Lupa Kata Sandi ?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Masuk') }}
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
