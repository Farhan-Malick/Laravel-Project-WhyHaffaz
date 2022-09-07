<?php

namespace App\Http\Controllers\arabicadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArabicFooter extends Controller
{
    function listing()
    {
        $data['para_result'] = DB::table('arabic_footers')->orderBy('id','desc')->get();
        return view('admin.arabicadmin.footer.list',$data);
    }
    function edit(Request $req , $id)
    {
      $data['para_result'] = DB::table('arabic_footers')->where('id',$id)->get();
        return view('admin.arabicadmin.footer.footeredit',$data);
    }
    function update(Request $req , $id)
    {
      //validation
      $req->validate([
        'paragraph'        => 'required|max:390',
      ]);
      //array
      $data = array(
        'paragraph'        => $req->input('paragraph')
      );
      
      //updating data
      DB::table('arabic_footers')->where('id',$id)->update($data);
      $req->session()->flash('msg','Data has been Updated'); 
      return redirect('/admin/arabicadmin/footer/list');
    }
}
