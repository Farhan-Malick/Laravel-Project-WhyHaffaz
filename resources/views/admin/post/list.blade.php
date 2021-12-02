@extends('admin.layouts.app')
@section('main-content')
<div class="content-wrapper">

    <div class="card" >
        <div class="card-header">
           <h2 >Home Section</h2>
            <div class="col-sm-12" style="text-align: center; color:green; font-size:20px">{{session('msg')}}</div>
            <div class="col-sm-12" style="text-align: center; color:red; font-size:20px">{{session('msgForDelete')}}</div>
        </div>
        <!-- <div class="card-header">
          <a  class="btn btn-success" href="{{ URL('/admin/post/add')}}">Add Post</a>
         </div> -->
        <!-- /.card-header -->
        <div class="card-body">
           <table id="example1" class="table table-bordered table-striped table-responsive">
              <thead>
                 <tr width="100%">
                    <th width="">ID</th>
                    <th width="10%">Title 1</th>
                    <th width="20%">Description 1</th>
                    <th width="10%">Title 2</th>
                    <th width="20%">Description 2</th>
                    <th width="10%">Image 1</th>
                    <th width="10%">Image 2</th>
                    <th width="20%">Action</th>
                 </tr>
              </thead>
              <tbody>
              <?php  
                  // echo '<pre>';
                  // print_r([$result]);
                  // die();
               ?>
                 @foreach ($result as $list)
                 <tr>
                  <td>{{$list->id}}</td>
                  <td>{{$list->title}}</td>
                  <td class="toggle-text" >{{Str::limit($list->description, 50)}}
                  <td>{{$list->title2}}</td>
                  <td class="toggle-text" >{{Str::limit($list->description2, 50)}}
                  <td><img src="{{ asset('storage/app/public/post/home/'.$list->image) }}" width="150px"/></td>
                  <td><img src="{{ asset('storage/app/public/post/secondbanner/'.$list->image2) }}" width="150px"/></td>
                  
                  <td>
                     <a  class="btn btn-primary" href="{{('/haffiz/admin/post/edit/'.$list->id)}}">Edit</a>
                     <a  class="btn btn-danger" href="{{('/haffiz/admin/post/delete/'.$list->id)}}">Delete</a>
                  </td>
                </tr>
                 @endforeach

                </tbody>
              <tfoot>
                 <tr>
                    <th>ID</th>
                    <th>Title 1</th>
                    <th>Description 1</th>
                    <th>Title 2</th>
                    <th>Description 2</th>
                    <th>Image 1</th>
                    <th>Image 2</th>
                    <th>Action</th>
                 </tr>
              </tfoot>
           </table>
        </div>


       
     </div>
     </div>


     
     </div>
 

@endsection