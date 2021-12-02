@extends('admin.layouts.app')
@section('main-content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
  
    <hr>
    <div class="col-md-12 float-left">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title text-lg float-left col-md-12" >
                    Edit Contact Us Section
                    <a  class="float-right btn btn-danger" href="{{ URL('/admin/contact/list')}}">Back</a>
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                
                <div class="tab-content p-0">
                    <form action="{{ url('/admin/contact/update/'.$con_result['0']->id)}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="card-body">
                        <div class="form-group">
                          <label for="">Contact Us Via</label>
                          <input type="text" name="contactus" class="form-control" id="exampleInputTitle" value="{{$con_result['0']->contactus}}" placeholder="Contact">
                          @error('contactus')
                              <span>{{ $message }}</span>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="">Phone No</label>
                          <input type="num" class="form-control" name="phone_no" id="" placeholder="Phone No" value="{{$con_result['0']->phone_no}}">
                          @error('phone_no')
                              <span>{{ $message }}</span>
                          @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Email </label>
                            <input type="email" class="form-control" name="email" id="" placeholder="Phone No" value="{{$con_result['0']->email}}">
                            @error('email')
                                <span>{{ $message }}</span>
                            @enderror
                          </div>
                      </div>
                        <!-- /.card-body -->
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                </div>
            </div><!-- /.card-body -->
        </div>
       
    </div>

</div>

</div>

@endsection