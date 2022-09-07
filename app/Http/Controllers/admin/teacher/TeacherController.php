<?php

namespace App\Http\Controllers\admin\teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use App\Models\Teacher;
use session;

class TeacherController extends Controller
{
    public function teachers_home()
    {
        $data['teacher'] = DB::table('teachers')->get();
            return view('admin.teacher.list',$data);  
    }
    public function index()
    {
        return view('admin.teacher.add');
    }
    function submit(Request $request)
    {
      //validation
      $request->validate([
        'name'        => 'required |max:30',
        'image'        =>  'required |mimes: jpg,jpeg,png',
        Rule::dimensions()->maxWidth(1920)->maxHeight(500)->ratio(3 / 2),
      ]);
      $teacher = new Teacher;
      $teacher ->name =$request->input('name');
      if($request->hasfile('image')) {

            $image=$request->file('image');
            $ext = $image->extension();
            $file=time().'.'.$ext;
            $image->storeAs('public/post/Teachers_images',$file);
            $teacher->image = $file;
      }
      $teacher->save();
      $request->session()->flash('msg','Data has been Added'); 
      return redirect()->route('All-Teachers')->with('TeacherAdded','Data Has Been Inserted Successfully');
    }
    function delete(Request $request , $id)
    {
        $data=Teacher::findOrFail($id);
        $data->delete();
        return redirect()->route('All-Teachers')->with('TeacherDeleted','Teacher Has Been Removed Successfully');
    }
    function edit(Request $req , $id)
    {
        $data=Teacher::findOrFail($id);
        return view('admin.teacher.editteacher',['data'=>$data]);
    }
    function update(Request $req , $id)
    {
      //validation
      $req->validate([
        'name'        => 'required  |max:30',
        'image'        => 'required',
       
      ]);
      //array
        $data=Teacher::findOrFail($req->id);
        $data->name=$req->name;
        if($req->hasfile('image'))
        {
          $image=$req->file('image');
          $ext = $image->extension();
          $file=time().'.'.$ext;
          $image->storeAs('public/post/Teachers_images',$file);
          $data['image']=$file;
        }
        $data->save();
        return redirect()->route('All-Teachers')->with('Teacherupdated','Teacher Has Been Updated Successfully');
    }
}
