@extends('layouts.home')

@php
    $hideHeader = true;
@endphp

@section('content')
    <section class="login-section">
        <div class="container">
            <div class="row justify-content-center" style="    align-items: center;
            margin: auto;
            height: 100vh;">
                <div class="col-md-6 col-lg-5">
                    <div class="card shadow-lg border-0 rounded-4">
                        <div class="card-body p-5">
                            <div class="text-center mb-4">
                                <h2 class="pbmit-title">Welcome Back</h2>
                                <p class="text-muted">Please sign in to continue</p>
                            </div>

                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4 alert alert-info" :status="session('status')" />

                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <!-- Email Address -->
                                <div class="mb-3">
                                    <x-input-label for="email" :value="__('Email')" />
                                    <input id="email" class="form-control form-control-lg bg-light" type="email"
                                        name="email" :value="old('email')" required autofocus autocomplete="username"
                                        placeholder="Enter your email" style="border-radius: 10px; border: none;">
                                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger small" />
                                </div>

                                <!-- Password -->
                                <div class="mb-3">
                                    <x-input-label for="password" :value="__('Password')" />
                                    <input id="password" class="form-control form-control-lg bg-light" type="password"
                                        name="password" required autocomplete="current-password"
                                        placeholder="Enter your password" style="border-radius: 10px; border: none;">
                                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger small" />
                                </div>

                                <!-- Remember Me -->
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <div class="form-check">
                                        <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                                        <label for="remember_me" class="form-check-label text-muted small">
                                            {{ __('Remember me') }}
                                        </label>
                                    </div>
                                    @if (Route::has('password.request'))
                                        <a class="small text-muted text-decoration-none" href="{{ route('password.request') }}">
                                            {{ __('Forgot password?') }}
                                        </a>
                                    @endif
                                </div>

                                <div class="d-grid">
                                    <button type="submit" class="pbmit-btn py-3">
                                        <span class="pbmit-button-text">{{ __('Log in') }}</span>
                                        <span class="pbmit-button-icon-wrapper">
                                            <span class="pbmit-button-icon">
                                                <i class="pbmit-base-icon-black-arrow-1"></i>
                                            </span>
                                        </span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@php
    $hideFooter = true;
@endphp