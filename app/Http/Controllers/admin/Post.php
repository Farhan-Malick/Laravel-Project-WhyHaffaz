<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Post extends Controller
{
    function listing()
    {
        $data['result'] = DB::table('posts')->orderBy('id','desc')->get();
        return view('admin.post.list',$data);
    }
    function submit(Request $req)
    {
      //validation
      $req->validate([
        'title'        => 'required  |min:8|max:30',
        'description'  => 'required  |min:100|max:155',
        'title2'        => 'required |min:8|max:30',
        'description2'  => 'required |min:100|max:155',
        'image'        =>  'required |mimes: jpg,jpeg,png',
        'image2'        => 'required |mimes: jpg,jpeg,png'
      ]);

      //storing image
      $image=$req->file('image');
      $ext = $image->extension();
      $file=time().'.'.$ext;
      $image->storeAs('public/post/home',$file);
      
      $image2=$req->file('image2');
      $ext2 = $image2->extension();
      $file2=time().'.'.$ext2;
      $image2->storeAs('public/post/secondbanner',$file2);


      //array
      $data = array(
        'title'        => $req->input('title'),
        'description'  => $req->input('description'),
        'title2'        => $req->input('title2'),
        'description2'  => $req->input('description2'),
        'image'        => $file,
        'image2'        => $file2,
                     

      );
      //inserting data
      DB::table('posts')->insert($data);
      $req->session()->flash('msg','Data has been Added'); 
      return redirect('/admin/post/list');
    }
    function delete(Request $req , $id)
    {
      DB::table('posts')->where('id',$id)->delete();
      $req->session()->flash('msgForDelete','Data has been Deleted'); 
      return redirect('/admin/post/list');
    }
    function edit(Request $req , $id)
    {
      $data['result'] = DB::table('posts')->where('id',$id)->get();
        return view('admin.post.edit',$data);
    }
    function update(Request $req , $id)
    {
      //validation
      $req->validate([
        'title'        => 'required  |min:8|max:30',
        'description'  => 'required  |min:100|max:155',
        'title2'        => 'required |min:8|max:30',
        'description2'  => 'required |min:100|max:155',
        'image'        =>  'mimes: jpg,jpeg,png',
        'image2'        => 'mimes: jpg,jpeg,png'
      ]);
      //array
      $data = array(
        'title'        => $req->input('title'),
        'description'  => $req->input('description'),
        'title2'        => $req->input('title2'),
        'description2'  => $req->input('description2'),
      );
      
      if($req->hasfile('image'))
      {
        $image=$req->file('image');
        $ext = $image->extension();
        $file=time().'.'.$ext;
        $image->storeAs('public/post/home',$file);
        $data['image']=$file;
      }

      if($req->hasfile('image2'))
      {
        $image2=$req->file('image2');
        $ext = $image2->extension();
        $file2=time().'.'.$ext;
        $image2->storeAs('public/post/secondbanner',$file2);
        $data['image2']=$file2;
      }
     
      //updating data
      DB::table('posts')->where('id',$id)->update($data);
      $req->session()->flash('msg','Data has been Updated'); 
      return redirect('/admin/post/list');
    }
}
