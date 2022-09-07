<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class userauth extends Controller
{
    public function userAfterLogin()
    {
        return view('/user/english/login');
    }
    public function myLesson()
    {
        return view('user.english.login');
    }
    public function OurSheikhs()
    {
        return view('user.english.login');
    }
    public function SheikhDetail()
    {
        return view('user.english.login');
    }
}
