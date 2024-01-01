{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


@extends('layouts.auth')

@section('container')

    <div class="row justify-content-center">
        <div class="col-sm-4">
            <main class="m-auto">
                
                <form method="POST" action="{{ route('register') }}">
                    @csrf
            
                    <h2 class="mb-4">Register</h2>

                    <!-- Name -->
                    <div class="mt-2">
                        <label for="name">Name</label>

                        <input id="name" class="block form-control mt-2 @error('name') is-invalid @enderror" type="text" name="name" :value="old('name')"/>

                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }} 
                            </div>
                        @enderror
                    </div>

                    <!-- Userame -->
                    <div class="mt-2">
                        <label for="username">Username</label>
                        
                        <input id="username" class="block form-control mt-2 @error('username') is-invalid @enderror" type="text" name="username" :value="old('username')"/>
                        
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }} 
                            </div>
                        @enderror
                    </div>

                    <!-- Email address -->
                    <div class="mt-2">
                        <label for="email">Email</label>
                        
                        <input id="email" class="block form-control mt-2 @error('email') is-invalid @enderror" type="email" name="email" :value="old('email')"/>
                        
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }} 
                            </div>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="mt-2">
                        <label for="password">Password</label>

                        <input id="password" class="block form-control mt-2 @error('password') is-invalid @enderror" type="password" name="password" />
                        
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }} 
                            </div>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-2">
                        <label for="password">Comfirm Password</label>

                        <input id="password_confirmation" class="block form-control mt-2 @error('password_confirmation') is-invalid @enderror" type="password" name="password_confirmation" />
                        
                        @error('password_confirmation')
                            <div class="invalid-feedback">
                                {{ $message }} 
                            </div>
                        @enderror
                    </div>

                    <!-- Submit button -->
                    <x-primary-button class="btn btn-primary w-100 py-2 mt-3">
                        {{ __('Register') }}
                    </x-primary-button>

                    <!-- Log in button -->
                    <p class="mt-3 text-center">
                        Already registered? <a href="/login"> Log in here!</a>
                    </p>
                </form>

            </main>
        </div>
    </div>
@endsection