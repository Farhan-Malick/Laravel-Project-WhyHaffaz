<nav class="navbar navbar-expand-lg navbar-dark bg-dark stroke fixed-top my-nav-bg border-gradient-green">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
        aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand ml-auto text-right d-md-block" href="#"><img
            src="{{ url('public/user/assets/img/haffez-logo.png') }}" class="img-fluid logo" alt=""></a>

    <div class="container">
        <div class="collapse navbar-collapse">
            <div class="d-block ml-auto">
                <div class="">
                    <ul class="navbar-nav ml-auto">
                        @if (Auth::guard()->check())
                            <li class="nav-item d-flex ml-auto">
                                <a class="nav-link mb-3 btn-gold text-dark  btn-outline-warning"
                                    style="height:35px;  padding-bottom:10px" href="{{ url('Client-Dashboard') }}"
                                    role="button" data-bs-toggle="" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fa fa-user mr-1 "></i>Hello : {{ Auth::user()->name }} </a>

                            </li>
                            <span class="separator  ml-2"></span>
                            <li class="nav-item  ml-2">
                                <a class="btn btn-gold btn-lng" href="{{ url('/arabic') }}"> عربي</a>
                            </li>

                        @else
                            <li class="nav-item d-flex ml-auto">
                                <a class="nav-link" href="{{ url('/register') }}">Subscribe</a>
                                <span class="separator">/</span>
                                <a class="nav-link" href="{{ url('/login/student') }}">Sign In</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-gold btn-lng mr-2" href="{{ url('/arabic') }}"> عربي</a>
                            </li>
                        @endif
                    </ul>

                    @if (Auth::guard()->check())
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
            @else
                <div>
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0" id="nav">
                        <li class="nav-item active">
                            <a class="nav-link " href="{{ url('#slider') }}">Home<span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('#about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('#whyhaffez') }}">Why Haffez</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('#oursheikh') }}">Our Honoable Sheikh</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('#contact') }}">Contact</a>
                        </li>
                    </ul>

                </div>
                @endif
            </div>

        </div>
    </div>
</nav>
