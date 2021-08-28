@extends('layouts.layout')

@section('content')

<div class="page-wrapper" style="min-height: 714px;">
    <div class="content">
        <div class="row">
            <div class="col-sm-4 col-3">
                <h4 class="page-title">Employee</h4>
            </div>
            <div class="col-sm-8 col-9 text-right m-b-20">
                <a href="{{ route('add-employee') }}" class="btn btn-primary float-right btn-rounded"><i class="fa fa-plus"></i>
                    Add Employee</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped custom-table">
                        <thead>
                            <tr>
                                <th width="5%">NB</th>
                                <th style="min-width:200px;">Name</th>
                                <th>Employee ID</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th style="min-width: 110px;">Join Date</th>
                                <th>Role</th>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $key => $employee)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>
                                    <img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle" alt="">
                                    <h2>{{ $employee->Firstname }} {{ $employee->lastname }}</h2>
                                </td>
                                <td>{{ $employee->emploee_id }}</td>
                                <td>{{ $employee->email }}</td>
                                <td>{{ $employee->phone }}</td>
                                <td>{{ $employee->joiningDate }}</td>
                                <td>
                                    <span class="custom-badge status-green">{{ $employee->role }}</span>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="{{ route('update-employee', $employee->id) }}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee{{ $employee->id }}"><i class="fa fa-trash-o m-r-5"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@foreach ($employees as $employee)
<div id="delete_employee{{ $employee->id }}" class="modal fade delete-modal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img src="assets/img/sent.png" alt="" width="50" height="46">
                <h3>Are you sure want to delete this Employee?</h3>
                <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>

                    <form action="{{ route('delete-employee', $employee->email) }}" method="POST">

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"> Delete </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection