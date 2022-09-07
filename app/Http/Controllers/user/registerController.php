<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Session;
use Hash;
class registerController extends Controller
{
  // public function login()
  //   {
  //       return view('user.english.login');
  //   }
  //   public function registration()
  //   {
  //       return view('user.english.registration');
  //   }
  //   function reg_submit(Request $request)
  //   {
  //   //     //validation
  //     $request->validate([
  //       'name'        => 'required' ,
  //       'phone'        => 'required|numeric' ,
  //       'country'  => 'required',
  //       'email'        => 'required|email|unique:user_registers',
  //       'password'  => 'required',
  //       'gender'        => 'required'
  //     ]);
  //  //array
  //  $data = array(
  //   'name'        => $request->input('name'),
  //   'phone'        => $request->input('phone'),
  //   'country'        => $request->input('country'),
  //   'email'        => $request->input('email'),
  //   'password'      => Hash::make($request->input('password')),
  //   'gender'       => $request->input('gender'),
  // );
  // //inserting data
  // $reg['reg_result']=DB::table('user_registers')->insert($data);
   
  //     $request->Session()->flash('reg_msg','You Have Been Registered'); 
  //     return view('/user/english/registration');
      
  //   }

  
  // function login_submit(Request $request)
  //   {
  //     //     //validation
  //     $request->validate([
  //       'phone'        => 'required|numeric' ,
  //       'password'  => 'required',
  //     ]);
  //      $phone=$request->input('phone');
  //      $password=$request->input('password');
  //      //QUERY BUILDER
  //      $result= DB::table('user_registers')->where('phone', '=', $request->phone)->first();
  //      Session::put(['name'=>$result->name]);
  //       if($result)
  //       {
  //           if(Hash::check($request->password,$result->password)){
  //               $request->Session()->put('loginid',$result->id);
  //               if (Session::has('loginid')) { 
  //                   return redirect('user-dashboard');
  //               }
  //           }else {
  //            return back()->with('fail',"The Password is Incorrect..!");
  //           }
  //       } else{
  //           $request->Session()->flash('msg','Please Enter Valid Login Details.');
  //           return view('user.english.login');
  //       }
  //   }
  //   public function dashboard()
  //   {
  //     $data=array();
  //       if (Session::has('loginid')) {
  //         $data['resultOfusers'] = DB::table('bookappointments')->get();
  //       } 
  //       return view('user.english.user.user-dashboard',$data);
  //   }
  //   function logout()
  //   {
  //     if (Session::has('loginid')) {
  //         Session::pull('loginid');
  //         return redirect('login'); 
  //     }
  //   }
}
