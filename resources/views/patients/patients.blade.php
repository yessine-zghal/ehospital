@extends('layouts.layout')

@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-4 col-3">
                    <h4 class="page-title">Patients</h4>
                </div>


                <div class="col-sm-8 col-9 text-right m-b-20">
                    <a href="/add-patient" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i>
                        Add Patient</a>
                    <p class="mssg">{{ session('mssg') }}</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-border table-striped custom-table datatable mb-0">
                            <thead>
                                <tr>
                                    <th>NB</th>
                                    <th>Name</th>
                                    <th>Date of birth</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            @foreach ($patients as $index => $patient)

                                <tbody>

                                    <tr>
                                        <td width="5%">{{ $index + 1 }}</td>
                                        <td><img width="28" height="28" src="@if ($patient->file ==
                                        null) assets/img/user.jpg @else
                                            {{ asset('storage/uploads/patiens/' . $patient->file) }} @endif"
                                            class="rounded-circle m-r-5" alt=""> {{ $patient->Firstname }}
                                            {{ $patient->Lastname }}</td>
                                        <td>{{ $patient->dateofbirth }}</td>
                                        <td>{{ $patient->address }}</td>
                                        <td>{{ $patient->phone }}</td>
                                        <td><a href="https://preclinic.dreamguystech.com/cdn-cgi/l/email-protection"
                                                class="__cf_email__"
                                                data-cfemail="b5dfd0dbdbdcd3d0c7c7dad7dcdbc6dadbf5d0cdd4d8c5d9d09bd6dad8">{{ $patient->email }}</a>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">

                                                    <a class="dropdown-item" href="/patients/{{ $patient->id }}"><i
                                                            class="fa fa-pencil m-r-5"></i> Fiche patient</a>

                                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                                        data-target="#delete_patient{{ $patient->id }}"><i class="fa fa-trash-o m-r-5"></i>
                                                        Delete</a>
                                                </div>
                                            </div>

                                        </td>

                                    </tr>


                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @foreach ($patients as $patient)
        <div id="delete_patient{{ $patient->id }}" class="modal fade delete-modal" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <img src="assets/img/sent.png" alt="" width="50" height="46">
                        <h3>Are you sure want to delete this Patient?</h3>
                        <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>

                            <form action="/patients/{{ $patient->id }}" method="POST">

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



    <p class="mssg">{{ session('mssg') }}</p>
@endsection
