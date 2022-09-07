@extends('admin.layouts.app')
@section('main-content')
<div class="content-wrapper">

    <div class="card">
    <div class="card-header">
           <h2 >Contact Us Section</h2>
            <div class="col-sm-12" style="text-align: center; color:green; font-size:20px">{{session('msg')}}</div>
            <div class="col-sm-12" style="text-align: center; color:red; font-size:20px">{{session('msgForDelete')}}</div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
           <table id="example1" class="table table-bordered table-striped">
              <thead>
                 <tr>
                    <th width="">ID</th>
                    <th width="25%">Contact Us </th>
                    <th width="15%">Phone No</th>
                    <th width="40%">Email</th>
                    <th width="20%">Action</th>
                 </tr>
              </thead>
              <tbody>
                 @foreach ($con_result as $list)
                 <tr>
                  <td>{{$list->id}}</td>
                  <td>{{$list->contactus}}</td>
                  <td>{{$list->phone_no}}</td>
                  <td>{{$list->email}}</td>
                  <td>
                     <a  class="btn btn-primary" href="{{URL('/admin/contact/contactedit/'.$list->id)}}">Edit</a>
                  </td>
                </tr>
                 @endforeach

                </tbody>
              <tfoot>
                 <tr>
                 <th width="4%">ID</th>
                    <th width="10%">Contact Us </th>
                    <th width="10%">Phone No</th>
                    <th width="40%">Email</th>
                    <th width="20%">Action</th>
                 </tr>
              </tfoot>
           </table>
        </div>
        <!-- /.card-body -->
     </div>
     </div>
     </div>
 

@endsection