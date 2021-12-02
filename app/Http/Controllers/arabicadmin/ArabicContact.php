<?php

namespace App\Http\Controllers\arabicadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArabicContact extends Controller
{
    function listing()
    {
        $data['con_result'] = DB::table('arabic_contacts')->orderBy('id','desc')->get();
        return view('admin.arabicadmin.contact.list',$data);
    }
    function edit(Request $req , $id)
    {
      $data['con_result'] = DB::table('arabic_contacts')->where('id',$id)->get();
        return view('admin.arabicadmin.contact.contactedit',$data);
    }
    function update(Request $req , $id)
    {
      //validation
      $req->validate([
        'contactus'   =>  'required |min:15|max:30',
        'phone_no'    =>  'required |numeric|min:10',
        'email'       =>  'required',
      ]);
      //array
      $data = array(
        'contactus'        => $req->input('contactus'),
        'phone_no'  => $req->input('phone_no'),
        'email'        => $req->input('email')
      );
      
      //updating data
      DB::table('arabic_contacts')->where('id',$id)->update($data);
      $req->session()->flash('msg','Data has been Updated'); 
      return redirect('/admin/arabicadmin/contact/list');
    }
}
