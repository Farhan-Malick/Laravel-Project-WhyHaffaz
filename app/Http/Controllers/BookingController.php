<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Session;
use App\Models\reg;
use App\Models\booking;
use Auth;
class BookingController extends Controller
{
    function booking_submit(Request $request)
    {
    //     //validation
      $request->validate([
        'name'  => 'required',
        'date'        => 'required' ,
        'no_of_people'        => 'required|numeric' ,
        'description'  => 'required',
       ]);
      
       $book = new Booking;
       $book->name = $request->input('name');
       $book->date = $request->input('date');
       $book->no_of_people = $request->input('no_of_people');
       $book->description = $request->input('description');
       $book->user_id = auth()->user()->id;
       $book->save();
       $request->Session()->flash('booking_msg','Here is your Lessons Dates'); 
       $request->Session()->flash('booking_msg2','We have Your Appointment'); 
       return view('/user/english/user/book-appointment');
    }
}
