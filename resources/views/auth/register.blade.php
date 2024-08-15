@extends('layouts.app')

@section('content')
    <h2 class="text-center">Create an account</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="mb-3">
            <label for="name" class="form-label">{{ __('Name') }}</label>
            <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}" required
                autofocus autocomplete="name">
            @if ($errors->has('name'))
                <div class="text-danger mt-2">
                    {{ $errors->first('name') }}
                </div>
            @endif
        </div>

        <!-- Email Address -->
        <div class="mb-3 mt-4">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required
                autocomplete="username">
            @if ($errors->has('email'))
                <div class="text-danger mt-2">
                    {{ $errors->first('email') }}
                </div>
            @endif
        </div>

        <!-- Password -->
        <div class="mb-3 mt-4">
            <label for="password" class="form-label">{{ __('Password') }}</label>
            <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password">
            @if ($errors->has('password'))
                <div class="text-danger mt-2">
                    {{ $errors->first('password') }}
                </div>
            @endif
        </div>

        <!-- Confirm Password -->
        <div class="mb-3 mt-4">
            <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
            <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required
                autocomplete="new-password">
            @if ($errors->has('password_confirmation'))
                <div class="text-danger mt-2">
                    {{ $errors->first('password_confirmation') }}
                </div>
            @endif
        </div>

        <!-- Already Registered Link -->
        <div class="d-flex mt-4">
            <button type="submit" class="btn btn-primary w-100">
                {{ __('Register') }}
            </button>
        </div>

        <div class="col-12 text-center">
            <div class="my-3" style="display: flex; align-items: center; text-align: center;">
                <span style="flex-grow: 1; border-bottom: 1px solid #000;"></span>
                <span style="margin: 0 10px;">Have an account?</span>
                <span style="flex-grow: 1; border-bottom: 1px solid #000;"></span>
            </div>
            <a href="{{ route('login') }}">Login</a>
        </div>
    </form>
@endsection
