<?php

namespace App\Http\Controllers\admin\appointment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Teacher;
use Auth;
use Illuminate\Support\Facades\DB;

class AppointmentController extends Controller
{
    public function index()
    {
        // $teacher_id = auth()->teacher()->id;
        // $teacher = Teacher::find($teacher_id);
        $reg['book_result'] = DB::table('bookings')->get();
        // return view('admin.t_appointment.list')->with('appointments',$teacher->appointments);
        $data['appointments'] = DB::table('appointments')->get(); 
        return view('admin.t_appointment.list',$data);
    }
    public function Addindex()
    {
        return view('admin.t_appointment.addappointment');
    }
    public function appointment(Request $request)
    {
    //     //validation
      $request->validate([
        'day'                  => 'required',
        'time'                 => 'required' ,
        'Hr_price_per_person'  => 'required' 
       ]);
      
       $book = new Appointment;
       $book->day                   = $request->input('day');
       $book->time                  = $request->input('time');
       $book->Hr_price_per_person   = $request->input('Hr_price_per_person');
    //    $book->teacher_id = auth()->teacher()->id;
    //    $book->user_id = auth()->user()->id;
       $book->save();
       $request->Session()->flash('appointment_msg','Appointment is set'); 
       return redirect()->route('All-Appoints');
    }
    function delete(Request $request , $id)
    {
        $data=Appointment::findOrFail($id);
        $data->delete();
        return redirect()->route('All-Appoints')->with('appDeleted','Appointment Has Been Cancelled Successfully');
    }
    function edit(Request $request , $id)
    {
        $data=Appointment::findOrFail($id);
        return view('admin.t_appointment.editappointment',['data'=>$data]);
    }
    function update(Request $request , $id)
    {
    //     //validation
        $request->validate([
            'day'                  => 'required',
            'time'                 => 'required' ,
            'Hr_price_per_person'  => 'required' 
        ]);
      //array
        $data=Appointment::findOrFail($request->id);
        $data->day                 =$request->day;
        $data->time                =$request->time;
        $data->Hr_price_per_person =$request->Hr_price_per_person;
        $data->save();
        return redirect()->route('All-Appoints')->with('appUpdated','Appointment Has Been Updated Successfully');
    }
}
