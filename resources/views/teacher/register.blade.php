@extends('layouts.app')

@section('content')
    <div class="login">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7 mx-auto">
                    <div class="login-wrap">
                        <div class="text-center text-white mb-5">
                            <img src="{{ asset('public/user/assets/img/haffez-logo.png') }}" class="mb-3" alt="">
                            <h2 style="font-family : Philosopher;sans-serif;" class="card-header">
                                {{ isset($url) ? ucwords($url) : '' }} {{ __('Register') }}
                            </h2>

                            <div class="card-body">
                                @isset($url)
                                    <form method="POST" action='{{ url("register/$url") }}'
                                        aria-label="{{ __('Register') }}">
                                    @else
                                        <form method="POST" action="{{ route('teacher-register') }}"
                                            aria-label="{{ __('Register') }}">
                                        @endisset
                                        @csrf

                                        <div class="row mb-3">
                                            <label for="name" class="col-md-4 col-form-label ">{{ __('Name') }}</label>

                                            <div class="col-md-8">
                                                <input id="name" type="text" placeholder="Enter Your Name"
                                                    class="form-control  @error('name') is-invalid @enderror" name="name"
                                                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="phone"
                                                class="col-md-4 col-form-label ">{{ __('Mobile No') }}</label>

                                            <div class="col-md-8">
                                                <input id="phone" type="tel" placeholder="Enter Your Mobile No"
                                                    class="form-control  @error('phone') is-invalid @enderror" name="phone"
                                                    value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                                @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="country"
                                                class="col-md-4 col-form-label ">{{ __('Country') }}</label>

                                            <div class="col-md-8">
                                                <select name="country"
                                                    class="form-control @error('country') is-invalid @enderror  ">
                                                    <option class="text-dark">--- </option>
                                                    <option class="text-dark">Saudi Arabia</option>
                                                    <option class="text-dark">Pakistan</option>
                                                </select>
                                                @error('country')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="email"
                                                class="col-md-4 col-form-label ">{{ __('E-Mail Address') }}</label>

                                            <div class="col-md-8">
                                                <input id="email" type="email" placeholder="Enter Your E-Mail Address"
                                                    class="form-control  @error('email') is-invalid @enderror" name="email"
                                                    value="{{ old('email') }}" required autocomplete="email">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="password"
                                                class="col-md-4 col-form-label ">{{ __('Password') }}</label>

                                            <div class="col-md-8">
                                                <input id="password" type="password" placeholder="Enter Your Password"
                                                    class="form-control  @error('password') is-invalid @enderror"
                                                    name="password" required autocomplete="new-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="password-confirm"
                                                class="col-md-4 col-form-label ">{{ __('Confirm Password') }}</label>

                                            <div class="col-md-8">
                                                <input id="password-confirm" placeholder="Confirm Password" type="password"
                                                    class="form-control " name="password_confirmation" required
                                                    autocomplete="new-password">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="gender"
                                                class="col-md-4 col-form-label ">{{ __('Gender') }}</label>

                                            <div class="col-md-8">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio"
                                                            class="@error('gender') is-invalid @enderror  form-check-input"
                                                            name="gender" value="male"> Male
                                                    </label>
                                                    @error('gender')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <span class="separator"> </span>
                                                    <label class="form-check-label ml-2">
                                                        <input type="radio"
                                                            class="@error('gender') is-invalid @enderror  form-check-input"
                                                            name="gender" value="female"> Female
                                                    </label>
                                                    @error('gender')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-0">
                                            <div class="">
                                                <button type="submit" class="btn btn-gold">
                                                    {{ __('Register') }}
                                                </button>
                                                <span class="btn btn text-white"> Already Registered ? <a
                                                        href="{{ route('login-link') }}">Login here</a></span>
                                            </div>
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        @endsection
