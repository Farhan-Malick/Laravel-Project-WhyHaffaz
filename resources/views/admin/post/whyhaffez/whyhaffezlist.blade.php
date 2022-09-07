@extends('admin.layouts.app')
@section('main-content')
      <div class="content-wrapper">

         <div class="card">

               <div class="card-header">
                  <h2 >Why-Haffez Head Section</h2> </div>
               <!-- <div class="card-header">
                  <a  class="btn btn-success" href="{{ URL('/admin/post/whyhaffez/whyhaffezadd')}}">Add Post</a>
               </div> -->
               <!-- /.card-header -->
               <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped table-responsive">
                     <thead>
                        <tr width="">
                           <th width="">ID</th>
                           <th width="15%">Title</th>
                           <th width="50%">Description</th>
                           <th width="10%">Image</th>
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
                           <td>{{$list->heading}}</td>
                           <td class="toggle-text" >{{$list->description}}</td>
                           <td><img src="{{ asset('storage/app/public/post/whyhaffez_image/'.$list->image) }}" width="150px" height="100px"/></td>
                           <td>
                              <a  class="btn btn-primary" href="{{URL('/admin/post/whyhaffez/whyhaffezedit/'.$list->id)}}">Edit</a>
                              <a  class="btn btn-danger" href="{{URL('/admin/post/whyhaffez/delete'.$list->id)}}" >Delete</a>
                           </td>
                        </tr>
                        @endforeach
                     </tbody>
                     <tfoot>
                        <tr>
                        <th width="">ID</th>
                           <th width="15%">Title</th>
                           <th width="50%">Description</th>
                           <th width="10%">Image</th>
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
                  <a  class="btn btn-success" href="{{ URL('/admin/post/whyhaffez/second_whyhaffez/whyhaffezadd')}}">Add Post</a>
               </div> -->
               <!-- /.card-header -->
               <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped table-responsive">
                     <thead>
                        <tr width="100%">
                        <th width="">ID</th>
                           <th width="15%">Title</th>
                           <th width="50%">Description</th>
                           <th width="10%">Image</th>
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
                        <td>{{$list->heading}}</td>
                           <td class="toggle-text" >{{$list->description}}</td>
                           <td><img src="{{ asset('storage/app/public/post/whyhaffezsection2/'.$list->image )}}" width="150px" height="100px"/></td>
                           <td>
                              <a  class="btn btn-primary" href="{{URL('/admin/post/whyhaffez/second_whyhaffez/whyhaffezedit/'.$list->id)}}">Edit</a>
                              <a  class="btn btn-danger" href="{{URL('/admin/second_whyhaffez/delete'.$list->id)}}" >Delete</a>
                           </td>
                        </tr>
                     @endforeach
                     </tbody>
                     <tfoot>
                        <tr>
                           <th width="">ID</th>
                        
                           <th width="15%">Title</th>
                           <th width="50%">Description</th>
                           <th width="10%">Image</th>
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
                  <h2 >Why-Haffez 3rd Section</h2> 
               </div>
               <!-- <div class="card-header">
                  <a  class="btn btn-success" href="{{ URL('/admin/post/whyhaffez/third_whyhaffez/whyhaffezadd')}}">Add Post</a>
               </div> -->
              
               <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped table-responsive">
                     <thead>
                        <tr width="100%">
                        <th width="">ID</th>
                  
                        <th width="15%">Title</th>
                           <th width="50%">Description</th>
                           <th width="10%">Image</th>
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
                        <td>{{$list->heading}}</td>
                           <td class="toggle-text" >{{$list->description}}</td>
                           <td><img src="{{ asset('storage/app/public/post/whyhaffezsection3/'.$list->image )}}" width="150px" height="100px"/></td>
                           <td>
                              <a  class="btn btn-primary" href="{{URL('/admin/post/whyhaffez/third_whyhaffez/whyhaffezedit/'.$list->id)}}">Edit</a>
                              <a  class="btn btn-danger" href="{{URL('/admin/third_whyhaffez/delete'.$list->id)}}" >Delete</a>
                           </td>
                        </tr>
                     @endforeach
                     </tbody>
                     <tfoot>
                        <tr>
                        <th width="">ID</th>
                      
                        <th width="15%">Title</th>
                           <th width="50%">Description</th>
                           <th width="10%">Image</th>
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
                  <a  class="btn btn-success" href="{{ URL('/admin/post/whyhaffez/fourth_whyhaffez/whyhaffezadd')}}">Add Post</a>
               </div> -->
               <!-- /.card-header -->
               <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped table-responsive">
                     <thead>
                        <tr width="100%">
                        <th width="">ID</th>
                         
                        <th width="15%">Title</th>
                           <th width="50%">Description</th>
                           <th width="10%">Image</th>
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
                           <td>{{$list->heading}}</td>
                           <td class="toggle-text" >{{$list->description}}</td>
                           <td><img src="{{ asset('storage/app/public/post/whyhaffezsection4/'.$list->image )}}" width="150px" height="100px"/></td>
                           <td>
                              <a  class="btn btn-primary" href="{{URL('/admin/post/whyhaffez/fourth_whyhaffez/whyhaffezedit/'.$list->id)}}">Edit</a>
                              <a  class="btn btn-danger" href="{{URL('/admin/fourth_whyhaffez/delete'.$list->id)}}" >Delete</a>
                           </td>
                        </tr>
                     @endforeach
                     </tbody>
                     <tfoot>
                        <tr>
                        <th width="">ID</th>
                          
                        <th width="15%">Title</th>
                           <th width="50%">Description</th>
                           <th width="10%">Image</th>
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
                  <h2 >Why-Haffez 5th Section</h2> </div>
               <!-- <div class="card-header">
                  <a  class="btn btn-success" href="{{ URL('/admin/post/whyhaffez/fifth_whyhaffez/whyhaffezadd')}}">Add Post</a>
               </div> -->
               <!-- /.card-header -->
               <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped table-responsive">
                     <thead>
                        <tr width="100%">
                        <th width="">ID</th>
                     
                        <th width="15%">Title</th>
                           <th width="50%">Description</th>
                           <th width="10%">Image</th>
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
                        <td>{{$list->heading}}</td>
                           <td class="toggle-text" >{{$list->description}}</td>
                           <td><img src="{{ asset('storage/app/public/post/whyhaffezsection5/'.$list->image )}}" width="150px" height="100px"/></td>
                           <td>
                              <a  class="btn btn-primary" href="{{URL('/admin/post/whyhaffez/fifth_whyhaffez/whyhaffezedit/'.$list->id)}}">Edit</a>
                              <a  class="btn btn-danger" href="{{URL('/admin/fifth_whyhaffez/delete'.$list->id)}}" >Delete</a>
                           </td>
                        </tr>
                     @endforeach
                     </tbody>
                     <tfoot>
                        <tr>
                        <th width="">ID</th>
                          
                        <th width="15%">Title</th>
                           <th width="50%">Description</th>
                           <th width="10%">Image</th>
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
                  <a  class="btn btn-success" href="{{ URL('/admin/post/whyhaffez/sixth_whyhaffez/whyhaffezadd')}}">Add Post</a>
               </div> -->
               <!-- /.card-header -->
               <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped table-responsive">
                     <thead>
                        <tr width="100%">
                        <th width="">ID</th>
                         
                        <th width="15%">Title</th>
                           <th width="50%">Description</th>
                           <th width="10%">Image</th>
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
                           <td>{{$list->heading}}</td>
                           <td class="toggle-text" >{{$list->description}}</td>
                           <td><img src="{{ asset('storage/app/public/post/whyhaffezsection6/'.$list->image )}}" width="150px" height="100px"/></td>
                           <td>
                              <a  class="btn btn-primary" href="{{URL('/admin/post/whyhaffez/sixth_whyhaffez/whyhaffezedit/'.$list->id)}}">Edit</a>
                              <a  class="btn btn-danger" href="{{URL('/admin/sixth_whyhaffez/delete'.$list->id)}}" >Delete</a>
                           </td>
                        </tr>
                     @endforeach
                     </tbody>
                     <tfoot>
                        <tr>
                        <th width="">ID</th>
                     
                        <th width="15%">Title</th>
                           <th width="50%">Description</th>
                           <th width="10%">Image</th>
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
                  <h2 >Why-Haffez 7th Section</h2>
               </div>
               <!-- <div class="card-header">
                  <a  class="btn btn-success" href="{{ URL('/admin/post/whyhaffez/seventh_whyhaffez/whyhaffezadd')}}">Add Post</a>
               </div> -->
               <!-- /.card-header -->
               <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped table-responsive">
                     <thead>
                        <tr width="100%">
                        <th width="">ID</th>
                         
                        <th width="15%">Title</th>
                           <th width="50%">Description</th>
                           <th width="10%">Image</th>
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
                           <td>{{$list->heading}}</td>
                           <td class="toggle-text" >{{$list->description}}</td>
                           <td><img src="{{ asset('storage/app/public/post/whyhaffezsection7/'.$list->image )}}" width="150px" height="100px"/></td>
                           <td>
                              <a  class="btn btn-primary" href="{{URL('/admin/post/whyhaffez/seventh_whyhaffez/whyhaffezedit/'.$list->id)}}">Edit</a>
                              <a  class="btn btn-danger" href="{{URL('/admin/seventh_whyhaffez/delete'.$list->id)}}" >Delete</a>
                           </td>
                        </tr>
                     @endforeach
                     </tbody>
                     <tfoot>
                        <tr>
                        <th width="">ID</th>
                      
                        <th width="15%">Title</th>
                           <th width="50%">Description</th>
                           <th width="10%">Image</th>
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