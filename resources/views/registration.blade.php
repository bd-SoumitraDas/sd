<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('logreg/assets/img/favicon.ico') }}">

	<title>Registration</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />

	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('logreg/assets/img/apple-icon.png') }}" />
	<link rel="icon" type="image/png" href="{{ asset('logreg/assets/img/favicon.png') }}" />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="{{ asset('logreg/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('logreg/assets/css/material-bootstrap-wizard.css') }}" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="{{ asset('logreg/assets/css/demo.css') }}" rel="stylesheet" />
</head>

<body>
	<div class="image-container set-full-height" style="background-image: url('{{ asset('logreg/assets/img/wizard-profile.jpg') }}')">

		<!--   Big container   -->
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<!--      Wizard container        -->
					<div class="wizard-container">
						<div class="card wizard-card" data-color="red" id="wizard">

							<!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"        -->
							<div class="wizard-header">
								<h3 class="wizard-title">
									Create User
								</h3>
								<h5>This information will let us know more about you.</h5>
							</div>
							<div class="wizard-navigation">
								<ul>
									<li><a href="#teacher" data-toggle="tab">Teacher</a></li>
									<li><a href="#student" data-toggle="tab">Student</a></li>
								</ul>
							</div>
							<div class="tab-content">
								<div class="tab-pane" id="teacher">
									<div class="row">
										<div class="col-sm-12">
											<h4 class="info-text"> Fill out this form if you are a <a class="text-warning">Teacher</a>.</h4>
										</div>
										<div class="col-sm-4">
											<div class="picture-container">
												<div class="picture">
													<img src="{{ asset('dashboard/assets/img/default-avatar.png') }}" class="picture-src" />
													<input type="file" id="wizard-picture">
												</div>
												<h6>Profile Picture</h6>
											</div>
										</div>
										<form action="{{ route('teacher.store') }}" method="post">
											@if(Session::has('success'))
											<div class="alert alert-success">{{ Session::get('success') }}</div>
											@endif
											@if(Session::has('fail'))
											<div class="alert alert-danger">{{ Session::get('fail') }}</div>
											@endif
											@csrf
											<div class="col-sm-6">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">edit</i>
													</span>
													<div class="form-group label-floating">
														<label class="control-label">Your Name</label>
														<input name="name" type="text" class="form-control" value="{{ old('name') }}" >
														<span class="text-danger">@error('name') {{ $message }} @enderror</span>
													</div>
												</div>
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">email</i>
													</span>
													<div class="form-group label-floating">
														<label class="control-label">Your Email</label>
														<input name="mail" type="email" class="form-control" value="{{ old('mail') }}" >
														<span class="text-danger">@error('mail') {{ $message }} @enderror</span>
													</div>
												</div>
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">lock_outline</i>
													</span>
													<div class="form-group label-floating">
														<label class="control-label">Password</label>
														<input name="password" type="password" class="form-control">
														<span class="text-danger">@error('password') {{ $message }} @enderror</span>
													</div>
												</div>
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">lock_outline</i>
													</span>
													<div class="form-group label-floating">
														<label class="control-label">Confirm Password</label>
														<input name="cpassword" type="password" class="form-control">
														<span class="text-danger">@error('password') {{ $message }} @enderror</span>
													</div>
												</div>
												<div class="wizard-footer">
													<div class="pull-right">
														<input type='submit' class='btn btn-fill btn-danger btn-wd' name='submit' value='Submit' />
													</div>
													<div class="clearfix"></div>
												</div>
											</div>
										</form>
									</div>
								</div>
								<div class="tab-pane" id="student">
									<div class="row">
										<div class="col-sm-12">
											<h4 class="info-text"> Fill out this form if you are a <a class="text-warning">Student</a>.</h4>
										</div>
										<div class="col-sm-4">
											<div class="picture-container">
												<div class="picture">
													<img src="{{ asset('/dashboard/assets/img/default-avatar.png') }}" class="picture-src" />
													<input type="file" id="wizard-picture">
												</div>
												<h6>Profile Picture</h6>
											</div>
										</div>
										<div class="col-sm-6">
											<form action="{{ route('student.store') }}" method="post">
												@csrf
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">edit</i>
													</span>
													<div class="form-group label-floating">
														<label class="control-label">Your Name</label>
														<input name="name" type="text" class="form-control" value="{{ old('name') }}" >
														<span class="text-danger">@error('name') {{ $message }} @enderror</span>
													</div>
												</div>
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">email</i>
													</span>
													<div class="form-group label-floating">
														<label class="control-label">Your Email</label>
														<input name="mail" type="email" class="form-control" value="{{ old('mail') }}" >
														<span class="text-danger">@error('mail') {{ $message }} @enderror</span>
													</div>
												</div>
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">badge</i>
													</span>
													<div class="form-group label-floating">
														<label class="control-label">Full ID</label>
														<input name="uid" type="text" class="form-control" value="{{ old('uid') }}" >
														<span class="text-danger">@error('uid') {{ $message }} @enderror</span>
													</div>
												</div>
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">lock_outline</i>
													</span>
													<div class="form-group label-floating">
														<label class="control-label">Password</label>
														<input name="password" type="password" class="form-control">
														<span class="text-danger">@error('password') {{ $message }} @enderror</span>
													</div>
												</div>
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">lock_outline</i>
													</span>
													<div class="form-group label-floating">
														<label class="control-label">Confirm Password</label>
														<input name="cpassword" type="password" class="form-control">
														<span class="text-danger">@error('password') {{ $message }} @enderror</span>
													</div>
												</div>
												<div class="wizard-footer">
													<div class="pull-right">
														<input type='submit' class='btn btn-fill btn-danger btn-wd' name='submit' value='Submit' />
													</div>
													<div class="clearfix"></div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>


						</div>
					</div> <!-- wizard container -->
				</div>
			</div> <!-- row -->
		</div> <!--  big container -->

		<div class="footer">
			<div class="container text-center">
				Already registered? <i class="fa fa-sign-in" aria-hidden="true"></i> <a href="{{ url('login') }}">Login Here</a>.
			</div>
			<div class="container text-center">
				Made with <i class="fa fa-heart heart"></i> by <a href="#">Team Singularity</a>.
			</div>
		</div>
	</div>

</body>
<!--   Core JS Files   -->
<script src="{{ asset('logreg/assets/js/jquery-2.2.4.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('logreg/assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('logreg/assets/js/jquery.bootstrap.js') }}" type="text/javascript"></script>

<!--  Plugin for the Wizard -->
<script src="{{ asset('logreg/assets/js/material-bootstrap-wizard.js') }}"></script>

<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
<script src="{{ asset('logreg/assets/js/jquery.validate.min.js') }}"></script>

</html>