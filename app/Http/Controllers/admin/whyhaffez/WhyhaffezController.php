<?php

namespace App\Http\Controllers\admin\whyhaffez;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class WhyhaffezController extends Controller
{
    function whyhaffez_listing()
    {
      $data['why_result'] = DB::table('whyhaffezs')->orderBy('id','desc')->get();
      $data['second_why_result'] = DB::table('second_whyhaffezs')->orderBy('id','desc')->get();
      $data['third_why_result'] = DB::table('third_whyhaffezs')->orderBy('id','desc')->get();
      $data['fourth_why_result'] = DB::table('fourth_whyhaffezs')->get();
      $data['fifth_why_result'] = DB::table('fifth_whyhaffezs')->get();
      $data['sixth_why_result'] = DB::table('sixth_whyhaffezs')->get();
      $data['seventh_why_result'] = DB::table('seventh_whyhaffezs')->get();
      return view('admin.post.whyhaffez.whyhaffezlist',$data);
    }

    function whyhaffez_submit(Request $request)
    {
      //validation
      $request->validate([
        'heading'      => 'required |min:15|max:30',
        'description'  => 'required |min:100|max:146',
        'image'        => 'required |mimes: jpg,jpeg,png',
      ]);
  
      //storing image
      $image=$request->file('image');
      $ext = $image->extension();
      $file=time().'.'.$ext;
      $image->storeAs('public/post/whyhaffez_image',$file);
      //array
      $data = array(
        'heading'        => $request->input('heading'),
        'description'  => $request->input('description'),
        'image'        => $file,
      );
    
      //inserting data
      DB::table('whyhaffezs')->insert($data);
      $request->session()->flash('msg','Data has been Added'); 
      return redirect('/admin/post/whyhaffez/whyhaffezlist');
    }
    function whyhaffez_delete(Request $request , $id)
    {
      DB::table('whyhaffezs')->where('id',$id)->delete();
      $request->session()->flash('msgForDelete','Data has been Deleted'); 
      return redirect('/admin/post/whyhaffez/whyhaffezlist');
    }
    function whyhaffez_edit(Request $request , $id)
    {
      $data['why_result'] = DB::table('whyhaffezs')->where('id',$id)->get();
        return view('admin/post/whyhaffez/whyhaffezedit',$data);
      
    }
    function whyhaffez_update(Request $request , $id)
    {
      //validation
      $request->validate([
        'heading'      => 'required |min:15|max:30',
        'description'  => 'required |min:100|max:146',
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
        $image->storeAs('public/post/whyhaffez_image',$file);
        
  
        $data['image']=$file;
      }
      //updating data
      DB::table('whyhaffezs')->where('id',$id)->update($data);
      $request->session()->flash('msg','Data has been Updated'); 
      return redirect('/admin/post/whyhaffez/whyhaffezlist');
    }
}
