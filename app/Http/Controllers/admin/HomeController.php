<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   
    // public function SidebarHome()
    // {
    //     return view('admin.post.list');
    // }
    public function aboutsection()
    {
        return view('admin.post.aboutlist');
    }
    public function whyhaffezsection()
    {
        return view('/admin/post/whyhaffez/whyhaffezlist');
    }
    public function sheikhsection()
    {
        return view('/admin/post/oursheikh/oursheikhlist');
    }
    public function contactsection()
    {
        return view('admin.post.contact');
    }
    
    
}

