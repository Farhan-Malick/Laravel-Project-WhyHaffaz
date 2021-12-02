<?php

namespace App\Http\Controllers\arabicadmin\whyhaffez;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArabicWhyhaffezSectionThree extends Controller
{
    function whyhaffez_submit(Request $request)
    {
      //validation
      $request->validate([
        'heading'      => 'required |min:15|max:30',
        'description'  => 'required |min:100|max:410',
        'image'        => 'required |mimes: jpg,jpeg,png',
      ]);
    
      //storing image
      $image=$request->file('image');
      $ext = $image->extension();
      $file=time().'.'.$ext;
      $image->storeAs('public/post/arabic_whyhaffezsection3',$file);
      //array
      $data = array(
        'heading'        => $request->input('heading'),
        'description'  => $request->input('description'),
        'image'        => $file,
      );
    
      //inserting data
      DB::table('arabic_third_whyhaffezs')->insert($data);
      $request->session()->flash('msg','Data has been Added'); 
      return redirect('/admin/arabicadmin/post/whyhaffez/whyhaffezlist');
    }
    function whyhaffez_delete(Request $request , $id)
    {
      DB::table('arabic_third_whyhaffezs')->where('id',$id)->delete();
      $request->session()->flash('msgForDelete','Data has been Deleted'); 
      return redirect('/admin/arabicadmin/post/whyhaffez/whyhaffezlist');
    }
    function whyhaffez_edit(Request $request , $id)
    {
      $data['third_why_result'] = DB::table('arabic_third_whyhaffezs')->where('id',$id)->get();
        return view('admin/arabicadmin/post/whyhaffez/third_whyhaffez/whyhaffezedit',$data);
      
    }
    function whyhaffez_update(Request $request , $id)
    {
      //validation
      $request->validate([
        'heading'      => 'required |min:15|max:30',
        'description'  => 'required |min:100|max:410',
        'image'        => 'mimes: jpg,jpeg,png',
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
        $image->storeAs('public/post/arabic_whyhaffezsection3',$file);
        
  
        $data['image']=$file;
      }
      //updating data
      DB::table('arabic_third_whyhaffezs')->where('id',$id)->update($data);
      $request->session()->flash('msg','Data has been Updated'); 
      return redirect('/admin/arabicadmin/post/whyhaffez/whyhaffezlist');
    }
}
