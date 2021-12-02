<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Footer extends Controller
{
    function listing()
    {
        $data['para_result'] = DB::table('footers')->orderBy('id','desc')->get();
        return view('admin.footer.list',$data);
    }
    function edit(Request $req , $id)
    {
      $data['para_result'] = DB::table('footers')->where('id',$id)->get();
        return view('admin.footer.footeredit',$data);
    }
    function update(Request $req , $id)
    {
      //validation
      $req->validate([
        'paragraph'        => 'required|min:200|max:390',
      ]);
      //array
      $data = array(
        'paragraph'        => $req->input('paragraph')
      );
      
      //updating data
      DB::table('footers')->where('id',$id)->update($data);
      $req->session()->flash('msg','Data has been Updated'); 
      return redirect('/admin/footer/list');
    }
}
