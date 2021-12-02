<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Haffez Quraan</title>

    <meta name="keywords" content="Haffez Quraan" />
    <meta name="description" content="Hafez is an integrated electronic platform for distance learning teaching and memorization of the Noble Quran, as we connect those who wish to memorize the Quran everywhere with a distinguished elite of specialized teachers in an easy interactive way and a flexible educational schedule that corresponds to the fast-paced lifestyle.">
    <meta name="author" content="Powered by CDOXS">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/haffez-logo.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="assets/img/haffez-logo.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">


    <!-- Web Fonts -->

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&family=Philosopher:wght@400;700&display=swap" rel="stylesheet">

    <!-- Fontawesome -->

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('public/user/ar/assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('public/user/ar/assets/css/OwlCarousel2.css')}}">
    <link rel="stylesheet" href="{{ asset('public/user/ar/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('public/user/ar/assets/css/style.css')}}">

</head>

<body>

<div class="login">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-7 mx-auto text-right">
                <div class="login-wrap">
                    <div class="text-center text-white mb-5">
                        <img src="assets/img/haffez-logo.png" class="mb-3" alt="">

                        <h2>تسجيل الدخول للدارسين والشيوخ</h2>
                    </div>
                    <form class="login-form" action="index.html" dir="rtl">
                        <div class="form-group">
                            <label for="tel">رقم الهاتف</label>
                            <input type="tel" class="form-control" id="tel" aria-describedby="emailHelp" placeholder="رقم الهاتف">
                        </div>

                        <div class="form-group">
                            <label for="password2">كلمة المرور</label>
                            <input type="password" class="form-control" id="password2" placeholder="كلمة المرور">
                        </div>


                        <div class="custom-control custom-checkbox form-group">
                            <input type="checkbox" class="custom-control-input">
                            <label class="custom-control-label">تذكرنى عند الدخول المرة القادمة</label>
                        </div>
                        <button type="submit" class="btn btn-gold">تسجيل الدخول</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>


<script src="{{ asset('public/user/ar/assets/js/jquery.js')}}"></script>
<script src="{{ asset('public/user/ar/assets/js/owlcarousel2.js')}}"></script>
<script src="{{ asset('public/user/ar/assets/js/bootstrap.js')}}"></script>



</body>

</html>