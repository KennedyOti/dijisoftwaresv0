@extends('layouts.app')

@section('content')
    <h2 class="text-center">Login</h2>

    <!-- Session Status -->
    @if (session('status'))
        <div class="alert alert-success mb-4">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="mb-3">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required
                autofocus autocomplete="username">
            @if ($errors->has('email'))
                <div class="text-danger mt-2">
                    {{ $errors->first('email') }}
                </div>
            @endif
        </div>

        <!-- Password -->
        <div class="mb-3">
            <div class="d-flex justify-content-between align-items-center mt-4">
                <label for="password" class="form-label">{{ __('Password') }}</label>
                @if (Route::has('password.request'))
                    <a class="text-decoration-none text-sm text-secondary" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
            <input id="password" class="form-control" type="password" name="password" required
                autocomplete="current-password">
            @if ($errors->has('password'))
                <div class="text-danger mt-2">
                    {{ $errors->first('password') }}
                </div>
            @endif
        </div>

        <!-- Remember Me -->
        <div class="mb-3 form-check">
            <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
            <label for="remember_me" class="form-check-label">{{ __('Remember me') }}</label>
        </div>

        <div class="d-flex justify-content-between align-items-center mt-4">
            <button type="submit" class="btn btn-primary w-100">
                {{ __('Log in') }}
            </button>
        </div>

        <div class="col-12 text-center">
            <div class="my-3" style="display: flex; align-items: center; text-align: center;">
                <span style="flex-grow: 1; border-bottom: 1px solid #000;"></span>
                <span style="margin: 0 10px;">Don't have an account?</span>
                <span style="flex-grow: 1; border-bottom: 1px solid #000;"></span>
            </div>
            <a href="{{ route('register') }}">Create account</a>
        </div>
    </form>
@endsection
