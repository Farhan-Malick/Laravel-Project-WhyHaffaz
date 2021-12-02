@extends('admin.layouts.app')
@section('main-content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <hr>
    <div class="col-md-12 float-left">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title text-lg float-left col-md-12" >
                    Manage Home Section
                    <a  class="float-right btn btn-danger" href="{{ URL('/admin/post/list')}}">Back</a>
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                
                <div class="tab-content p-0">
                    <form action="{{ url('/admin/post/update/'.$result['0']->id)}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="card-body">
                        <div class="form-group">
                          <label for="">Title</label>
                          <input type="text" name="title" class="form-control" id="exampleInputTitle"  value="{{$result['0']->title}}" placeholder="Enter Title">
                          @error('title')
                              <span>{{ $message }}</span>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="">Description</label>
                          <textarea class="form-control" name="description" id="" cols="30" rows="10" placeholder="Description">{{$result['0']->description}} </textarea>
                          @error('description')
                              <span>{{ $message }}</span>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="exampleInputFile">File input</label>
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
                      <!-- /.card-body -->
                      
                        <div class="card-body">
                          <div class="form-group">
                            <label for="">Title 2</label>
                            <input type="text" name="title2" class="form-control" id="exampleInputTitle" value="{{$result['0']->title2}}" placeholder="Enter Title">
                            @error('title2')
                                <span>{{ $message }}</span>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="">Description 2</label>
                            <textarea class="form-control" name="description2" id="" cols="30" rows="10" placeholder="Description">{{$result['0']->description2}} </textarea>
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