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
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
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
                            <!--                        <li class="nav-item">-->
                            <!--                            <a class="nav-link" href="#contact">Contact</a>-->
                            <!--                        </li>-->
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </nav>


    <section id="our-honor-sheikh" class="about">
        <div class="container">
            <div class="row">
                <!--            <div class="col-xl-5">-->
                <!--                <img src="../assets/img/about-img.png" class="img-fluid" alt="">-->
                <!--            </div>-->
                <div class="col-xl-6 about-p">
                    <div class="mb-3">
                        <img src="{{ asset('public/user/assets/img/tutor-1.png') }}" class="img-fluid" alt="">

                    </div>
                    <a href="#" class="btn btn-gold py-2 px-3 mb-3">take a vacation</a>
                    <h1>Sheikh Ahmed Abdel Hamid</h1>
                    <svg class="mb-3" width="128" height="9" viewBox="0 0 128 9" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="64" cy="4.5" r="4.5" fill="#D6AC34" />
                        <circle cx="72.5" cy="5" r="3" fill="#D6AC34" />
                        <circle cx="55.5" cy="5" r="3" fill="#D6AC34" />
                        <circle cx="78.5" cy="5" r="2" fill="#D6AC34" />
                        <circle cx="49.5" cy="5" r="2" fill="#D6AC34" />
                        <circle cx="82.5" cy="5" r="1" fill="#D6AC34" />
                        <circle cx="45.5" cy="5" r="1" fill="#D6AC34" />
                        <rect y="4.5" width="128" height="1" rx="0.5" fill="#D9B03B" />
                    </svg>
                    <p>A teacher in Al-Azhar, a metaphor for the ten readings, and I am fluent in English. I have worked
                        in the field of memorizing the Qur’an and teaching readings for more than 20 years.</p>

                </div>
                <div class="col-xl-6 about-p">
                    <div>
                        <h3>Novels</h3>
                        <svg class="mb-3" width="128" height="9" viewBox="0 0 128 9" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="64" cy="4.5" r="4.5" fill="#D6AC34" />
                            <circle cx="72.5" cy="5" r="3" fill="#D6AC34" />
                            <circle cx="55.5" cy="5" r="3" fill="#D6AC34" />
                            <circle cx="78.5" cy="5" r="2" fill="#D6AC34" />
                            <circle cx="49.5" cy="5" r="2" fill="#D6AC34" />
                            <circle cx="82.5" cy="5" r="1" fill="#D6AC34" />
                            <circle cx="45.5" cy="5" r="1" fill="#D6AC34" />
                            <rect y="4.5" width="128" height="1" rx="0.5" fill="#D9B03B" />
                        </svg>
                        <ul class="list-unstyled">
                            <li>Hafs from Asim | Shuba An Asim</li>
                            <li>Workshops on Nafi | Qalon on Nafi'</li>
                            <li>Al-Bazzi on the authority of Ibn Kathir | Qunbul on the authority of Ibn Kathir</li>
                            <li>Al-Douri on the authority of Abi Amr | Al-Susi on the authority of Abu Amr</li>
                            <li>Khalaf on Hamza | Khaled on the authority of Hamza</li>
                            <li>Al-Douri about Al-Kisai | Abi Al-Harith on the authority of Al-Kisa’i</li>
                            <li>Hisham on the authority of Ibn Amer | Ibn Dhakwan on the authority of Ibn Aamir</li>
                            <li>Ibn Wardan on the authority of Abi Jaafar | Ibn Jammaz on the authority of Ibn Ja`far
                            </li>
                            <li>Royce on Jacob | Spirit of Jacob</li>
                            <li>Isaac on Khalaf | Idris on Khaf</li>
                            <li>Asim | Imam Nafi'</li>
                            <li>Related people | The Seven Readings</li>
                            <li>Hamza | Ibn Kathir</li>
                            <li>Ibn Amer | Abu Omar</li>
                            <li>Abu Jaafar | kasai</li>
                        </ul>

                    </div>

                </div>
            </div>
            <hr>
            <div class="row mb-5">
                <div class="col-md-12">
                    <h1>Available Appointments</h1>
                </div>
                <div class="col-md-3">


                </div>
            </div>
            <div class="row">
                @foreach ($appointments as $app)
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mb-3">
                        <div class="card shadow">
                            <div class="card-body">
                                <h4 class="mb-3">Day: <span
                                        class="font-weight-bold">{{ $app->day }}</span></h4>
                                <h4 class="mb-3">Time: <span
                                        class="font-weight-bold">{{ $app->time }}</span></h4>
                                <p>Hourly price per person: <span
                                        class="font-weight-bold">{{ $app->Hr_price_per_person }}</span>
                                </p>

                            </div>
                            <div class="card-body card-p btn-gold">
                                <div class="row">
                                    <div class="col">
                                        <a href="{{ URL('book-appointment') }}" class="btn btn-gold btn-block">Book
                                            an
                                            appointment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    </section>



    <section id="footer" class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2">
                    <div class="text-center">
                        <img src="../assets/img/haffez-logo.png" class="mb-5" alt="">
                        <p>Hafez is an integrated electronic platform for distance learning teaching and memorization of
                            the
                            Noble Quran, as we connect those who wish to memorize the Quran everywhere with a
                            distinguished
                            elite of specialized teachers in an easy interactive way and a flexible educational schedule
                            that corresponds to the fast-paced lifestyle.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row py-5">
                <div class="offset-md-1 col-md-4 text-lg-center">
                    <div class="pt-2">
                        <p class="text-white list-title">Subscribe For Latest Updates</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <form class="search-wrapper cf">
                            <input type="text" placeholder="Enter your email..." required style="box-shadow: none">
                            <button type="submit" class="text-capitalize list-title">Sign Up</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="list-title">Site Links</div>
                    <svg class="mb-4" width="88" height="7" viewBox="0 0 88 7" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="44" cy="3.18262" r="3.09375" fill="#D1AD3C" />
                        <circle cx="49.8438" cy="3.52637" r="2.0625" fill="#D1AD3C" />
                        <circle cx="38.1562" cy="3.52637" r="2.0625" fill="#D1AD3C" />
                        <circle cx="53.9688" cy="3.52637" r="1.375" fill="#D1AD3C" />
                        <circle cx="34.0312" cy="3.52637" r="1.375" fill="#D1AD3C" />
                        <circle cx="56.7188" cy="3.52637" r="0.6875" fill="#D1AD3C" />
                        <circle cx="31.2812" cy="3.52637" r="0.6875" fill="#D1AD3C" />
                        <rect y="3.18262" width="88" height="0.6875" rx="0.34375" fill="#D1AD3C" fill-opacity="0.75" />
                    </svg>


                    <ul class="list-unstyled footer-list">
                        <li>Home</li>
                        <li>About</li>
                        <li>Why Haffez</li>
                        <li>Our Honorable Sheikh</li>
                        <li>Contact</li>
                    </ul>

                </div>
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="list-title">Learning</div>
                    <svg class="mb-4" width="88" height="7" viewBox="0 0 88 7" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="44" cy="3.18262" r="3.09375" fill="#D1AD3C" />
                        <circle cx="49.8438" cy="3.52637" r="2.0625" fill="#D1AD3C" />
                        <circle cx="38.1562" cy="3.52637" r="2.0625" fill="#D1AD3C" />
                        <circle cx="53.9688" cy="3.52637" r="1.375" fill="#D1AD3C" />
                        <circle cx="34.0312" cy="3.52637" r="1.375" fill="#D1AD3C" />
                        <circle cx="56.7188" cy="3.52637" r="0.6875" fill="#D1AD3C" />
                        <circle cx="31.2812" cy="3.52637" r="0.6875" fill="#D1AD3C" />
                        <rect y="3.18262" width="88" height="0.6875" rx="0.34375" fill="#D1AD3C" fill-opacity="0.75" />
                    </svg>


                    <ul class="list-unstyled footer-list">
                        <li>Home</li>
                        <li>About</li>
                        <li>Why Haffez</li>
                        <li>Our Honorable Sheikh</li>
                        <li>Contact</li>
                    </ul>

                </div>
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="list-title">Our Services</div>
                    <svg class="mb-4" width="88" height="7" viewBox="0 0 88 7" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="44" cy="3.18262" r="3.09375" fill="#D1AD3C" />
                        <circle cx="49.8438" cy="3.52637" r="2.0625" fill="#D1AD3C" />
                        <circle cx="38.1562" cy="3.52637" r="2.0625" fill="#D1AD3C" />
                        <circle cx="53.9688" cy="3.52637" r="1.375" fill="#D1AD3C" />
                        <circle cx="34.0312" cy="3.52637" r="1.375" fill="#D1AD3C" />
                        <circle cx="56.7188" cy="3.52637" r="0.6875" fill="#D1AD3C" />
                        <circle cx="31.2812" cy="3.52637" r="0.6875" fill="#D1AD3C" />
                        <rect y="3.18262" width="88" height="0.6875" rx="0.34375" fill="#D1AD3C" fill-opacity="0.75" />
                    </svg>


                    <ul class="list-unstyled footer-list">
                        <li>Home</li>
                        <li>About</li>
                        <li>Why Haffez</li>
                        <li>Our Honorable Sheikh</li>
                        <li>Contact</li>
                    </ul>

                </div>
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="list-title">Contact us</div>
                    <svg class="mb-4" width="88" height="7" viewBox="0 0 88 7" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="44" cy="3.18262" r="3.09375" fill="#D1AD3C" />
                        <circle cx="49.8438" cy="3.52637" r="2.0625" fill="#D1AD3C" />
                        <circle cx="38.1562" cy="3.52637" r="2.0625" fill="#D1AD3C" />
                        <circle cx="53.9688" cy="3.52637" r="1.375" fill="#D1AD3C" />
                        <circle cx="34.0312" cy="3.52637" r="1.375" fill="#D1AD3C" />
                        <circle cx="56.7188" cy="3.52637" r="0.6875" fill="#D1AD3C" />
                        <circle cx="31.2812" cy="3.52637" r="0.6875" fill="#D1AD3C" />
                        <rect y="3.18262" width="88" height="0.6875" rx="0.34375" fill="#D1AD3C" fill-opacity="0.75" />
                    </svg>


                    <ul class="list-unstyled footer-list">
                        <li>Email: info@haffezquran.com</li>
                        <li>Mobile / Whatsapp: 01117445406</li>
                        <li>Website: www.haffezquran.com</li>
                        <li>
                            <a href="#" class="mr-2"><img src="../assets/img/facebook.svg" alt=""></a>
                            <a href="#" class="mr-2"><img src="../assets/img/twitter.svg" alt=""></a>
                            <a href="#" class="mr-2"><img src="../assets/img/instagram.svg" alt=""></a>
                            <a href="#"><img src="../assets/img/linkedin.svg" alt=""></a>

                        </li>
                    </ul>

                </div>
            </div>


        </div>
        <hr class="footer-hr w-100">
        <div class="py-3">
            <div class="col-12 text-center">
                <h6 class="text-white">Haffez Quran - All Rights Reserved - Design & Developed By Artivay & CDOXS
                </h6>
            </div>
        </div>


    </section>


    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/owlcarousel2.js"></script>
    <script src="../assets/js/bootstrap.js"></script>

    <script>
        jQuery("#carousel").owlCarousel({
            autoplay: false,
            rewind: true,
            /* use rewind if you don't want loop */
            margin: 20,
            /*
               animateOut: 'fadeOut',
               animateIn: 'fadeIn',
               */
            responsiveClass: true,
            autoHeight: false,
            autoplayTimeout: 7000,
            smartSpeed: 800,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },

                600: {
                    items: 3
                },

                1024: {
                    items: 4
                },

                1366: {
                    items: 6
                }
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            // Add smooth scrolling to all links
            $("a").on('click', function(event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top - 170
                    }, 800, function() {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        });
    </script>


</body>

</html>
