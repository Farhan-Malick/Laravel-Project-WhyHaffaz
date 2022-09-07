<!doctype html>
<html lang="en">
<head>
   @include('user.layoutsForEnglish.head')
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css"> 
</head>

<body>

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


<section id="our-honor-sheikh" class="about">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 about-p">
                <h1>Our Honorable Sheikhs</h1>
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
                <p>Rather, it is a glorious Qur’an on a preserved tablet.</p>
                <p>We have chosen for you an elite group of sheikhs who are specialized and certified in the memorization of the Noble Qur’an to ensure that the Book of God is memorized, and that its rulings are learned and recited in the correct manner. To enable women and girls to memorize and recite the Book of God, Hafez provides specialized memorizers for girls and women to memorize. We were also keen to provide a distinguished group specialized in dealing with different ages, including children, adults, and different abilities, to meet all needs with the latest educational methods.</p>
            </div>
        </div>
    </div>
</section>
<section id="contact" class="contact btn-gold py-5">
    <div class="container">
        <div class="row">

           <div class="col-3">
               <label>Type</label>

               <select class="custom-select">
                   <option selected>Everyday</option>
                   <option value="1">Male</option>
                   <option value="2">Female</option>
               </select>
           </div>

            <div class="col-3">
                <label>Fee</label>
                <select class="custom-select">
                    <option selected>Any Fee</option>
                    <option value="1">Maximum Fee 20.00 EGP </option>
                    <option value="2">Maximum Fee 25.00 EGP </option>
                    <option value="3">Maximum Fee 30.00 EGP </option>
                    <option value="4">Maximum Fee 35.00 EGP </option>
                    <option value="5">Maximum Fee 40.00 EGP </option>
                    <option value="6">Maximum Fee 45.00 EGP </option>
                    <option value="7">Maximum Fee 50.00 EGP </option>
                    <option value="8">Maximum Fee 75.00 EGP </option>
                    <option value="9">Maximum Fee 100.00 EGP </option>
                </select>
            </div>

            <div class="col-3">
                <label>Day</label>
                <select class="custom-select">
                    <option selected>Everyday</option>
                    <option value="1">Saturday</option>
                    <option value="2">Sunday</option>
                    <option value="3">Monday</option>
                    <option value="4">Tuesday</option>
                    <option value="5">Wednesday</option>
                    <option value="6">Thursday</option>
                    <option value="7">Friday</option>
                </select>
            </div>
            <div class="col-3">
                <label>Time</label>

                <select class="custom-select">
                    <option selected>Anytime</option>
                    <option value="1">12:00 AM</option>
                    <option value="1">01:00 AM</option>
                    <option value="1">02:00 AM</option>
                    <option value="1">03:00 AM</option>
                    <option value="1">04:00 AM</option>
                    <option value="1">05:00 AM</option>
                    <option value="1">06:00 AM</option>
                    <option value="1">07:00 AM</option>
                    <option value="1">08:00 AM</option>
                    <option value="1">09:00 AM</option>
                    <option value="1">10:00 AM</option>
                    <option value="1">11:00 AM</option>
                    <option value="2">12:00 PM</option>
                    <option value="2">01:00 PM</option>
                    <option value="2">02:00 PM</option>
                    <option value="2">03:00 PM</option>
                    <option value="2">04:00 PM</option>
                    <option value="2">05:00 PM</option>
                    <option value="2">06:00 PM</option>
                    <option value="2">07:00 PM</option>
                    <option value="2">08:00 PM</option>
                    <option value="2">09:00 PM</option>
                    <option value="2">10:00 PM</option>
                    <option value="2">11:00 PM</option>
                </select>
            </div>

            <div class="col-12 mt-3 text-center">
                <a href="#" class="btn btn-gold border-light">Search</a>
            </div>

        </div>

    </div>

</section>

<!-- <section id="" class="our-tutors pt-3 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div>
                   <p>The number of search results is 33 sheikhs</p>

                </div>
            </div>
        </div>
    </div>
    <div class="container pt-3">
        <div class="row">
            <div class="col-md-2 mb-3">
                <a href="{{URL('sheikh-details')}}" class="">
                    <div class="sheikh">
                        <img src="{{asset('public/user/assets/img/tutor-1.png')}}" class="img-fluid" alt="">
                        <div class="sheikh-info tutor-info-bg pt-4 pb-1 text-center">
                            <h2 class="text-center">Sheikh <br>
                                Muhammad Ahmad <br>
                                Khavji
                            </h2>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2 mb-3">
                <div class="">
                    <div class="sheikh">
                        <img src="{{asset('public/user/assets/img/tutor-1.png')}}" class="img-fluid" alt="">
                        <div class="sheikh-info tutor-info-bg pt-4 pb-1 text-center">
                            <h2 class="text-center">Sheikh <br>
                                Muhammad Ahmad <br>
                                Khavji
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mb-3">
                <div class="">
                    <div class="sheikh">
                        <img src="{{asset('public/user/assets/img/tutor-1.png')}}" class="img-fluid" alt="">
                        <div class="sheikh-info tutor-info-bg pt-4 pb-1 text-center">
                            <h2 class="text-center">Sheikh <br>
                                Muhammad Ahmad <br>
                                Khavji
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mb-3">
                <div class="">
                    <div class="sheikh">
                        <img src="{{asset('public/user/assets/img/tutor-1.png')}}" class="img-fluid" alt="">
                        <div class="sheikh-info tutor-info-bg pt-4 pb-1 text-center">
                            <h2 class="text-center">Sheikh <br>
                                Muhammad Ahmad <br>
                                Khavji
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mb-3">
                <div class="">
                    <div class="sheikh">
                        <img src="{{asset('public/user/assets/img/tutor-1.png')}}" class="img-fluid" alt="">
                        <div class="sheikh-info tutor-info-bg pt-4 pb-1 text-center">
                            <h2 class="text-center">Sheikh <br>
                                Muhammad Ahmad <br>
                                Khavji
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mb-3">
                <div class="">
                    <div class="sheikh">
                        <img src="{{asset('public/user/assets/img/tutor-1.png')}}" class="img-fluid" alt="">
                        <div class="sheikh-info tutor-info-bg pt-4 pb-1 text-center">
                            <h2 class="text-center">Sheikh <br>
                                Muhammad Ahmad <br>
                                Khavji
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mb-3">
                <div class="">
                    <div class="sheikh">
                        <img src="{{asset('public/user/assets/img/tutor-1.png')}}" class="img-fluid" alt="">
                        <div class="sheikh-info tutor-info-bg pt-4 pb-1 text-center">
                            <h2 class="text-center">Sheikh <br>
                                Muhammad Ahmad <br>
                                Khavji
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mb-3">
                <div class="">
                    <div class="sheikh">
                        <img src="{{asset('public/user/assets/img/tutor-1.png')}}" class="img-fluid" alt="">
                        <div class="sheikh-info tutor-info-bg pt-4 pb-1 text-center">
                            <h2 class="text-center">Sheikh <br>
                                Muhammad Ahmad <br>
                                Khavji
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mb-3">
                <div class="">
                    <div class="sheikh">
                        <img src="{{asset('public/user/assets/img/tutor-1.png')}}" class="img-fluid" alt="">
                        <div class="sheikh-info tutor-info-bg pt-4 pb-1 text-center">
                            <h2 class="text-center">Sheikh <br>
                                Muhammad Ahmad <br>
                                Khavji
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mb-3">
                <div class="">
                    <div class="sheikh">
                        <img src="{{asset('public/user/assets/img/tutor-1.png')}}" class="img-fluid" alt="">
                        <div class="sheikh-info tutor-info-bg pt-4 pb-1 text-center">
                            <h2 class="text-center">Sheikh <br>
                                Muhammad Ahmad <br>
                                Khavji
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mb-3">
                <div class="">
                    <div class="sheikh">
                        <img src="{{asset('public/user/assets/img/tutor-1.png')}}" class="img-fluid" alt="">
                        <div class="sheikh-info tutor-info-bg pt-4 pb-1 text-center">
                            <h2 class="text-center">Sheikh <br>
                                Muhammad Ahmad <br>
                                Khavji
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mb-3">
                <div class="">
                    <div class="sheikh">
                        <img src="{{asset('public/user/assets/img/tutor-1.png')}}" class="img-fluid" alt="">
                        <div class="sheikh-info tutor-info-bg pt-4 pb-1 text-center">
                            <h2 class="text-center">Sheikh <br>
                                Muhammad Ahmad <br>
                                Khavji
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mb-3">
                <div class="">
                    <div class="sheikh">
                        <img src="{{asset('public/user/assets/img/tutor-1.png')}}" class="img-fluid" alt="">
                        <div class="sheikh-info tutor-info-bg pt-4 pb-1 text-center">
                            <h2 class="text-center">Sheikh <br>
                                Muhammad Ahmad <br>
                                Khavji
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mb-3">
                <div class="">
                    <div class="sheikh">
                        <img src="{{asset('public/user/assets/img/tutor-1.png')}}" class="img-fluid" alt="">
                        <div class="sheikh-info tutor-info-bg pt-4 pb-1 text-center">
                            <h2 class="text-center">Sheikh <br>
                                Muhammad Ahmad <br>
                                Khavji
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mb-3">
                <div class="">
                    <div class="sheikh">
                        <img src="{{asset('public/user/assets/img/tutor-1.png')}}" class="img-fluid" alt="">
                        <div class="sheikh-info tutor-info-bg pt-4 pb-1 text-center">
                            <h2 class="text-center">Sheikh <br>
                                Muhammad Ahmad <br>
                                Khavji
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mb-3">
                <div class="">
                    <div class="sheikh">
                        <img src="{{asset('public/user/assets/img/tutor-1.png')}}" class="img-fluid" alt="">
                        <div class="sheikh-info tutor-info-bg pt-4 pb-1 text-center">
                            <h2 class="text-center">Sheikh <br>
                                Muhammad Ahmad <br>
                                Khavji
                            </h2>
                        </div>
                    </div>
                </div>
            </div>




        </div>


    </div>

</section> -->

<section id="oursheikh"  class="about our-tutors tutor-p">
<div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div>
                   
                    <h1 class="mb-0 ">Our Honorable Sheikhs</h1>
                    <svg class="mb-4" width="128" height="9" viewBox="0 0 128 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="64" cy="4.5" r="4.5" fill="#BE8A00"/>
                        <circle cx="72.5" cy="5" r="3" fill="#BE8A00"/>
                        <circle cx="55.5" cy="5" r="3" fill="#BE8A00"/>
                        <circle cx="78.5" cy="5" r="2" fill="#BE8A00"/>
                        <circle cx="49.5" cy="5" r="2" fill="#BE8A00"/>
                        <circle cx="82.5" cy="5" r="1" fill="#BE8A00"/>
                        <circle cx="45.5" cy="5" r="1" fill="#BE8A00"/>
                        <rect y="4.5" width="128" height="1" rx="0.5" fill="#BE8A00"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-12">
                <div class="owl-slider">
                    <div id="carousel" class="owl-carousel">
                        @foreach($teacher as $teachers)
                        <div class="item">
                            <div class="tutor">
                            <a href="{{URL('sheikh-details')}}" class="">
                                <img src="{{ asset('storage/app/public/post/Teachers_images/'.$teachers->image) }}" alt="">
                                <div class="tutor-info tutor-info-bg pt-5 pb-3 text-center">
                                    <svg class="mb-2" width="128" height="9" viewBox="0 0 128 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="64" cy="4.5" r="4.5" fill="white"/>
                                        <circle cx="72.5" cy="5" r="3" fill="white"/>
                                        <circle cx="55.5" cy="5" r="3" fill="white"/>
                                        <circle cx="78.5" cy="5" r="2" fill="white"/>
                                        <circle cx="49.5" cy="5" r="2" fill="white"/>
                                        <circle cx="82.5" cy="5" r="1" fill="white"/>
                                        <circle cx="45.5" cy="5" r="1" fill="white"/>
                                        <rect y="4.5" width="128" height="1" rx="0.5" fill="white" fill-opacity="0.75"/>
                                    </svg>
                                    </a>
                                        <h2 class="text-center text-white">Sheikh <br>{{$teachers->name}}<br> 
                                    
                                    </h2>
                                </div>
                            </div>
                        </div>
                       @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </div> 
</section>
@include('user.layoutsForEnglish.footer')

</body>

</html>