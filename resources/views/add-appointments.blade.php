@extends('layouts.layout')

@section('content')

    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Add Appointment</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form method='POST' action='{{ route('add-appointment') }}'>
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Appointment ID</label>
                                <input class="form-control" type="text" value="APT-0001" name="Appointment_ID">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Patient Name</label>
                                <select class="select select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="Patient_Name">
                                    <option>Select</option>
                                    <option>Jennifer Robinson</option>
                                    <option>Terry Baker</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Department</label>
                                <select class="select select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="Department">
                                    <option>Select</option>
                                    <option>Dentists</option>
                                    <option>Neurology</option>
                                    <option>Opthalmology</option>
                                    <option>Orthopedics</option>
                                    <option>Cancer Department</option>
                                    <option>ENT Department</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Doctor</label>
                                <select class="select select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="Doctor">
                                    <option>Select</option>
                                    <option>Cristina Groves</option>
                                    <option>Marie Wells</option>
                                    <option>Henry Daniels</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Date</label>
                                <div class="cal-icon">
                                    <input type="date" class="form-control" name="Date">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Time</label>
                                <div class="time-icon">
                                    <input type="text" class="form-control" id="datetimepicker3" name="Time">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Patient Email</label>
                                <input class="form-control" type="email" name="Patient_Email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Patient Phone Number</label>
                                <input class="form-control" type="text" name="Patient_Phone_Number">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea cols="30" rows="4" class="form-control" name="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="display-block">Appointment Status</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="product_active" value="option1"
                                checked="" name="Appointment_Status">
                            <label class="form-check-label" for="product_active">
                                Active
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="product_inactive"
                                value="option2" name="Appointment_Status">
                            <label class="form-check-label" for="product_inactive">
                                Inactive
                            </label>
                        </div>
                    </div>
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn">Create Appointment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
