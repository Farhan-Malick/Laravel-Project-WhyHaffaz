@extends('admin.layouts.app')
@section('main-content')

<div class="content-wrapper" dir="{{('rtl')}}">
    <!-- Content Header (Page header) -->
  
    <hr>
    <div class="col-md-12 float-left">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title text-lg float-left col-md-12" >
                    Edit Footer Paragraph
                    <a  class="float-right btn btn-danger" href="{{ URL('/admin/arabicadmin/footer/list')}}">Back</a>
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="tab-content p-0">
                    <form action="{{ url('/admin/arabicadmin/footer/update/'.$para_result['0']->id)}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="card-body">
                      <div class="form-group">
                            <label for="">Paragraph </label>
                            <textarea class="form-control" name="paragraph" id="" cols="30" rows="10" placeholder="Paragraph ">{{$para_result['0']->paragraph}}</textarea>
                            @error('paragraph')
                                <span>{{ $message }}</span>
                            @enderror
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