@extends('layouts.auth')

@section('container')

    <div class="row justify-content-center">
        <div class="col-lg-4">

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>    
            @endif

            @if (session()->has('login-error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('login-error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>    
            @endif

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