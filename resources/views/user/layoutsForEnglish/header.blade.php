
<nav class="navbar navbar-expand-lg navbar-dark bg-dark stroke fixed-top my-nav-bg border-gradient-green">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand ml-auto text-right d-md-block" href="{{ url('homefront') }}"><img src="{{ url('public/user/assets/img/haffez-logo.png') }}" class="img-fluid logo" alt=""></a>

    <div class="container">
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <div class="d-block ml-auto">
                <div class="mb-3">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item d-flex ml-auto">
                            <a class="nav-link" href="{{ url('registration') }}">Subscribe</a> <span class="separator">/</span> <a class="nav-link" href="{{ url('login') }}">Sign In</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-gold btn-lng" href="{{ url('/arabic') }}"> عربي</a>
                        </li>
                    </ul>

                </div>
                <div>
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('#slider') }}">Home <span class="sr-only">(current)</span></a>
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
            </div>

        </div>
    </div>
</nav>