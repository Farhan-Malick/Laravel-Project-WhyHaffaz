<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OurSheikh extends Controller
{
    function oursheikh_listing()
    {
      $data['our_result'] = DB::table('oursheikhs')->orderBy('id','desc')->get();
      $data['no_result'] = DB::table('oursheikh_secs')->orderBy('id','desc')->get();
      return view('admin.oursheikh.oursheikhlist',$data);
    }

    function oursheikh_submit(Request $request)
    {
      //validation
      $request->validate([
        'heading'      => 'required|min:10|max:25',
        'description1'  => 'required|min:100|max:415',
        'description2'  => 'required|min:100|max:415',
      ]);
      //array
      $data = array(
        'heading'        => $request->input('heading'),
        'description1'  => $request->input('description1'),
        'description2'  => $request->input('description2'),
      );
    
      //inserting data
      DB::table('oursheikhs')->insert($data);
      $request->session()->flash('msg','Data has been Added'); 
      return redirect('/admin/oursheikh/oursheikhlist');
    }
    function oursheikh_delete(Request $request , $id)
    {
      DB::table('oursheikhs')->where('id',$id)->delete();
      $request->session()->flash('msgForDelete','Data has been Deleted'); 
      return redirect('/admin/oursheikh/oursheikhlist');
    }
    function oursheikh_edit(Request $request , $id)
    {
      $data['our_result'] = DB::table('oursheikhs')->where('id',$id)->get();
        return view('admin/oursheikh/oursheikhedit',$data);
      
    }
    function oursheikh_update(Request $request , $id)
    {
      //validation
      $request->validate([
        'heading'      => 'required|min:10|max:25',
        'description1'  => 'required|min:100|max:415',
        'description2'  => 'required|min:100|max:415',
        ]);
      //array
      $data = array(
        'heading'        => $request->input('heading'),
        'description1'  => $request->input('description1'),
        'description2'  => $request->input('description2'),
      );
      
      //updating data
      DB::table('oursheikhs')->where('id',$id)->update($data);
      $request->session()->flash('msg','Data has been Updated'); 
      return redirect('/admin/oursheikh/oursheikhlist');
    }
}
