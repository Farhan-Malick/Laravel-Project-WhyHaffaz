@extends('admin.layouts.app')
@section('main-content')

<div class="content-wrapper"  dir="{{('rtl')}}">
    <!-- Content Header (Page header) -->
  
    <hr>
    <div class="col-md-12 float-left" >
        <div class="card">
            <div class="card-header">
                <h3 class="card-title text-lg float-left col-md-12" >
                    Manage Home Section
                    <a  class="float-right btn btn-danger" href="{{ URL('/admin/arabicadmin/post/list')}}">Back</a>
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                
                <div class="tab-content p-0">
                    <form action="{{ url('/admin/arabicadmin/post/submit')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="card-body">
                        <div class="form-group">
                          <label for="">Title 1</label>
                          <input type="text" name="title" class="form-control" id="exampleInputTitle" placeholder="Enter Title 1">
                          @error('title')
                              <span>{{$message }}</span>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="">Description 1</label>
                          <textarea class="form-control" name="description" id="" cols="30" rows="10" placeholder="Description 1"></textarea>
                          @error('description')
                              <span>{{$message }}</span>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="exampleInputFile">File input 1</label>
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
                          <span>{{$message }}</span>
                        @enderror
                        </div>
                        <!-- /.For Second Banner -->
                      </div>
                      <!-- <div class="card-header">
                        <h3 class="card-title text-lg float-left col-md-12" >
                           Second Banner
                        </h3>
                    </div> <div class="card-body">
                          <div class="form-group">
                            <label for="">Title 2</label>
                            <input type="text" name="title2" class="form-control" id="exampleInputTitle" placeholder="Enter Title 2">
                            @error('title2')
                                <span>{{ $message }}</span>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="">Description 2</label>
                            <textarea class="form-control" name="description2" id="" cols="30" rows="10" placeholder="Description 2"></textarea>
                            @error('description2')
                                <span>{{ $message }}</span>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="exampleInputFile">File input 2</label>
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" name="image2" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                              </div>
                              <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                              </div>
                            </div>
                            @error('image2')
                            <span>{{ $message }}</span>
                          @enderror
                          </div>
                          {{-- <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                          </div> --}}
                       </div>
                        /.card-body -->
                
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