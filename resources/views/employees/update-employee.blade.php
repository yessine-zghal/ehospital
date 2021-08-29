@extends('layouts.layout')

@section('content')

<div class="page-wrapper" style="min-height: 714px;">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Update Employee</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form action="{{ route('store-employee-update', $employee->id) }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>First Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" value="{{ $employee->Firstname }}" name="Firstname">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input class="form-control" type="text" value="{{ $employee->lastname }}" name="Lastname">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Username <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" value="{{ $employee->username }}" name="username">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Email <span class="text-danger">*</span></label>
                                <input class="form-control" type="email" value="{{ $employee->email }}" name="email">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Employee ID <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="{{ $employee->emploee_id }}" name="emploee_id">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Joining Date <span class="text-danger">*</span></label>
                                <div class="cal-icon">
                                    <input class="form-control" type="date" value="{{ $employee->joiningDate }}" name="joiningDate">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Phone </label>
                                <input class="form-control" type="text" value="{{ $employee->phone }}" name="phone">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Role</label>
                                <select class="select select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="role">
                                    <option @if($employee->role == 'Admin') selected @endif>Admin</option>
                                    <option @if($employee->role == 'Doctor') selected @endif>Doctor</option>
                                    <option @if($employee->role == 'Nurse') selected @endif>Nurse</option>
                                    <option @if($employee->role == 'Laboratorist') selected @endif>Laboratorist</option>
                                    <option @if($employee->role == 'Pharmacist') selected @endif>Pharmacist</option>
                                    <option @if($employee->role == 'Accountant') selected @endif>Accountant</option>
                                    <option @if($employee->role == 'Receptionist') selected @endif>Receptionist</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="display-block">Status</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="employee_active" value="option1" @if($employee->status == 'option1') checked @endif name="status">
                            <label class="form-check-label" for="employee_active">
                                Active
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="employee_inactive" value="option2" @if($employee->status == 'option2') checked @endif>
                            <label class="form-check-label" for="employee_inactive">
                                Inactive
                            </label>
                        </div>
                    </div>
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn">Update Employee</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection