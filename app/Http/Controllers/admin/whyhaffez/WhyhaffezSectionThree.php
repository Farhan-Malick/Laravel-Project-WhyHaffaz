<?php

namespace App\Http\Controllers\admin\whyhaffez;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class WhyhaffezSectionThree extends Controller
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
      $image->storeAs('public/post/whyhaffezsection3',$file);
      //array
      $data = array(
        'heading'        => $request->input('heading'),
        'description'  => $request->input('description'),
        'image'        => $file,
      );
    
      //inserting data
      DB::table('third_whyhaffezs')->insert($data);
      $request->session()->flash('msg','Data has been Added'); 
      return redirect('/admin/post/whyhaffez/whyhaffezlist');
    }
    function whyhaffez_delete(Request $request , $id)
    {
      DB::table('third_whyhaffezs')->where('id',$id)->delete();
      $request->session()->flash('msgForDelete','Data has been Deleted'); 
      return redirect('/admin/post/whyhaffez/whyhaffezlist');
    }
    function whyhaffez_edit(Request $request , $id)
    {
      $data['third_why_result'] = DB::table('third_whyhaffezs')->where('id',$id)->get();
        return view('admin/post/whyhaffez/third_whyhaffez/whyhaffezedit',$data);
      
    }
    function whyhaffez_update(Request $request , $id)
    {
      //validation
        $request->validate([
          'heading'      => 'required |max:30',
          'description'  => 'required |max:410',
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
        $image->storeAs('public/post/whyhaffezsection3',$file);
        
  
        $data['image']=$file;
      }
      //updating data
      DB::table('third_whyhaffezs')->where('id',$id)->update($data);
      $request->session()->flash('msg','Data has been Updated'); 
      return redirect('/admin/post/whyhaffez/whyhaffezlist');
    }
}
