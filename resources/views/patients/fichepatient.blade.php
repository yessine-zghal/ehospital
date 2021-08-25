@extends('layouts.layout')

@section('content')
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-7 col-6">
                        <h4 class="page-title">Fiche patient {{ $patient->Firstname }} {{ $patient->lastname }}</h4>
                    </div>
                    
                </div>
                <div class="card-box profile-header">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-view">
                                <div class="profile-img-wrap">
                                    <div class="profile-img">
                                        <a href="#"><img class="avatar" src="@if($patient->file == NULL)assets/img/user.jpg @else {{ asset('storage/uploads/patiens/'.$patient->file) }}@endif" alt=""></a>
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="profile-info-left">
                                                <h3 class="user-name m-t-0 mb-0"> {{ $patient->Firstname }} {{ $patient->lastname }}</h3>
                                               
                                               

                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <ul class="personal-info">
                                                <li>
                                                    <span class="title">Phone:</span>
                                                    <span class="text"><a href="#">{{ $patient->phone }}</a></span>
                                                </li>
                                                <li>
                                                    <span class="title">Email:</span>
                                                    <span class="text"><a href="#"><span class="__cf_email__" data-cfemail="81e2f3e8f2f5e8efe0e6f3eef7e4f2c1e4f9e0ecf1ede4afe2eeec">{{ $patient-> email }}</span></a></span>
                                                </li>
                                                <li>
                                                    <span class="title">Birthday:</span>
                                                    <span class="text">{{ $patient->dateofbirth }}</span>
                                                </li>
                                                <li>
                                                    <span class="title">Address:</span>
                                                    <span class="text"> {{ $patient->country}}-{{ $patient->city }}-{{ $patient->address }}</span>
                                                </li>
                                                <li>
                                                    <span class="title">Gender:</span>
                                                    <span class="text">{{ $patient->gendre}}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="profile-tabs">
                    <ul class="nav nav-tabs nav-tabs-bottom">
                        <li class="nav-item"><a class="nav-link active" href="#about-cont" data-toggle="tab">About</a></li>
                       
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="about-cont">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-box">
                                        <h3 class="card-title">Patient's medical record</h3>
                                        
                                    </div>
                                    
                                    {{ $patient->patientrecord }}
          
                                    
      
                                    
       
                                 
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="bottom-tab2">
                            Tab content 2
                        </div>
                        <div class="tab-pane" id="bottom-tab3">
                            Tab content 3
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </div>
    @endsection