<?php

namespace App\Http\Controllers\admin\userdetail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Booking;
use Illuminate\Support\Facades\DB;

class userDetailController extends Controller
{
    public function user_detail()
    {
            $data['bookings'] = DB::table('bookings')->get();
            return view('admin.user_detail.bookings',$data);  
    }
    function delete(Request $req,$id)
    {
        $data=Booking::findOrFail($id);
        $data->delete();
        return redirect()->route('user-booking');
    }
    function edit(Request $req , $id)
    {
        $data=Booking::findOrFail($id);
        return view('admin.user_detail.edituser',['data'=>$data]);
    }
    function update(Request $req , $id)
    {
      //validation
      $req->validate([
        'name'        => 'required  |max:30',
        'date'        => 'required  |max:30',
        'no_of_people'        => 'required  |max:30',
        'description'  => 'required  |max:155',
      ]);
      //array
        $data=Booking::findOrFail($req->id);
        $data->name=$req->name;
        $data->date=$req->date;
        $data->no_of_people=$req->no_of_people;
        $data->description=$req->description;
        $data->save();
        return redirect()->route('user-booking');
    }
}
