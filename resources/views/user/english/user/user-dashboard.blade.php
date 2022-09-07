<!doctype html>
<html lang="en">

<head>
    @include('user.layoutsForEnglish.head')
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark stroke fixed-top my-nav-bg border-gradient-green">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand ml-auto text-right d-md-block" href="our-sheikh.html"><img
                src="../assets/img/haffez-logo.png" class="img-fluid logo" alt=""></a>

        <div class="container ">
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <div class="d-block ml-auto">
                    <div class="mb-3">
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown ml-auto">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <i class="fa fa-user mr-1"></i> Welcome : {{ Auth::user()->name }} </a>

                                    <div class="dropdown-menu dropdown-menu-right dropdown-cyan"
                                        aria-labelledby="navbarDropdownMenuLink-4">
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </li>
                            @endguest
                            <li class="nav-item">
                                <a class="btn btn-gold btn-lng" href="{{ URL('arabic') }}"> عربي</a>
                            </li>
                        </ul>

                    </div>
                    <div>
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}">Main</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('lesson') }}">My Lesson Dates</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('our-sheikh') }}">Our Honoable Sheikh</a>
                            </li>
                        </ul>

                    </div>
                </div>

            </div>
        </div>
    </nav>

    <!--<section>
    <div class="container">
        <div class="row">
            <div class="col-md-3 text-center">
                <div>
                    <img src="../assets/img/tutor-1.png" alt="">
                    <p>+92 333 9959587</p>
                </div>
            </div>
            <div class="col-md-8">
                lkhjkl

            </div>
        </div>
    </div>
</section>-->
    <section id="our-honor-sheikh" class="about over-pt">

        <div class="container">
            <div class="col-sm-12 mx-auto  mt-5  alert-success" style="text-align: center;  font-size:20px">
                <h1>{{ session('booking_msg') }}</h1>
            </div>
            <br>
            <div class="row">

                <div class="col-md-3 text-center">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('public/user/assets/img/tutor-1.png') }}"
                            alt="Bologna">
                        <div class="card-body">
                            <h5 class="card-title">Sheikh <br>
                                Muhammad Ahmad <br>
                                Khavji</h5>
                            <h6 class="card-subtitle my-3 text-muted">+92 333 9876543</h6>
                            <a href="#" class="card-link">Edit Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <table class="table table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Date</th>
                                <th scope="col">Day</th>
                                <th scope="col">Time</th>
                                <th scope="col">No.of people</th>
                                <th scope="col">Description</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($bookings as $booking)
                                <tr>
                                    <td width="5%">{{ $booking->id }}</td>
                                    <td width="15%">{{ $booking->date }}</td>
                                    <td width="15%">Tuesday</td>
                                    <td width="15%">04:00 PM</td>
                                    <td width="17%">{{ $booking->no_of_people }}</td>
                                    <td width="25%">{{ $booking->description }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </section>

    @include('user.layoutsForEnglish.footer')
</body>

</html>
