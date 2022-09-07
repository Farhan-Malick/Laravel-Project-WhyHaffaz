<nav class="navbar navbar-expand-lg navbar-dark bg-dark stroke fixed-top my-nav-bg border-gradient-green">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand mr-auto text-left d-md-block" href="#"><img src="{{ url('public/user/assets/img/haffez-logo.png') }}" class="img-fluid logo" alt=""></a>

    <div class="container">

        <div class="collapse navbar-collapse">
            <div class="d-block mr-auto">
                <div class="mb-3">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item d-flex mr-auto">
                            <a class="nav-link" href="{{ url('registrationforArabic') }}">اشترك الآن</a> <span class="separator">/</span> <a class="nav-link" href="{{ url('loginforArabic') }}">تسجيل الدخول</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-gold btn-lng" href="{{ url('/') }}">ENG</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0"  id="arabicNav">
                        <li class="nav-item active">
                            <a class="nav-link " href="{{ url('#slider') }}">الرئيسية</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('#about') }}">من نحن</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('#why-haffez') }}">مميزاتنا</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('#our-tutors') }}">شيوخنا الأفاضل</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('#contact') }}">الاتصال بنا</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</nav>