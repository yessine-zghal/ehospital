<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<link rel="shortcut icon" type="image/x-icon" href=" {{ asset ('assets/img/logo-dark.png ')}}">
	<title>E-Hospital</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href= "{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href= "{{ asset('assets/css/font-awesome.min.css') }}"> 
	<link rel="stylesheet" type="text/css" href= "{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/light-gallery/css/lightgallery.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fullcalendar.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap-datetimepicker.min.css')  }}">

    <style>
        .container {
            max-width: 500px;
        }
        dl, ol, ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
    </style>

</head>

<body>

	<!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake img-circle" src="{{asset ('assets/img/logo.png')}}" alt="Logo" height="60" width="60">
    </div>




	<div class="main-wrapper">
		<div class="header">
			<div class="header-left">
				<a href="/home" class="logo">
					<img src="{{asset ('assets/img/logo.png')}}" width="35" height="35" alt=""> <span>E-Hospital</span>
				</a>
			</div>
			<a id="toggle_btn" href="asset javascript:void(0);"><i class="fa fa-bars"></i></a>
			<a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
			<ul class="nav user-menu float-right">
				
				
				<li class="nav-item dropdown has-arrow">
					<a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
						<span class="user-img">
							<img class="rounded-circle" src="{{ asset('assets/img/user.jpg')}}" width="24" alt="Admin">
							<span class="status online"></span>
						</span>
						
						<span> {{Auth::user()->name}}</span>
					</a>
					<div class="dropdown-menu">
						
					
						<a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
					</div>
				</li>
			</ul>
			<div class="dropdown mobile-user-menu float-right">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
				<div class="dropdown-menu dropdown-menu-right">
					
					<a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
				</div>
			</div>
		</div>
		<div class="sidebar" id="sidebar">
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<ul>
						<li class="menu-title">Main</li>
						<li @if(str_contains(url()->current(), '/home')) class="active" @endif>
							<a href="/home"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
						</li>
						<li @if(str_contains(url()->current(), '/doctors')) class="active" @endif>
							<a href="/doctors"><i class="fa fa-user-md"></i> <span>Doctors</span></a>
						</li>
						<li @if(str_contains(url()->current(), '/patients')) class="active" @endif>
							<a href="/patients"><i class="fa fa-wheelchair"></i> <span>Patients</span></a>
						</li>
						<li @if(str_contains(url()->current(), '/appointments')) class="active" @endif>
							<a href="/appointments"><i class="fa fa-calendar"></i> <span>Appointments</span></a>
						</li>
						<li @if(str_contains(url()->current(), '/schedule')) class="active" @endif>
							<a href="/schedule"><i class="fa fa-calendar-check-o"></i> <span>Doctor Schedule</span></a>
						</li>
						<li @if(str_contains(url()->current(), '/departments')) class="active" @endif>
							<a href="/departments"><i class="fa fa-hospital-o"></i> <span>Departments</span></a>
						</li>
						<li>
							<a href="{{ route('employees') }}"><i class="fa fa-user"></i> <span> Employees </span></a>
						</li>
						
						<li class="submenu">
							<a href="#"><i class="fa fa-commenting-o"></i> <span> Blog</span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="/blog">Blog</a></li>
								<li><a href="/add-blog">Add Blog</a></li>
							
							</ul>
						</li>
						
						<li @if(str_contains(url()->current(), '/calendar')) class="active" @endif>
							<a href="/calendar"><i class="fa fa-calendar"></i> <span>Calendar</span></a>
						</li>
						
						
						
						<li class="menu-title" >Gallery</li>
						<li class="submenu">
							<a href="#"><i class="fa fa-columns"></i> <span>Map</span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								
								<li @if(str_contains(url()->current(), '/gallery')) class="active" @endif><a href="/gallery"> Hospital Map </a></li>
								
							</ul>
						</li>
						
					</ul>
				</div>
			</div>
		</div>
   

      @yield('content')

      <footer>
        <p>Copyright 2021 E-Hospital</p>
      </footer>
    
    <div class="sidebar-overlay" data-reff=""></div>
	<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="{{asset('assets/js/jquery-3.2.1.min.js') }}"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.slimscroll.js"></script>
	<script src="assets/js/Chart.bundle.js"></script>
	<script src="{{ asset('assets/js/chart.js')}}"></script>
	<script src="{{ asset('assets/js/app.js')}}"></script>
    <script src="{{ asset('assets/js/select2.min.js')}}"></script>
    <script src="{{ asset('assets/js/moment.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/light-gallery/js/lightgallery-all.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('assets/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.fullcalendar.js')}}"></script>
    <script src="{{ asset('assets/js/fullcalendar.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery-ui.min.html')}}"></script>


    
</body>


</html>