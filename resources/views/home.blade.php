@extends('layouts.layout')

@section('content')
		<div class="page-wrapper">
			<div class="content">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
						<div class="dash-widget">
							<span class="dash-widget-bg1"><i class="fa fa-stethoscope" aria-hidden="true"></i></span>
							<div class="dash-widget-info text-right">
								<h3>{{ $doctors->count() }}</h3>
								<span class="widget-title1">Doctors <i class="fa fa-check" aria-hidden="true"></i></span>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
						<div class="dash-widget">
							<span class="dash-widget-bg2"><i class="fa fa-user-o"></i></span>
							<div class="dash-widget-info text-right">
								<h3>{{ $patients->count() }}</h3>
								<span class="widget-title2">Patients <i class="fa fa-check" aria-hidden="true"></i></span>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
						<div class="dash-widget">
							<span class="dash-widget-bg3"><i class="fa fa-user-md" aria-hidden="true"></i></span>
							<div class="dash-widget-info text-right">
								<h3>{{ $covid_oui }}</h3>
								<span class="widget-title3">covid patient<i class="fa fa-check" aria-hidden="true"></i></span>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
						<div class="dash-widget">
							<span class="dash-widget-bg4"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
							<div class="dash-widget-info text-right">
								<h3>{{ $covid_non }}</h3>
								<span class="widget-title4">save <i class="fa fa-check" aria-hidden="true"></i></span>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-md-6 col-lg-6 col-xl-6">
						<div class="card">
							<div class="card-body">
								<div class="chart-title">
									<h4>Patient Total</h4>
									<span class="float-right"><i class="fa fa-caret-up" aria-hidden="true"></i> 15% Higher than Last Month</span>
								</div>
								<canvas id="linegraph"></canvas>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-6 col-xl-6">
						<div class="card">
							<div class="card-body">
								<div class="chart-title">
									<h4>Patients In</h4>
									<div class="float-right">
										<ul class="chat-user-total">
											<li><i class="fa fa-circle current-users" aria-hidden="true"></i>ICU</li>
											<li><i class="fa fa-circle old-users" aria-hidden="true"></i> OPD</li>
										</ul>
									</div>
								</div>
								<canvas id="bargraph"></canvas>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<script>
		var patients = {!!json_encode($patients) !!};
	</script>
@endsection