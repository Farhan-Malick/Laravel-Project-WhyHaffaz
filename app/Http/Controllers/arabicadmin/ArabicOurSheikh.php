<?php

namespace App\Http\Controllers\arabicadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArabicOurSheikh extends Controller
{
    function oursheikh_listing()
  {
    $data['our_result'] = DB::table('arabic_oursheikhs')->orderBy('id','desc')->get();
    $data['no_result'] = DB::table('arabic_oursheikh_secs')->get();
    return view('admin.arabicadmin.oursheikh.oursheikhlist',$data);
  }

  function oursheikh_submit(Request $request)
  {
    //validation
    $request->validate([
      'heading'      => 'required|max:35',
      'description1'  => 'required |max:440',
    ]);
    //array
    $data = array(
      'heading'        => $request->input('heading'),
      'description1'  => $request->input('description1'),
    );
  
    //inserting data
    DB::table('arabic_oursheikhs')->insert($data);
    $request->session()->flash('msg','Data has been Added'); 
    return redirect('/admin/arabicadmin/oursheikh/oursheikhlist');
  }
  function oursheikh_delete(Request $request , $id)
  {
    DB::table('arabic_oursheikhs')->where('id',$id)->delete();
    $request->session()->flash('msgForDelete','Data has been Deleted'); 
    return redirect('/admin/arabicadmin/oursheikh/oursheikhlist');
  }
  function oursheikh_edit(Request $request , $id)
  {
    $data['our_result'] = DB::table('arabic_oursheikhs')->where('id',$id)->get();
      return view('admin/arabicadmin/oursheikh/oursheikhedit',$data);
    
  }
  function oursheikh_update(Request $request , $id)
  {
    //validation
    $request->validate([
      'heading'      => 'required |max:35',
      'description1'  => 'required |max:440',
    ]);
    //array
    $data = array(
      'heading'        => $request->input('heading'),
      'description1'  => $request->input('description1'),
    );
    
    //updating data
    DB::table('arabic_oursheikhs')->where('id',$id)->update($data);
    $request->session()->flash('msg','Data has been Updated'); 
    return redirect('/admin/arabicadmin/oursheikh/oursheikhlist');
  }
}
