@extends('admin.layouts.app')
@section('main-content')
<div class="content-wrapper">

    <div class="card">
        <div class="card-header">
           <h2 >About Section</h2>
            <div class="col-sm-12" style="text-align: center; color:green; font-size:20px">{{session('msg')}}</div>
            <div class="col-sm-12" style="text-align: center; color:red; font-size:20px">{{session('msgForDelete')}}</div>
        </div>
        <!-- <div class="card-header">
          <a  class="btn btn-success" href="{{ URL('/admin/post/about/about')}}">Add Post</a>
         </div> -->
        <!-- /.card-header -->
        <div class="card-body">
           <table id="example1" class="table table-bordered table-striped table-responsive">
              <thead>
                 <tr width="100%">
                 <th width="">ID</th>
                    <th width="15%">Title </th>
                    <th width="20%">Heading</th>
                    <th width="30%">Description </th>
                    <th width="10%">Image </th>
                    <th width="25%">Action</th>
                 </tr>
              </thead>
              <tbody>
              <?php  
                  // echo '<pre>';
                  // print_r([$aboutresult]);
                  // die();
               ?>
                 @foreach ($aboutresult as $aboutlist)
                 <tr>
                     <td>{{$aboutlist->id}}</td>
                     <td>{{$aboutlist->title3}}</td>
                     <td>{{$aboutlist->heading3}}</td>
                     <td class="toggle-text" >{{Str::limit($aboutlist->description3, 100)}}</td>
                     <td><img src="{{ asset('storage/app/public/post/about_image/'.$aboutlist->image3) }}" width="150px" height="100px"/></td>
                  <td>
                     <a  class="btn btn-primary" href="{{('/haffiz/admin/post/about/aboutedit/'.$aboutlist->id)}}">Edit</a>
                     <a  class="btn btn-danger" href="{{('/haffiz/admin/post/delete'.$aboutlist->id)}}" >Delete</a>
                  </td>
                </tr>
                 @endforeach
                </tbody>
              <tfoot>
                 <tr>
                 <th width="">ID</th>
                    <th width="10%">Title </th>
                    <th width="20%">Heading</th>
                    <th width="35%">Description </th>
                    <th width="10%">Image </th>
                    <th width="25%">Action</th>
                 </tr>
              </tfoot>
           </table>
        </div>
        <!-- /.card-body -->
     </div>
     </div>
     </div>
 

@endsection