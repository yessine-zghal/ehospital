@extends('layouts.layout')

@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-4 col-3">
                    <h4 class="page-title">Doctors</h4>
                </div>
                <div class="col-sm-8 col-9 text-right m-b-20">
                    <a href="{{ route('add-doctor') }}" class="btn btn-primary btn-rounded float-right"><i
                            class="fa fa-plus"></i> Add Doctor</a>
                </div>
            </div>
            <div class="row doctor-grid">

                @foreach ($doctors as $key => $doctor)

                    <div class="col-md-4 col-sm-4  col-lg-3">
                        <div class="profile-widget">
                            <div class="doctor-img">
                            <a class="avatar" href="profile.html"><img alt="" src="@if ($doctor->image == null) assets/img/user.jpg @else
                                    {{ asset('storage/uploads/doctors/' . $doctor->image) }} @endif"></a>
                            </div>
                            <div class="dropdown profile-action">
                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="{{ route('update-doctor', $doctor->id) }}"><i
                                            class="fa fa-pencil m-r-5"></i> Edit</a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_doctor{{ $doctor->id }}"><i
                                            class="fa fa-trash-o m-r-5"></i> Delete</a>
                                </div>
                            </div>
                            <h4 class="doctor-name text-ellipsis"><a href="profile.html">{{ $doctor->Firstname }}
                                    {{ $doctor->lastname }}</a></h4>
                            <div class="doc-prof">{{ $doctor->speciality }}</div>
                            <div class="user-country">
                                <i class="fa fa-map-marker"></i> {{ $doctor->adress }}
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="see-all">
                        <a class="see-all-btn" href="javascript:void(0);">Load More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach ($doctors as $key => $doctor)
        <div id="delete_doctor{{ $doctor->id }}" class="modal fade delete-modal" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <img src="assets/img/sent.png" alt="" width="50" height="46">
                        <h3>Are you sure want to delete this Doctor?</h3>
                        <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>

                            <form action="{{ route('delete-doctor', $doctor->email) }}" method="POST">

                                @csrf
                                @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
