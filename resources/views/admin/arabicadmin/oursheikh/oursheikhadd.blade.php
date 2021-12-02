@extends('admin.layouts.app')
@section('main-content')

<div class="content-wrapper" dir="{{('rtl')}}">
    <hr>
    <div class="col-md-12 float-left">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title text-lg float-left col-md-12" >
                    Manage Our Honorable Sheikhs Section
                    <a  class="float-right btn btn-danger" href="{{ URL('/admin/arabicadmin/oursheikh/oursheikhlist')}}">Back</a>
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="tab-content p-0">
                    <form action="{{ URL('/admin/arabicadmin/oursheikh/oursheikhsubmit')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="card-body">
                       
                        <div class="form-group">
                          <label for="">Heading </label>
                          <input type="text" name="heading" class="form-control" id="exampleInputTitle" placeholder="Enter Heading ">
                          @error('heading')
                              <span>{{ $message }}</span>
                          @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Description 1</label>
                            <textarea class="form-control" name="description1" id="" cols="30" rows="10" placeholder="Description "></textarea>
                            @error('description1')
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