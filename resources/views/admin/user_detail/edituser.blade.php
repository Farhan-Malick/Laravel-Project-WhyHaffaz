@extends('admin.layouts.app')
@section('main-content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <hr>
    <div class="col-md-12 float-left">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title text-lg float-left col-md-12" >
                    Edit User Details
                    <a  class="float-right btn btn-danger" href="{{ route('user-booking')}}">Back</a>
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                
                <div class="tab-content p-0">
                <form action="{{ url('/admin/User-Detail/'.$data['id']) }}" method="post">
                    
                    @csrf
                   
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" id="" name="name" value="{{$data['name']}}" placeholder="Enter Your Registered Name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Choose the date on Sunday at 16:00 , which wants the booking</label>
                        <input type="date" id="datepick" name="date" value="{{$data['date']}}"  class="form-control">
                    </div>
                    <div class="form-group">
                        <label>No of people</label>
                        <input type="tel" id="datepick" name="no_of_people" value="{{$data['no_of_people']}}"  class="form-control">
                        <span style="color: green">Hourly rate per person: 30</span>
                    </div>
                    <div class="form-group">
                        <label>Do you have any aspirations or special requests from the lesson? (my choice)</label>
                        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"> {{$data['description']}} </textarea>
                    </div>
                
                <a href="{{URL('/user/english/user/our-sheikh')}}" class="btn btn-danger">Cancel</a>
                <button type="submit" name="submit" id="submit" class="btn btn-primary">Confirm</button>
                </form>
                </div>
            </div><!-- /.card-body -->
        </div>
       
    </div>

</div>

</div>

@endsection