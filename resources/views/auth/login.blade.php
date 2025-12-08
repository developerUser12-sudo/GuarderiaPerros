@extends('layouts.app')

@section('content')

<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="card shadow-lg p-4" style="max-width: 450px; width: 100%;">
        
        <h2 class="text-center mb-4">Iniciar sesión</h2>

        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div class="mb-3">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full form-control" 
                    type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mb-3">
                <x-input-label for="password" :value="__('Contraseña')" />
                <x-text-input id="password" class="block mt-1 w-full form-control" 
                    type="password" name="password" required />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="mb-3 form-check">
                <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                <label class="form-check-label" for="remember_me">
                    {{ __('Recuérdame') }}
                </label>

            </div>
            <div class="mb-3 ">
                <a class="text-sm text-decoration-none" href="{{ route('register') }}">
                    {{ __('¿No tienes cuenta?') }}
                </a>
            </div>

            <!-- Footer -->
            <div class="d-flex justify-content-between align-items-center mt-4">
                @if (Route::has('password.request'))
                    <a class="text-sm text-decoration-none" href="{{ route('password.request') }}">
                        {{ __('¿Contraseña olvidada?') }}
                    </a>
                @endif

                <x-primary-button class="verde">
                    {{ __('Iniciar sesión') }}
                </x-primary-button>
            </div>

        </form>
    </div>
</div>

@endsection
