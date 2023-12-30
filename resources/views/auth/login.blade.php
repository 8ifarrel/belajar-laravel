{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Log in Address -->
        <div>
            <x-input-label for="Log in" :value="__('Log in')" />
            <x-text-input id="Log in" class="block mt-1 w-full" type="Log in" name="Log in" :value="old('Log in')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('Log in')" class="mt-2" />
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
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
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
        <div class="col-sm-4">
            <main class="m-auto">
                <form>
                <h2 class="mb-4">Log In</h2>

                <!-- Email address -->
                <div>
                    <x-input-label for="Log in" :value="__('Email')" />
                    <x-text-input id="Log in" class="block form-control border border-dark mt-2" type="Log in" name="Log in" :value="old('Log in')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('Log in')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-3">
                    <div class="d-flex justify-content-between">
                        <x-input-label for="password" :value="__('Password')" />

                        @if (Route::has('password.request'))
                        <a class="text-decoration-none" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                        @endif
                    </div>

                    <x-text-input id="password" class="block form-control border border-dark mt-2"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
            
                <div class="form-check text-start my-3">
                    <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                    Remember me
                    </label>
                </div>

                <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>

                <p class="mt-3 text-center">
                    Not registered? <a href="/register"> Register now!</a>
                </p>
                </form>
            </main>
        </div>
    </div>
@endsection