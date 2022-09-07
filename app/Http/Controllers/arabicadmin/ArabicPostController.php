<?php

namespace App\Http\Controllers\arabicadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArabicPostController extends Controller
{
    function listing()
    {
        $data['result'] = DB::table('arabicposts')->orderBy('id','desc')->get();
        return view('admin.arabicadmin.post.list',$data);
    }
    function submit(Request $req)
    {
      //validation
      $req->validate([
        'title'        =>  'required  |max:30',
        'description'  => 'required  |max:155',
        'image'        =>  'required |mimes: jpg,jpeg,png'
      ]);
       //storing image
      $image=$req->file('image');
      $ext = $image->extension();
      $file=time().'.'.$ext;
      $image->storeAs('public/post/arabicadmin',$file);
      //array
      $data = array(
        'title'        => $req->input('title'),
        'description'  => $req->input('description'),
        'image'        => $file,
      );
      //inserting data
      DB::table('arabicposts')->insert($data);
      $req->session()->flash('msg','Data has been Added'); 
      return redirect('/admin/arabicadmin/post/list');
    }
    function delete(Request $req , $id)
    {
      DB::table('arabicposts')->where('id',$id)->delete();
      $req->session()->flash('msgForDelete','Data has been Deleted'); 
      return redirect('/admin/arabicadmin/post/list');
    }
    function edit(Request $req , $id)
    {
      $data['result'] = DB::table('arabicposts')->where('id',$id)->get();
        return view('admin.arabicadmin.post.edit',$data);
    }
    function update(Request $req , $id)
    {
      //validation
      $req->validate([
        'title'        =>  'required  |max:30',
        'description'  => 'required  |max:155',
        'image'        =>  'mimes: jpg,jpeg,png'
      ]);
      //array
      $data = array(
        'title'        => $req->input('title'),
        'description'  => $req->input('description'),
      );
      if($req->hasfile('image'))
      {
        $image=$req->file('image');
        $ext = $image->extension();
        $file=time().'.'.$ext;
        $image->storeAs('public/post/arabicadmin/',$file);
        $data['image']=$file;
      }
      //updating data
      DB::table('arabicposts')->where('id',$id)->update($data);
      $req->session()->flash('msg','Data has been Updated'); 
      return redirect('/admin/arabicadmin/post/list');
    }
}
