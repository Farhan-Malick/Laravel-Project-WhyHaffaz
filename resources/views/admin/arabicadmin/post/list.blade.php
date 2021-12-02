@extends('admin.layouts.app')
@section('main-content')
<div class="content-wrapper"dir="{{('rtl')}}" >

    <div class="card" >
        <div class="card-header">
           <h2>Home Section</h2>
            <div class="col-sm-12" style="text-align: center; color:green; font-size:20px">{{session('msg')}}</div>
            <div class="col-sm-12" style="text-align: center; color:red; font-size:20px">{{session('msgForDelete')}}</div>
        </div>
        <!-- <div class="card-header " >
            <a  class="btn btn-success "  href="{{ URL('/admin/arabicadmin/post/add')}}">Add Post</a>
         </div> -->
        <!-- /.card-header -->
        <div class="card-body">
           <table id="example1" class="table table-bordered table-striped">
              <thead class="p-0">
                 <tr width="100%">
                    <th width="3%">ID</th>
                    <th width="10%">Title 1</th>
                    <th width="22%">Description 1</th>
                    <th width="10%">Image 1</th>
                    <th width="10%">Action</th>
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
                  <td class="toggle-text" >{{Str::limit($list->description, 70)}}
                  <td><img src="{{ asset('storage/app/public/post/arabicadmin/'.$list->image) }}" width="150px"/></td>
                  
                  <td>
                     <a  class="btn btn-primary" href="{{('/haffiz/admin/arabicadmin/post/edit/'.$list->id)}}">Edit</a>
                     <a  class="btn btn-danger" href="{{('/haffiz/admin/arabicadmin/post/delete/'.$list->id)}}">Delete</a>
                  </td>
                </tr>
                 @endforeach
                </tbody>
              <tfoot>
                 <tr>
                    <th>ID</th>
                    <th>Title 1</th>
                    <th>Description 1</th>
                    <th>Image 1</th>
                    <th>Action</th>
                 </tr>
              </tfoot>
           </table>
        </div>


       
     </div>
     </div>


     
     </div>
 

@endsection