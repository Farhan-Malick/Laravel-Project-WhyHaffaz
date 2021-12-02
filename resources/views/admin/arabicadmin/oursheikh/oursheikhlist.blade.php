@extends('admin.layouts.app')
@section('main-content')

<div class="content-wrapper" dir="{{('rtl')}}">

    <div class="card">
        <div class="card-header">
           <h2 >Our Sheikhs Section</h2>
            <div class="col-sm-12" style="text-align: center; color:green; font-size:20px">{{session('msg')}}</div>
            <div class="col-sm-12" style="text-align: center; color:red; font-size:20px">{{session('msgForDelete')}}</div>
        </div>
        <!-- <div class="card-header">
          <a  class="btn btn-success " href="{{ URL('/admin/arabicadmin/oursheikh/oursheikhadd')}}">Add Post</a>
         </div> -->
        <!-- /.card-header -->
        <div class="card-body  ">
           <table id="example1" class="table table-bordered  table-striped">
              <thead>
                 <tr width="100%">
                    <th width="10%">ID</th>
                    <th width="20">Heading</th>
                    <th width="50%">Description </th>
                    <th width="15%">Action</th>
                 </tr>
              </thead>
              <tbody>
              <?php  
                  // echo '<pre>';
                  // print_r([$our_result]);
                  // die();
               ?>
                 @foreach ($our_result as $list)
                 <tr>
                 <td>{{$list->id}}</td>
                     <td>{{$list->heading}}</td>
                     <td class="toggle-text" >{{Str::limit($list->description1, 130)}}
                  <td>
                     <a  class="btn btn-primary" href="{{('/haffiz/admin/arabicadmin/oursheikh/oursheikhedit/'.$list->id)}}">Edit</a>
                     <a  class="btn btn-danger" href="{{('/haffiz/admin/arabicadmin/oursheikh/delete'.$list->id)}}" >Delete</a>
                  </td>
                </tr>
                 @endforeach
                </tbody>
              <tfoot>
                 <tr>
                    <th width="">ID</th>
                    <th width="40">Heading</th>
                    <th width="15">Description </th>
                    <th width="25%">Action</th>
                 </tr>
              </tfoot>
           </table>
        </div>
        <!-- /.card-body -->
     </div>
     <!-- IMAGES AND NAMES SECTION OF Honorable Sheikhs -->
   <!-- ------------------------------------------------------------------------------------------------ -->
   <div class="card">
               <div class="card-header">
                  <h2 >Our Honorable Sheikhs</h2></div>
               <div class="card-header">
                  <a  class="btn btn-success" href="{{ URL('/admin/arabicadmin/oursheikh/oursheikhpart/oursheikhadd')}}">Add Post</a>
               </div>
               <!-- /.card-header -->
               <div class="card-body">
               <table id="myTable" class="table table-bordered table-striped table-responsive-xl" >
                  <thead>
                  <tr >
                  <th width="10%">ID</th>
                    <th width="20%">First Name</th>
                    <th width="20%">Last Name</th>
                    <th width="30%">Images</th>
                    <th width="20%">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                  @foreach ($no_result as $list)
                  <tr>
                     <td>{{$list->id}}</td>
                     <td>{{$list->fname}}</td>
                     <td>{{$list->lname}}</td>
                     <td><img src="{{ asset('storage/app/public/post/arabic_oursheikhs/'.$list->image) }}" width="150px" height="100px"/></td>
                  <td>
                     <a  class="btn btn-primary" href="{{('/haffiz/admin/arabicadmin/oursheikh/oursheikhpart/oursheikhedit/'.$list->id)}}">Edit</a>
                     <a  class="btn btn-danger" href="{{('/haffiz/admin/arabicadmin/oursheikh/oursheikhpart/delete'.$list->id)}}" >Delete</a>
                  </td>
                </tr>
                 @endforeach
                  </tr>
                  <tr>
                  </tbody>
                  <tfoot>
                  <tr>
                 <th width="5%">ID</th>
                    <th width="20%">First Name</th>
                    <th width="20%">Last Name</th>
                    <th width="30%">Images</th>
                    <th width="20%">Action</th>   
                  </tr>
                  </tfoot>
                </table>

               </div>
               <!-- /.card-body -->
            </div>
   
</div>
@endsection

