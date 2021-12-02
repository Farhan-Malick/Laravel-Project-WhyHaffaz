<?php

namespace App\Http\Controllers\arabicadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArabicAboutController extends Controller
{
    function about_listing()
    {
        $data['aboutresult'] = DB::table('arabicabouts')->orderBy('id','desc')->get();
        return view('admin.arabicadmin.post.about.aboutlist',$data);
    }
    function about_submit(Request $request)
    {
      //validation
      $request->validate([
        'title3'        => 'required |min:15|max:30',
        'heading3'      => 'required|min:8|max:15',  
        'description3'  => 'required|min:200|max:385',  
        'image3'        =>  'required |mimes: jpg,jpeg,png',
      ]);
  
      //storing image
      $image3=$request->file('image3');
      $ext = $image3->extension();
      $file=time().'.'.$ext;
      $image3->storeAs('public/post/arabic_about_image',$file);
      //array
      $data = array(
        'title3'        => $request->input('title3'),
        'heading3'        => $request->input('heading3'),
        'description3'  => $request->input('description3'),
        'image3'        => $file,
      );
    
      //inserting data
      DB::table('arabicabouts')->insert($data);
      $request->session()->flash('msg','Data has been Added'); 
      return redirect('/admin/arabicadmin/post/about/aboutlist');
    }
    function about_delete(Request $request , $id)
    {
      DB::table('arabicabouts')->where('id',$id)->delete();
      $request->session()->flash('msgForDelete','Data has been Deleted'); 
      return redirect('/admin/arabicadmin/post/about/aboutlist');
    }
    function about_edit(Request $request , $id)
    {
      $data['aboutresult'] = DB::table('arabicabouts')->where('id',$id)->get();
        return view('admin.arabicadmin.post.about.aboutedit',$data);
      
    }
    function about_update(Request $request , $id)
    {
      //validation
      $request->validate([
        'title3'        => 'required |min:15|max:30',
        'heading3'      => 'required|min:8|max:15',  
        'description3'  => 'required|min:200|max:385',  
        'image3'        =>  'mimes: jpg,jpeg,png',
      ]);
      //array
      $data = array(
        'title3'        => $request->input('title3'),
        'heading3'        => $request->input('heading3'),
        'description3'  => $request->input('description3'),
      );
      
      if($request->hasfile('image3'))
      {
        $image3=$request->file('image3');
        $ext = $image3->extension();
        $file=time().'.'.$ext;
        $image3->storeAs('public/post/arabic_about_image',$file);
        
  
        $data['image3']=$file;
      }
      //updating data
      DB::table('arabicabouts')->where('id',$id)->update($data);
      $request->session()->flash('msg','Data has been Updated'); 
      return redirect('/admin/arabicadmin/post/about/aboutlist');
    }
}
