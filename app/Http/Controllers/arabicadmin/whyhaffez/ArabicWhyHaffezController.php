<?php

namespace App\Http\Controllers\arabicadmin\whyhaffez;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ArabicWhyHaffezController extends Controller
{
    function whyhaffez_listing()
    {
      $data['why_result'] = DB::table('arabicwhyhaffezs')->orderBy('id','desc')->get();
      $data['second_why_result'] = DB::table('arabic_second_whyhaffezs')->orderBy('id','desc')->get();
      $data['third_why_result'] = DB::table('arabic_third_whyhaffezs')->orderBy('id','desc')->get();
      $data['fourth_why_result'] = DB::table('arabic_fourth_whyhaffezs')->get();
      $data['fifth_why_result'] = DB::table('arabic_fifth_whyhaffezs')->get();
      $data['sixth_why_result'] = DB::table('arabic_sixth_whyhaffezs')->get();
      $data['seventh_why_result'] = DB::table('arabic_seventh_whyhaffezs')->get();
      return view('admin.arabicadmin.post.whyhaffez.whyhaffezlist',$data);
    }

    function whyhaffez_submit(Request $request)
    {
      //validation
      $request->validate([
        'heading'      => 'required |min:15|max:30',
        'description'  => 'required |min:60|max:146',
        'image'        => 'required |mimes: jpg,jpeg,png',
      ]);
      //storing image
      $image=$request->file('image');
      $ext = $image->extension();
      $file=time().'.'.$ext;
      $image->storeAs('public/post/arabic_whyhaffez_image',$file);
      //array
      $data = array(
        'heading'        => $request->input('heading'),
        'description'  => $request->input('description'),
        'image'        => $file,
      );
    
      //inserting data
      DB::table('arabicwhyhaffezs')->insert($data);
      $request->session()->flash('msg','Data has been Added'); 
      return redirect('/admin/arabicadmin/post/whyhaffez/whyhaffezlist');
    }
    function whyhaffez_delete(Request $request , $id)
    {
      DB::table('arabicwhyhaffezs')->where('id',$id)->delete();
      $request->session()->flash('msgForDelete','Data has been Deleted'); 
      return redirect('/admin/arabicadmin/post/whyhaffez/whyhaffezlist');
    }
    function whyhaffez_edit(Request $request , $id)
    {
      $data['why_result'] = DB::table('arabicwhyhaffezs')->where('id',$id)->get();
        return view('admin/arabicadmin/post/whyhaffez/whyhaffezedit',$data);
      
    }
    function whyhaffez_update(Request $request , $id)
    {
      //validation
      $request->validate([
        'heading'      => 'required |min:15|max:30',
        'description'  => 'required |min:60|max:146',
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
        $image->storeAs('public/post/arabic_whyhaffez_image',$file);
        
  
        $data['image']=$file;
      }
      //updating data
      DB::table('arabicwhyhaffezs')->where('id',$id)->update($data);
      $request->session()->flash('msg','Data has been Updated'); 
      return redirect('/admin/arabicadmin/post/whyhaffez/whyhaffezlist');
    }
}
