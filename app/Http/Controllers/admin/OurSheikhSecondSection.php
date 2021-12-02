<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class OurSheikhSecondSection extends Controller
{
    function oursheikh_submit(Request $request)
    {
      //validation
      $request->validate([
        'fname'=> 'required|min:3|max:20',
        'lname'=> 'required|min:3|max:20',
        'image'=> 'required |mimes:jpg,jpeg,png',
      ]);
    //storing image
    $image=$request->file('image');
    $ext = $image->extension();
    $file=time().'.'.$ext;
    $image->storeAs('public/post/oursheikhs',$file);
    //array
    $data = array(
        'fname' => $request->input('fname'),
        'lname' => $request->input('lname'),
        'image'        => $file,
    );
      //inserting data
      DB::table('oursheikh_secs')->insert($data);
      $request->session()->flash('msg','Data has been Added'); 
      return redirect('/admin/oursheikh/oursheikhlist');
    }
    function oursheikh_delete(Request $request , $id)
    {
      DB::table('oursheikh_secs')->where('id',$id)->delete();
      $request->session()->flash('msgForDelete','Data has been Deleted'); 
      return redirect('/admin/oursheikh/oursheikhlist');
    }
    function oursheikh_edit(Request $request , $id)
    {
        $data['no_result'] = DB::table('oursheikh_secs')->where('id',$id)->get();
        return view('admin/oursheikh/oursheikhpart/oursheikhedit',$data);
      
    }
    function oursheikh_update(Request $request , $id)
    {
      //validation
      $request->validate([
        'fname'=> 'required|min:3|max:20',
        'lname'=> 'required|min:3|max:20',
        'image'=> 'mimes: jpg,jpeg,png'

        ]);
      //array
      $data = array(
        'fname' => $request->input('fname'),
        'lname' => $request->input('lname'),
        
      );
      if($request->hasfile('image'))
      {
        $image=$request->file('image');
        $ext = $image->extension();
        $file=time().'.'.$ext;
        $image->storeAs('public/post/oursheikhs',$file);
        $data['image']=$file;
      }
      //updating data
      DB::table('oursheikh_secs')->where('id',$id)->update($data);
      $request->session()->flash('msg','Data has been Updated'); 
      return redirect('/admin/oursheikh/oursheikhlist');
    }
}
