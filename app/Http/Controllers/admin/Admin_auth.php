<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class Admin_auth extends Controller
{
    function login_submit(Request $request)
    {
       $email=$request->input('email');
       $password=$request->input('password');

       //QUERY BUILDER
       $result= DB::table('adminlogin')
       ->where('email',$email)
       ->where('password',$password)
       ->get();
       Session::put('email', $email);
    //    echo '<pre>';
    //    print_r($result);

    if(isset($result[0]->id))
    {
        if($result[0]->status==1)
        {
            $request->session()->put('BLOG_USER_ID',$result[0]->id);
            return redirect('/admin/post/list');
        }else{
            $request->session()->flash('msg','Account Is Deactivated.'); 
            return redirect('/admin/login');
        }
    }else
    {
         $request->session()->flash('msg','Please Enter Valid Login Details.'); 
         return redirect('/admin/login');
    }
    }
}
