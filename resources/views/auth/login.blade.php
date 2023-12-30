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

@section('body')
  <main class="m-auto">
        <form>
            <h3 class="mb-4">Log In</h3>
        
            <!-- Email -->
            <div>
                <x-input-label for="Log in" :value="__('Email address')" />
                <x-text-input id="Log in" class="block form-control" type="Log in" name="Log in" :value="old('Log in')" required autofocus autocomplete="username"/>
                <x-input-error :messages="$errors->get('Log in')" class="mt-2" />
            </div>

            <!-- Password -->
            <div>            
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="block form-control" type="password" name="password" required autocomplete="current-password" placeholder=""/>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Forgot password -->
            <div class="mb-3">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

            <div class="d-flex justify-content-between">
                <!-- Remember me-->
                <div class="form-check text-start block my-auto">
                    <label for="remember_me" class="form-check-label">
                        <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                        <span>{{ __('Remember me') }}</span>
                    </label>
                </div>

                <!-- Log in -->
                <button class="btn btn-primary" type="submit">Log in</button>
            </div>

            <!-- Register -->
            <p class="mt-2 text-center">Not registered? <a href="/register">Register now!</a></p>
        </form>
    </main>
@endsection