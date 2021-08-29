@extends('layouts.layout')

@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h4 class="page-title">Add Patient</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <form action="{{ route('add-patient-post') }}" method="POST" enctype='multipart/form-data'>
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="Firstname">First Name <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="Firstname" id="Firstname" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="Lastname">Last Name <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="Lastname" id="Lastname" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="username">Username <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="username" id="username" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Email <span class="text-danger">*</span></label>
                                    <input class="form-control" type="email" name="email" id="email" required>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="dateofbirth">Date of Birth</label>
                                    <div class="cal-icon">
                                        <input type="date" class="form-control" name="dateofbirth" id="dateofbirth"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group gender-select">
                                    <label for="gender">Gender</label>
                                    <select class="form-control select" name="gender" id="gender">
                                        <option>Female</option>
                                        <option>Male</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input type="text" class="form-control " name="address" id="address" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group gender-select">
                                            <label for="gender">Covid ?</label>
                                            <select class="form-control select" name="covid_check" id="covid_check">
                                                <option>oui</option>
                                                <option>non</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label for="country">Country</label>
                                            <select class="form-control select" name="country" id="country">
                                                <option>Tunisia</option>
                                                <option>Algeria</option>
                                                <option>libye</option>
                                                <option>France</option>
                                                <option>Maghreb</option>
                                                <option>US</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label for="city">City</label>
                                            <input type="text" class="form-control" name="city" id="city" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label for="state">State/Province</label>
                                            <input type="text" class="form-control " name="state" id="state" required>

                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label for="postalcode">Postal Code</label>
                                            <input type="text" class="form-control" name="postalcode" id="postalcode"
                                                required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="phone">Phone </label>
                                    <input class="form-control" type="text" name="phone" id="phone" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>photo</label>
                                    <div class="profile-upload">
                                        <div class="upload-img">
                                            <img alt="" src="assets/img/user.jpg">
                                        </div>
                                        <div class="upload-input">
                                            <input type="file" class="form-control" id="file" name="file">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>patient'record</label>
                                    <div class="profile-upload">

                                        <div class="upload-input">
                                            <input type="file" class="form-control" id="patientrecord" name="patientrecord">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="form-group gender-select">
                                            <label for="gender">Covid etat</label>
                                            <select class="form-control select" name="covid_etat" id="covid_etat">
                                                <option>home</option>
                                                <option>hospital</option>
                                                <option>ranimation</option>
                                                <option>save</option>
                                            </select>
                                        </div>

                        </div>

                        <div class="m-t-20 text-center">

                            <input class="btn btn-primary submit-btn" type="submit" value="Create Patient">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    </div>
@endsection
