@extends('admin.layouts.app')
@section('main-content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <hr>
        <div class="col-md-12 float-left">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title text-lg float-left col-md-12">
                        Add Teachers
                        <a class="float-right btn btn-danger" href="{{ route('All-Teachers') }}">Back</a>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ URL('admin/Add-Teachers') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Name </label>
                                <input type="text" name="name" class="form-control" id="exampleInputTitle"
                                    placeholder="Enter Title ">
                                @error('name')
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
                    <div class="tab-content p-0">

                    </div>
                </div><!-- /.card-body -->
            </div>

        </div>

    </div>

    </div>

@endsection
