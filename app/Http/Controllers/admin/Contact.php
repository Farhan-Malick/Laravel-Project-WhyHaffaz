<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Contact extends Controller
{
    function listing()
    {
        $data['con_result'] = DB::table('contacts')->orderBy('id','desc')->get();
        return view('admin.contact.list',$data);
    }
    function edit(Request $req , $id)
    {
      $data['con_result'] = DB::table('contacts')->where('id',$id)->get();
        return view('admin.contact.contactedit',$data);
    }
    function update(Request $req , $id)
    {
      //validation
      $req->validate([
        'contactus'   =>  'required |max:30',
        'phone_no'    =>  'required |numeric',
        'email'       =>  'required',
       
      ]);
      //array
      $data = array(
        'contactus'        => $req->input('contactus'),
        'phone_no'  => $req->input('phone_no'),
        'email'        => $req->input('email')
      );
      
      //updating data
      DB::table('contacts')->where('id',$id)->update($data);
      $req->session()->flash('msg','Data has been Updated'); 
      return redirect('/admin/contact/list');
    }
}
