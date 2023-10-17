@extends('layouts.app')
@section('admin_styles')
    <style>
        .hide {
            display: none;
        }

        .content {
            padding: 0 !important;
        }

        .fryderyk_dev_login_box {
            min-width: 338px !important;
        }
    </style>
@endsection
@section('dashboardHeading_style', 'hide')
@section('content')
    <div class="fryderyk_dev_login_container">
        <div class="fryderyk_dev_login_box">
            <div class="fryderyk_dev_login_logobox">
                <img src="{{ asset('assets/img/logo_fryderyk.svg') }}" alt="">
            </div>
            <div class="fryderyk_dev_login_box_body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="fry_grid_2">
                        <label for="email">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    </div>
                    <div class="fry_grid_2">
                        <label for="password">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password">
                    </div>
                    <div class="text-right">
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot your Password?') }}
                        </a>
                        <button type="submit" class="fry btn-login">
                            {{ __('Login') }}
                        </button>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </form>
            </div>
        </div>
    </div>
    <div class="fryderyk_dev_back">
        <a href="/">Back</a>
    </div>
@endsection
