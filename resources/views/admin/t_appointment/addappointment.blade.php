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
                        <a class="float-right btn btn-danger" href="{{ route('All-Appoints') }}">Back</a>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ url('admin/Added-Appointments') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Day </label>
                                <input type="text" name="day" class="form-control" id="exampleInputTitle"
                                    placeholder="Enter Day ">
                                @error('day')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Time </label>
                                <input type="time" name="time" class="form-control" id="exampleInputTitle"
                                    placeholder="Enter Time ">
                                @error('time')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Hourly Price Per Person </label>
                                <input type="tel" name="Hr_price_per_person" class="form-control" id="exampleInputTitle"
                                    placeholder="Enter Price Here ">
                                @error('Hr_price_per_person')
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
