@extends('layouts.app')
@csrf

@section('content')
    <div class="login">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7 mx-auto">
                    <div class="login-wrap">
                        <div class="text-center text-white mb-5">

                            <div class="col-sm-12" style="text-align: center; color:gold; font-size:20px">
                                {{ session('fail') }}{{ session('fail_login') }}</div>
                            <img src="{{ asset('public/user/assets/img/haffez-logo.png') }}" class="mb-3" alt="">
                            <h2 style="font-family : Philosopher;sans-serif;">{{ isset($url) ? ucwords($url) : '' }}
                                {{ __('Login Form') }}</h2>
                        </div>
                        <div class="card-body">
                            @isset($url)
                                <form method="POST" action='{{ url("login/$url") }}' aria-label="{{ __('Login') }}">
                                @else
                                    <form method="POST" action="{{ route('teacher-login') }}"
                                        aria-label="{{ __('Login') }}">
                                    @endisset
                                    @csrf

                                    <div class="row mb-3 ">
                                        <label for="email"
                                            class="col-md-4 col-form-label text-white">{{ __('E-Mail Address') }}</label>

                                        <div class="col-md-8">
                                            <input id="email" type="email" placeholder="Enter Your E-Mail Address"
                                                class="form-control text-dark @error('email') is-invalid @enderror"
                                                name="email" value="{{ old('email') }}" required autocomplete="email"
                                                autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="password"
                                            class="col-md-4 col-form-label text-white">{{ __('Password') }}</label>

                                        <div class="col-md-8">
                                            <input id="password" type="password" placeholder="Enter Your Password"
                                                class="form-control text-dark @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-8 offset-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-0">
                                        <div class="">
                                            <button type="submit" class="btn btn-gold">
                                                {{ __('Login') }}
                                            </button>
                                            <span class="btn btn text-white"> Not Registered ? <a
                                                    href="{{ route('teacher-register') }}">Register here</a></span>
                                        </div>

                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    @endsection
