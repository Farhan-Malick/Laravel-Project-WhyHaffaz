@extends('admin.layouts.app')
@section('main-content')
<div class="content-wrapper">

    <div class="card">
    <div class="card-header">
           <h2 >Footer Paragraph</h2>
            <div class="col-sm-12" style="text-align: center; color:green; font-size:20px">{{session('msg')}}</div>
            <div class="col-sm-12" style="text-align: center; color:red; font-size:20px">{{session('msgForDelete')}}</div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
           <table id="example1" class="table table-bordered table-striped">
              <thead>
                 <tr>
                    <th width="5%">ID</th>
                    <th width="50%">Long Description </th>
                    <th width="20%">Action</th>
                 </tr>
              </thead>
              <tbody>
                 @foreach ($para_result as $list)
                 <tr>
                  <td>{{$list->id}}</td>
                  <td>{{$list->paragraph}}</td>
                  <td>
                     <a  class="btn btn-primary" href="{{URL('/admin/footer/footeredit/'.$list->id)}}">Edit</a>
                  </td>
                </tr>
                 @endforeach

                </tbody>
              <tfoot>
                 <tr>
                 <tr>
                    <th width="5%">ID</th>
                    <th width="50%">Long Description </th>
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