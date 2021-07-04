@extends('layouts.app')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">


            <div class="col-md-7 col-lg-8 col-xl-9 container m-auto">
                <div class="card">
                    <div class="card-body">
                        @if(session()->has('success'))

                        <div class="alert alert-success mt-4">
                              {{session()->get('success')}}
                        </div>
                        @endif
                        <!-- Profile Settings Form -->
                        <form action="{{route('patientUpdate',$patient['id'])}}" method="post">
                            @csrf
                            <div class="row form-row ">
                                <div class="col-12 col-md-12">

                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name="name" class="form-control" value="{{$patient->name}}">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Age</label>
                                        <div class="cal-icon">
                                            <input type="text" name="age" class="form-control datetimepicker" value="{{$patient->patient->age}} ">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group" >
                                        <label>Blood Group</label>
                                        <select class="form-control select" name="blood_group">
                                            <option>A-</option>
                                            <option>A+</option>
                                            <option>B-</option>
                                            <option>B+</option>
                                            <option>AB-</option>
                                            <option>AB+</option>
                                            <option>O-</option>
                                            <option>O+</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Email ID</label>
                                        <input type="email" name="email"class="form-control" value="{{$patient->email}}">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Mobile</label>
                                        <input type="text" name="phone" value="{{$patient->phone}}" class="form-control">
                                    </div>
                                </div>
                                {{-- @dd($patient->phone) --}}
                                <div class="col-12">
                                    <div class="form-group">
                                    <label>Address</label>
                                        <input type="text" name="address"class="form-control" value="{{$patient->patient->address}}">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                    <label>Gender</label>
                                        <input type="text" name="gender"class="form-control" value="{{$patient->patient->gender}}">
                                    </div>
                                </div>

                            <div class="submit-section">
                                <a href=""></a>
                                <button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
                            </div>
                        </form>
                        <!-- /Profile Settings Form -->

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /Page Content -->
@endsection
