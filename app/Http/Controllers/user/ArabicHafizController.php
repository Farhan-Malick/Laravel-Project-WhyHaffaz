<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ArabicHafizController extends Controller
{
    public function home()
    {

        return view('user.english.index');
    }
  
    public function loginforArabic()
    {
        return view('user.arabic.login');
    }

    public function registrationforArabic()
    {
        return view('user.arabic.registration');
    }

}




