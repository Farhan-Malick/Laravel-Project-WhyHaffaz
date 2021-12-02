@extends('admin.layouts.app')
@section('main-content')

<div class="content-wrapper">
    <hr>
    <div class="col-md-12 float-left">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title text-lg float-left col-md-12" >
                    Edit Why-Haffez Section
                    <a  class="float-right btn btn-danger" href="{{ URL('/admin/oursheikh/oursheikhlist')}}">Back</a>
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                
                <div class="tab-content p-0">
                    <form action="{{ url('/admin/oursheikh/update/'.$our_result['0']->id)}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="card-body">
                        
                        <div class="form-group">
                          <label for="">Heading</label>
                          <input class="form-control" name="heading" id="" placeholder="Heading" value="{{$our_result['0']->heading}}">
                          @error('heading')
                              <span>{{ $message }}</span>
                          @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Description 1</label>
                            <textarea class="form-control" name="description1" id="" cols="30" rows="10" placeholder="Description ">{{$our_result['0']->description1}}</textarea>
                            @error('description1')
                                <span>{{ $message }}</span>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="">Description 2</label>
                            <textarea class="form-control" name="description2" id="" cols="30" rows="10" placeholder="Description ">{{$our_result['0']->description2}}</textarea>
                            @error('description2')
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
            </div>
            <!-- /.card-body -->
        </div>
       
    </div>

</div>

</div>

@endsection