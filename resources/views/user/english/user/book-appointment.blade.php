<!doctype html>
<html lang="en">
<head>
   @include('user.layoutsForEnglish.head')
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark stroke fixed-top my-nav-bg border-gradient-green">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand ml-auto text-right d-md-block" href="our-sheikh.html"><img src="../assets/img/haffez-logo.png" class="img-fluid logo" alt=""></a>

    <div class="container">
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
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown ml-auto">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="fa fa-user mr-1"></i> Welcome :  {{ Auth::user()->name }} </a>

                                <div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    {{ csrf_field() }}
                                    </form>
                                </div>
                            </li>
                        @endguest
                        <li class="nav-item">
                            <a class="btn btn-gold btn-lng" href="{{URL('arabic')}}"> عربي</a>
                        </li>
                    </ul>

                </div>
                <div>
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

                    <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}">Main</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('lesson')}}">My Lesson Dates</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('our-sheikh')}}">Our Honoable Sheikh</a>
                        </li>
<!--                        <li class="nav-item">-->
<!--                            <a class="nav-link" href="#contact">Contact</a>-->
<!--                        </li>-->
                    </ul>

                </div>
            </div>

        </div>
    </div>
</nav>


<section id="" class="about">
    <div class="container">
        <div class="row">
        <div class="col-sm-8 mx-auto  mt-5  alert-success" style="text-align: center;  font-size:20px"><h1>{{session('booking_msg2')}}</h1></div>
            <div class="col-xl-8 mx-auto appointment mt-5">
          
                <h1>Appointment Booking</h1>
                <svg class="mb-3" width="128" height="9" viewBox="0 0 128 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="64" cy="4.5" r="4.5" fill="#D6AC34"/>
                    <circle cx="72.5" cy="5" r="3" fill="#D6AC34"/>
                    <circle cx="55.5" cy="5" r="3" fill="#D6AC34"/>
                    <circle cx="78.5" cy="5" r="2" fill="#D6AC34"/>
                    <circle cx="49.5" cy="5" r="2" fill="#D6AC34"/>
                    <circle cx="82.5" cy="5" r="1" fill="#D6AC34"/>
                    <circle cx="45.5" cy="5" r="1" fill="#D6AC34"/>
                    <rect y="4.5" width="128" height="1" rx="0.5" fill="#D9B03B"/>
                </svg>
                <form action="{{ route('submit-your-booking') }}" method="post">
                    
                    @csrf
                    <div>
                        <p>Do you want to book an appointment on Sunday at 4:00 PM</p>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" id="" name="name" placeholder="Enter Your Registered Name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Choose the date on Sunday at 16:00 , which wants the booking</label>
                        <input type="date" id="datepick" name="date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>No of people</label>
                        <select class="custom-select" name="no_of_people">
                            <option name="no_of_people" selected>Choose no of people</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                        </select>
                        <span style="color: green">Hourly rate per person: 30</span>
                    </div>
                    <div class="form-group">
                        <label>Do you have any aspirations or special requests from the lesson? (my choice)</label>
                        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                
                <a href="{{URL('/user/english/user/our-sheikh')}}" class="btn btn-gold">Cancel</a>
                <button type="submit" name="submit" id="submit" class="btn btn-gold">Confirm</button>
                </form>
            </div>
        </div>
    </div>
</section>


@include('user.layoutsForEnglish.footer')
</body>

</html>