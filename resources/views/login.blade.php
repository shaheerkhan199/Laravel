
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet">
	<script src="{{ asset('public/js/jquery-3.4.1.min') }}"></script>
	<script src="{{ asset('public/js/bootstrap.min.js') }}"></script>



	<style>
		.box{
			top: 50%;
			left: 50%;
			position: absolute;
			transform: translate(-50%,-50%);
			border:1px solid lightgrey;
			padding: 20px;
			box-shadow: 5px 5px lightgrey;
		}
		/*.fogotpassandsignup p{
			padding: 10px;
		}*/
	</style>
</head>
<body>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4 box">
				<h1 align="center">Login</h1>
				<form method="post" action="{{ asset('/validate') }}">
					{{ csrf_field()}}
					<div class="form-group has-feedback has-feedback-left">
						<label>UserName</label>
						<span class="glyphicon glyphicon-user form-control-feedback" ></span>
						<input type="text" class="form-control" placeholder="UserName" name="username">
					</div>
					<div class="form-group has-feedback">
						<label>Password</label>
						<span class="glyphicon glyphicon-lock form-control-feedback"></span>
						<input type="password" class="form-control" placeholder="Password" name="password">
					</div>
					<div class="form-group ">
						<input type="submit" class="btn btn-primary btn-block" value="login">
					</div>
				</form>
				<div class="fogotpassandsignup">
					<!-- <p class="bg-primary">Hello</p> -->
					<!-- <div class="alert alert-danger">
						<strong>Warning!</strong>  Invalid Login
					</div> -->
					@isset($isStoreUser)
						<div class="alert alert-success">
							<strong>Success!</strong>  You are registerd now
						</div>
					@endisset
					<a href="#">Forget Password?</a>
					<a href="{{asset('signup')}}" class="pull-right">Doesn't have an account?</a>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
	
</body>
</html>