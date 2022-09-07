<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Booking;
use Session;
class EngHafizController extends Controller
{
    public function login()
    {
        return view('user.english.login');
    }
    public function registration()
    {
        return view('user.english.registration');
    }
    
    public function dashboard()
    {
            $user_id = auth()->user()->id;
            $user = User::find($user_id);
            return view('/user/english/user/user-dashboard')->with('bookings',$user->bookings);        
    }
    public function myLesson()
    {  
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('/user/english/user/user-dashboard')->with('bookings',$user->bookings);
            
    }
    public function OurSheikhs()
    {   
        $data['teacher'] = DB::table('teachers')->get();
            return view('user.english.user.our-sheikh',$data);
    }
    public function SheikhDetail()
    {
        $data['appointments'] = DB::table('appointments')->get();
        return view('user.english.user.sheikh-details',$data);
        
    }
    public function Bappointment()
    {
        return view('user.english.user.Book-appointment');
    }
    
    public function home()
    {
        $data['result'] = DB::table('posts')->get();
        $data['aboutresult'] = DB::table('abouts')->get();
        $data['why_result'] = DB::table('whyhaffezs')->get();
        $data['second_why_result'] = DB::table('second_whyhaffezs')->get();
        $data['third_why_result'] = DB::table('third_whyhaffezs')->get();
        $data['fourth_why_result'] = DB::table('fourth_whyhaffezs')->get();
        $data['fifth_why_result'] = DB::table('fifth_whyhaffezs')->get();
        $data['sixth_why_result'] = DB::table('sixth_whyhaffezs')->get();
        $data['seventh_why_result'] = DB::table('seventh_whyhaffezs')->get(); 
        $data['our_result'] = DB::table('oursheikhs')->orderBy('id','desc')->get();
        $data['con_result'] = DB::table('contacts')->orderBy('id','desc')->get();   
        $data['no_result'] = DB::table('oursheikh_secs')->orderBy('id','desc')->get();
        $data['para_result'] = DB::table('footers')->orderBy('id','desc')->get();

        return view('user.english.index',$data);
    }
    public function Arabic()
    {
        $data['result'] = DB::table('arabicposts')->get();
        $data['aboutresult'] = DB::table('arabicabouts')->get();
        $data['why_result'] = DB::table('arabicwhyhaffezs')->get();
        $data['second_why_result'] = DB::table('arabic_second_whyhaffezs')->get();
        $data['third_why_result'] = DB::table('arabic_third_whyhaffezs')->get();
        $data['fourth_why_result'] = DB::table('arabic_fourth_whyhaffezs')->get();
        $data['fifth_why_result'] = DB::table('arabic_fifth_whyhaffezs')->get();
        $data['sixth_why_result'] = DB::table('arabic_sixth_whyhaffezs')->get();
        $data['seventh_why_result'] = DB::table('arabic_seventh_whyhaffezs')->get(); 
        $data['our_result'] = DB::table('arabic_oursheikhs')->orderBy('id','desc')->get();
        $data['con_result'] = DB::table('arabic_contacts')->orderBy('id','desc')->get();   
        $data['no_result'] = DB::table('arabic_oursheikh_secs')->orderBy('id','desc')->get();
        // $data['para_result'] = DB::table('arabic_footers')->orderBy('id','desc')->get();
        return view('user.arabic.index',$data);
    }
  
 
 
}
