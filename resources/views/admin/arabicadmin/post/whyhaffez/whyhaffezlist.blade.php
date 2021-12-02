@extends('admin.layouts.app')
@section('main-content')
      <div class="content-wrapper"  dir="{{('rtl')}}">

         <div class="card">

               <div class="card-header">
                  <h2 >Why-Haffez Head Section</h2> </div>
               <!-- <div class="card-header">
                  <a  class="btn btn-success" href="{{ URL('/admin/arabicadmin/post/whyhaffez/whyhaffezadd')}}">Add Post</a>
               </div> -->
               <!-- /.card-header -->
               <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                     <thead>
                        <tr width="100%">
                           <th width="">ID</th>
                           <th width="40">Title</th>
                           <th width="15">Description </th>
                           <th width="10">Image </th>
                           <th width="25%">Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php  
                           // echo '<pre>';
                           // print_r([$whyresult]);
                           // die();
                           ?>
                        @foreach ($why_result as $list)
                        <tr>
                        <td>{{ $list->id }}</td>
                           <td>{{Str::limit($list->heading, 20)}}</td>
                           <td class="toggle-text" >{{Str::limit($list->description, 50)}}</td>
                           <td><img src="{{ asset('storage/app/public/post/arabic_whyhaffez_image/'.$list->image) }}" width="150px" height="100px"/></td>
                           <td>
                              <a  class="btn btn-primary" href="{{('/haffiz/admin/arabicadmin/post/whyhaffez/whyhaffezedit/'.$list->id)}}">Edit</a>
                              <a  class="btn btn-danger" href="{{('/haffiz/admin/arabicadmin/post/whyhaffez/delete'.$list->id)}}" >Delete</a>
                           </td>
                        </tr>
                        @endforeach
                     </tbody>
                     <tfoot>
                        <tr>
                           <th width="4">ID</th>
                           <th width="40">Title</th>
                           <th width="15">Description </th>
                           <th width="10">Image</th>
                           <th width="25%">Action</th>
                        </tr>
                     </tfoot>
                  </table>
               </div>
               <!-- /.card-body -->
            </div>
            <!-- WHY_HAFFEZ 2ND SECTION -->
            <div class="card">
               <div class="card-header">
                  <h2 >Why-Haffez 2nd Section</h2></div>
               <!-- <div class="card-header">
                  <a  class="btn btn-success" href="{{ URL('/admin/arabicadmin/post/whyhaffez/second_whyhaffez/whyhaffezadd')}}">Add Post</a>
               </div> -->
               <!-- /.card-header -->
               <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                     <thead>
                        <tr width="100%">
                           <th width="">ID</th>
                           <th width="40">Title</th>
                           <th width="15">Description </th>
                           <th width="10">Image </th>
                           <th width="25%">Action</th>
                     </tr>
                     </thead>
                     <tbody>
                        <?php  
                           // echo '<pre>';
                           // print_r([$second_why_result]);
                           // die();
                           ?>
                        @foreach($second_why_result as $list)
                        <tr>
                        <td>{{ $list->id }}</td>
                           <td>{{Str::limit($list->heading, 20)}}</td>
                           <td class="toggle-text" >{{Str::limit($list->description, 50)}}</td>
                           <td><img src="{{ asset('storage/app/public/post/arabic_whyhaffezsection2/'.$list->image )}}" width="150px" height="100px"/></td>
                           <td>
                              <a  class="btn btn-primary" href="{{('/haffiz/admin/arabicadmin/post/whyhaffez/second_whyhaffez/whyhaffezedit/'.$list->id)}}">Edit</a>
                              <a  class="btn btn-danger" href="{{('/haffiz/admin/arabicadmin/second_whyhaffez/delete'.$list->id)}}" >Delete</a>
                           </td>
                        </tr>
                     @endforeach
                     </tbody>
                     <tfoot>
                        <tr>
                           <th width="4">ID</th>
                           <th width="40">Title</th>
                           <th width="15">Description </th>
                           <th width="10">Image</th>
                           <th width="25%">Action</th>
                        </tr>
                     </tfoot>
                  </table>
               </div>
               <!-- /.card-body -->
            </div>

            <!-- WHY_HAFFEZ 3rd SECTION -->
            <div class="card ">
               <div class="card-header">
                  <h2 >Why-Haffez 3rd Section</h2></div>
               <!-- <div class="card-header">
                  <a  class="btn btn-success" href="{{ URL('/admin/arabicadmin/post/whyhaffez/third_whyhaffez/whyhaffezadd')}}">Add Post</a>
               </div> -->
               <!-- /.card-header -->
               <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                     <thead>
                        <tr width="100%">
                           <th width="">ID</th>
                           <th width="40">Title</th>
                           <th width="15">Description </th>
                           <th width="10">Image </th>
                           <th width="25%">Action</th>
                     </tr>
                     </thead>
                     <tbody>
                        <?php  
                           // echo '<pre>';
                           // print_r([$second_why_result]);
                           // die();
                           ?>
                        @foreach($third_why_result as $list)
                        <tr>
                        <td>{{ $list->id }}</td>
                           <td>{{Str::limit($list->heading, 20)}}</td>
                           <td class="toggle-text" >{{Str::limit($list->description, 50)}}</td>
                           <td><img src="{{ asset('storage/app/public/post/arabic_whyhaffezsection3/'.$list->image )}}" width="150px" height="100px"/></td>
                           <td>
                              <a  class="btn btn-primary" href="{{('/haffiz/arabicadmin/admin/post/whyhaffez/third_whyhaffez/whyhaffezedit/'.$list->id)}}">Edit</a>
                              <a  class="btn btn-danger" href="{{('/haffiz/arabicadmin/admin/third_whyhaffez/delete'.$list->id)}}" >Delete</a>
                           </td>
                        </tr>
                     @endforeach
                     </tbody>
                     <tfoot>
                        <tr>
                           <th width="4">ID</th>
                           <th width="40">Title</th>
                           <th width="15">Description </th>
                           <th width="10">Image</th>
                           <th width="25%">Action</th>
                        </tr>
                     </tfoot>
                  </table>
               </div>
               <!-- /.card-body -->
            </div>

             <!-- WHY_HAFFEZ 4th SECTION -->
             <div class="card ">
               <div class="card-header">
                  <h2 >Why-Haffez 4th Section</h2></div>
               <!-- <div class="card-header">
                  <a  class="btn btn-success" href="{{ URL('/admin/arabicadmin/post/whyhaffez/fourth_whyhaffez/whyhaffezadd')}}">Add Post</a>
               </div> -->
               <!-- /.card-header -->
               <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                     <thead>
                        <tr width="100%">
                           <th width="">ID</th>
                           <th width="40">Title</th>
                           <th width="15">Description </th>
                           <th width="10">Image </th>
                           <th width="25%">Action</th>
                     </tr>
                     </thead>
                     <tbody>
                        <?php  
                           // echo '<pre>';
                           // print_r([$second_why_result]);
                           // die();
                           ?>
                        @foreach($fourth_why_result as $list)
                        <tr>
                        <td>{{ $list->id }}</td>
                           <td>{{Str::limit($list->heading, 20)}}</td>
                           <td class="toggle-text" >{{Str::limit($list->description, 50)}}</td>
                           <td><img src="{{ asset('storage/app/public/post/arabic_whyhaffezsection4/'.$list->image )}}" width="150px" height="100px"/></td>
                           <td>
                              <a  class="btn btn-primary" href="{{('/haffiz/admin/arabicadmin/post/whyhaffez/fourth_whyhaffez/whyhaffezedit/'.$list->id)}}">Edit</a>
                              <a  class="btn btn-danger" href="{{('/haffiz/admin/arabicadmin/fourth_whyhaffez/delete'.$list->id)}}" >Delete</a>
                           </td>
                        </tr>
                     @endforeach
                     </tbody>
                     <tfoot>
                        <tr>
                           <th width="4">ID</th>
                           <th width="40">Title</th>
                           <th width="15">Description </th>
                           <th width="10">Image</th>
                           <th width="25%">Action</th>
                        </tr>
                     </tfoot>
                     
                  </table>
               </div>
               <!-- /.card-body -->
            </div>

             <!-- WHY_HAFFEZ 5th SECTION -->
             <div class="card ">
               <div class="card-header">
                  <h2 >Why-Haffez 5th Section</h2>  </div>
               <!-- <div class="card-header">
                  <a  class="btn btn-success" href="{{ URL('/admin/arabicadmin/post/whyhaffez/fifth_whyhaffez/whyhaffezadd')}}">Add Post</a>
               </div> -->
               <!-- /.card-header -->
               <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                     <thead>
                        <tr width="100%">
                           <th width="">ID</th>
                           <th width="40">Title</th>
                           <th width="15">Description </th>
                           <th width="10">Image </th>
                           <th width="25%">Action</th>
                     </tr>
                     </thead>
                     <tbody>
                        <?php  
                           // echo '<pre>';
                           // print_r([$second_why_result]);
                           // die();
                           ?>
                        @foreach($fifth_why_result as $list)
                        <tr>
                        <td>{{ $list->id }}</td>
                           <td>{{Str::limit($list->heading, 20)}}</td>
                           <td class="toggle-text" >{{Str::limit($list->description, 50)}}</td>
                           <td><img src="{{ asset('storage/app/public/post/arabic_whyhaffezsection5/'.$list->image )}}" width="150px" height="100px"/></td>
                           <td>
                              <a  class="btn btn-primary" href="{{('/haffiz/admin/arabicadmin/post/whyhaffez/fifth_whyhaffez/whyhaffezedit/'.$list->id)}}">Edit</a>
                              <a  class="btn btn-danger" href="{{('/haffiz/admin/arabicadmin/fifth_whyhaffez/delete'.$list->id)}}" >Delete</a>
                           </td>
                        </tr>
                     @endforeach
                     </tbody>
                     <tfoot>
                        <tr>
                           <th width="4">ID</th>
                           <th width="40">Title</th>
                           <th width="15">Description </th>
                           <th width="10">Image</th>
                           <th width="25%">Action</th>
                        </tr>
                     </tfoot>
                     
                  </table>
               </div>
               <!-- /.card-body -->
            </div>
              <!-- WHY_HAFFEZ 6th SECTION -->
              <div class="card ">
               <div class="card-header">
                  <h2 >Why-Haffez 6th Section</h2></div>
               <!-- <div class="card-header">
                  <a  class="btn btn-success" href="{{ URL('/admin/arabicadmin/post/whyhaffez/sixth_whyhaffez/whyhaffezadd')}}">Add Post</a>
               </div> -->
               <!-- /.card-header -->
               <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                     <thead>
                        <tr width="100%">
                           <th width="">ID</th>
                           <th width="40">Title</th>
                           <th width="15">Description </th>
                           <th width="10">Image </th>
                           <th width="25%">Action</th>
                     </tr>
                     </thead>
                     <tbody>
                        <?php  
                           // echo '<pre>';
                           // print_r([$second_why_result]);
                           // die();
                           ?>
                        @foreach($sixth_why_result as $list)
                        <tr>
                        <td>{{ $list->id }}</td>
                           <td>{{Str::limit($list->heading, 20)}}</td>
                           <td class="toggle-text" >{{Str::limit($list->description, 50)}}</td>
                           <td><img src="{{ asset('storage/app/public/post/arabic_whyhaffezsection6/'.$list->image )}}" width="150px" height="100px"/></td>
                           <td>
                              <a  class="btn btn-primary" href="{{('/haffiz/admin/arabicadmin/post/whyhaffez/sixth_whyhaffez/whyhaffezedit/'.$list->id)}}">Edit</a>
                              <a  class="btn btn-danger" href="{{('/haffiz/admin/arabicadmin/sixth_whyhaffez/delete'.$list->id)}}" >Delete</a>
                           </td>
                        </tr>
                     @endforeach
                     </tbody>
                     <tfoot>
                        <tr>
                           <th width="4">ID</th>
                           <th width="40">Title</th>
                           <th width="15">Description</th>
                           <th width="10">Image</th>
                           <th width="25%">Action</th>
                        </tr>
                     </tfoot>
                     
                  </table>
               </div>
               <!-- /.card-body -->
            </div>
             <!-- WHY_HAFFEZ 7th SECTION -->
             <div class="card ">
               <div class="card-header">
                  <h2 >Why-Haffez 7th Section</h2></div>
               <!-- <div class="card-header">
                  <a  class="btn btn-success" href="{{ URL('/admin/arabicadmin/post/whyhaffez/seventh_whyhaffez/whyhaffezadd')}}">Add Post</a>
               </div> -->
               <!-- /.card-header -->
               <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                     <thead>
                        <tr width="100%">
                           <th width="">ID</th>
                           <th width="40">Title</th>
                           <th width="15">Description </th>
                           <th width="10">Image </th>
                           <th width="25%">Action</th>
                     </tr>
                     </thead>
                     <tbody>
                        <?php  
                           // echo '<pre>';
                           // print_r([$second_why_result]);
                           // die();
                           ?>
                        @foreach($seventh_why_result as $list)
                        <tr>
                        <td>{{ $list->id }}</td>
                           <td>{{Str::limit($list->heading, 20)}}</td>
                           <td class="toggle-text" >{{Str::limit($list->description, 50)}}</td>
                           <td><img src="{{ asset('storage/app/public/post/arabic_whyhaffezsection7/'.$list->image )}}" width="150px" height="100px"/></td>
                           <td>
                              <a  class="btn btn-primary" href="{{('/haffiz/admin/arabicadmin/post/whyhaffez/seventh_whyhaffez/whyhaffezedit/'.$list->id)}}">Edit</a>
                              <a  class="btn btn-danger" href="{{('/haffiz/admin/arabicadmin/seventh_whyhaffez/delete'.$list->id)}}" >Delete</a>
                           </td>
                        </tr>
                     @endforeach
                     </tbody>
                     <tfoot>
                        <tr>
                           <th width="4">ID</th>
                           <th width="40">Title</th>
                           <th width="15">Description </th>
                           <th width="10">Image</th>
                           <th width="25%">Action</th>
                        </tr>
                     </tfoot>
                     
                  </table>
               </div>
               <!-- /.card-body -->
            </div>
         </div> 
      </div>
         

  
</div>

@endsection