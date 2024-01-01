{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

@extends('layouts.auth')

@section('container')

    <div class="row justify-content-center">
        <div class="col-lg-4">
            <main class="m-auto">
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form class="needs-validation" method="POST" action="{{ route('login') }}" novalidate>
                    @csrf

                    <h2 class="mb-4">Log In</h2>

                    <!-- Input email address -->
                    <div class="mt-3">
                        <label for="email">Email</label>
                        
                        <input id="email" class="block form-control mt-2 @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" required />
                        
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }} 
                            </div>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <div class="d-flex justify-content-between">
                            <label for="password">Password</label>

                            <!-- Forgot password -->
                            @if (Route::has('password.request'))
                                <a class="text-decoration-none" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif  
                        </div>

                        <!-- Password -->
                        <input id="password" class="block form-control mt-2 @error('password') is-invalid @enderror" type="password" name="password" required/>

                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }} 
                            </div>
                        @enderror
                    </div>

                    <!-- Remember me -->
                    <div class="form-check text-start my-3">
                        <label for="remember_me" class="">
                            <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                            <span class="form-check-label">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <!-- Submit button -->
                    <button class="btn btn-primary w-100 py-2" type="submit">
                        Log in
                    </button>

                    <!-- Register button -->
                    <p class="mt-3 text-center">
                        Not registered? <a href="/register"> Register now!</a>
                    </p>
                </form>
            </main>
        </div>
    </div>
@endsection