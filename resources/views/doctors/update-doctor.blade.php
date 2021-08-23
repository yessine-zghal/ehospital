@extends('layouts.layout')

@section('content')

    <div class="page-wrapper" style="min-height: 714px;">
        <div class="content">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h4 class="page-title">Update Doctor</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <form action="{{ route('store-doctor-update', $doctor->id) }}" method="POST" enctype='multipart/form-data'>
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>First Name <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" value="{{ $doctor->Firstname }}" name="Firstname">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input class="form-control" type="text" value="{{ $doctor->lastname }}" name="Lastname">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Username <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" value="{{ $doctor->username }}" name="username">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Email <span class="text-danger">*</span></label>
                                    <input class="form-control" type="email" value="{{ $doctor->email }}" name="email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Date of Birth</label>
                                    <div class="cal-icon">
                                        <input type="date" class="form-control" value="{{ $doctor->dateOfBirth }}" name="dateofbirth">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group gender-select">
                                    <label class="gen-label">Gender:</label>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" name="gender" class="form-check-input" value="Male" @if($doctor->gender == 'Male') checked @endif>Male
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" name="gender" class="form-check-input" value="Female" @if($doctor->gender == 'Female') checked @endif>Female
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control" name="adress" value="{{ $doctor->adress }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label>Country</label>
                                            <select class="form-control select select2-hidden-accessible" tabindex="-1"
                                                aria-hidden="true" name="country">
                                                <option @if($doctor->country == 'Tunisia') selected @endif>Tunisia</option>
                                                <option @if($doctor->country == 'United Kingdom') selected @endif>United Kingdom</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="text" class="form-control" name="city" value="{{ $doctor->city }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label>State/Province</label>
                                            <select class="form-control select select2-hidden-accessible" tabindex="-1"
                                                aria-hidden="true" name="state">
                                                <option @if($doctor->state == 'Sfax') selected @endif>Sfax</option>
                                                <option @if($doctor->state == 'Alaska') selected @endif>Alaska</option>
                                                <option @if($doctor->state == 'Alabama') selected @endif>Alabama</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label>Speciality</label>
                                            <input type="text" class="form-control" name="speciality" value="{{ $doctor->speciality }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Phone </label>
                                    <input class="form-control" type="number" name="phone" value="{{ $doctor->phone }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Short Biography</label>
                            <textarea class="form-control" rows="3" cols="30" name="biography" >{{ $doctor->biography }}</textarea>
                        </div>
                        <div class="form-group">
                            <label class="display-block">Status</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="doctor_active"
                                    value="option1" @if($doctor->status == 'option1') checked @endif>
                                <label class="form-check-label" for="doctor_active">
                                    Active
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="doctor_inactive"
                                    value="option2" @if($doctor->status == 'option2') checked @endif>
                                <label class="form-check-label" for="doctor_inactive">
                                    Inactive
                                </label>
                            </div>
                        </div>
                        <div class="m-t-20 text-center">
                            <button class="btn btn-primary submit-btn">Update Doctor</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
