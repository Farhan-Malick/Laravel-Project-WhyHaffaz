@extends('admin.layouts.app')
@section('main-content')

<div class="content-wrapper">
    <hr>
    <div class="col-md-12 float-left">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title text-lg float-left col-md-12" >
                    Manage Our Honorable Sheikhs Section
                    <a  class="float-right btn btn-danger" href="{{ URL('/admin/oursheikh/oursheikhlist')}}">Back</a>
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="tab-content p-0">
                    <form action="{{ URL('/admin/oursheikh/oursheikhpart/oursheikhsubmit2')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="card-body">
                       
                        <div class="form-group">
                          <label for="">First Name </label>
                          <input type="text" name="fname" class="form-control" id="exampleInputTitle" placeholder="Enter First Name ">
                          @error('fname')
                              <span>{{ $message }}</span>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="">Last Name </label>
                          <input type="text" name="lname" class="form-control" id="exampleInputTitle" placeholder="Enter Last Name ">
                          @error('lname')
                              <span>{{ $message }}</span>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="exampleInputFile">File input </label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text">Upload</span>
                            </div>
                          </div>
                          @error('image')
                          <span>{{ $message }}</span>
                        @enderror
                        </div>
                      </div>
                     
                     
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