<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Haffez Quraan</title>

    <meta name="keywords" content="Haffez Quraan" />
    <meta name="description"
        content="Hafez is an integrated electronic platform for distance learning teaching and memorization of the Noble Quran, as we connect those who wish to memorize the Quran everywhere with a distinguished elite of specialized teachers in an easy interactive way and a flexible educational schedule that corresponds to the fast-paced lifestyle.">
    <meta name="author" content="Powered by CDOXS">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/haffez-logo.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="assets/img/haffez-logo.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">


    <!-- Web Fonts -->

    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&family=Philosopher:wght@400;700&display=swap"
        rel="stylesheet">

    <!-- Fontawesome -->

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('public/user/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('public/user/assets/css/OwlCarousel2.css') }}">
    <link rel="stylesheet" href="{{ asset('public/user/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('public/user/assets/css/style.css') }}">
</head>

<body>

    <div class="login">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7 mx-auto">
                    <div class="login-wrap">
                        <div class="text-center text-white mb-5">
                            <img src="assets/img/haffez-logo.png" class="mb-3" alt="">
                            <h2>Register as a new subscriber</h2>
                            <div class="col-sm-12 text-white" style="text-align: center; ">{{ session('reg_msg') }}</div>
                        </div>
                        <form class="login-form" action="{{ route('user-register') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">{{ __('Name') }}</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror colour-white"
                                    value="{{ old('name') }}" name="name" id="name" aria-describedby="emailHelp"
                                    placeholder="Enter Your Name">
                                @error('name')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name">{{ __('Phone') }}</label>
                                <input type="tel" class="form-control @error('phone') is-invalid @enderror text-white"
                                    value="{{ old('phone') }}" name="phone" id="phone" aria-describedby="emailHelp"
                                    placeholder="Enter Your Phone">
                                @error('phone')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group ">
                                <label name="country">{{ __('Country') }}</label>
                                <select name="country"
                                    class="form-control @error('country') is-invalid @enderror text-white">
                                    <option style="color:black">Saudi Arabia</option>
                                    <option style="color:black">Pakistan</option>
                                </select>
                                @error('country')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">{{ __('Email') }}</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror text-white"
                                    value="{{ old('email') }}" name="email" id="email" aria-describedby="emailHelp"
                                    placeholder="Your Email">
                                @error('email')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password2">{{ __('Password') }}</label>
                                <input type="password"
                                    class="form-control @error('password') is-invalid @enderror text-white"
                                    name="password" id="password2" placeholder="Password">
                                @error('password')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Gender: </label>

                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio"
                                            class="@error('password') is-invalid @enderror text-white form-check-input"
                                            name="gender" value="male">Male

                                    </label>
                                    @error('gender')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="gender" value="female">Female

                                        @error('gender')
                                            <span>{{ $message }}</span>
                                        @enderror
                                    </label>
                                </div>
                            </div>
                            <button type="submit" name="submit" id="submit"
                                class="btn btn-gold">{{ __('Register') }}</button>
                            <span class="ml-5"> Already Registered ? <a href="{{ URL('/login') }}">Login
                                    here</a></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/owlcarousel2.js"></script>
    <script src="assets/js/bootstrap.js"></script>



</body>

</html>
