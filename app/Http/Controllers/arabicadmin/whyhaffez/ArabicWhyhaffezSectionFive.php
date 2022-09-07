<?php

namespace App\Http\Controllers\arabicadmin\whyhaffez;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ArabicWhyhaffezSectionFive extends Controller
{
    function whyhaffez_submit(Request $request)
    {
      //validation
      $request->validate([
        'heading'      => 'required |max:30',
        'description'  => 'required |max:410',
        'image'        => 'required |mimes: jpg,jpeg,png',
      ]);
  
  
      //storing image
      $image=$request->file('image');
      $ext = $image->extension();
      $file=time().'.'.$ext;
      $image->storeAs('public/post/arabic_whyhaffezsection5',$file);
      //array
      $data = array(
        'heading'        => $request->input('heading'),
        'description'  => $request->input('description'),
        'image'        => $file,
      );
    
      //inserting data
      DB::table('arabic_fifth_whyhaffezs')->insert($data);
      $request->session()->flash('msg','Data has been Added'); 
      return redirect('/admin/arabicadmin/post/whyhaffez/whyhaffezlist');
    }
    function whyhaffez_delete(Request $request , $id)
    {
      DB::table('arabic_fifth_whyhaffezs')->where('id',$id)->delete();
      $request->session()->flash('msgForDelete','Data has been Deleted'); 
      return redirect('/admin/arabicadmin/post/whyhaffez/whyhaffezlist');
    }
    function whyhaffez_edit(Request $request , $id)
    {
      $data['fifth_why_result'] = DB::table('arabic_fifth_whyhaffezs')->where('id',$id)->get();
        return view('/admin/arabicadmin/post/whyhaffez/fifth_whyhaffez/whyhaffezedit',$data);
      
    }
    function whyhaffez_update(Request $request , $id)
    {
      //validation
      $request->validate([
        'heading'      => 'required |max:30',
        'description'  => 'required |max:410',
        'image'        => 'required |mimes: jpg,jpeg,png',
      ]);
      //array
      $data = array(
        'heading'        => $request->input('heading'),
        'description'  => $request->input('description'),
      );
      
      if($request->hasfile('image'))
      {
        $image=$request->file('image');
        $ext = $image->extension();
        $file=time().'.'.$ext;
        $image->storeAs('public/arabicadmin/post/arabic_whyhaffezsection5',$file);
        
  
        $data['image']=$file;
      }
      //updating data
      DB::table('arabic_fifth_whyhaffezs')->where('id',$id)->update($data);
      $request->session()->flash('msg','Data has been Updated'); 
      return redirect('/admin/post/whyhaffez/whyhaffezlist');
    }
}
