@extends('layouts.layout')

@section('content')
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Schedule</h4>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-border table-striped custom-table mb-0">
                                <thead>
                                    <tr>
                                        <th>Doctor Name</th>
                                        <th>Department</th>
                                        <th>Available Days</th>
                                        <th>Available Time</th>
                                        <th>Status</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle m-r-5" alt=""> Henry Daniels</td>
                                        <td>Cardiology</td>
                                        <td>Sunday, Monday, Tuesday</td>
                                        <td>10:00 AM - 7:00 PM</td>
                                        <td><span class="custom-badge status-green">Active</span></td>
                                      
                                    </tr>
                                    <tr>
                                        <td><img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle m-r-5" alt=""> Leionel Dans</td>
                                        <td>Cardiology</td>
                                        <td>Saturday, Monday, friday</td>
                                        <td>8:00 AM - 5:00 PM</td>
                                        <td><span class="custom-badge status-green">Active</span></td>
                                      
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
  
    </div>
    
@endsection