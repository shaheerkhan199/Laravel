
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet">
	<script src="{{ asset('public/js/jquery-3.4.1.min') }}"></script>
	<script src="{{ asset('public/js/bootstrap.min.js') }}"></script>

	<style>
		p{
			color: red;
		}
		body{
			/*background: url('love.jpg');*/
			margin: 0;
			padding: 0;
		}
		.box{
			top: 50%;
			left: 50%;
			position: absolute;
			transform: translate(-50%,-50%);
			border:1px solid lightgrey;
			padding: 25px;
			box-shadow: 5px 5px lightgrey;
		}
		input[type="password"],input[type="email"],input[type="number"],input[type="text"], input[type="date"], input[type="textarea"],select{
			/*border-bottom:1px solid black;*/
			margin: 10px 0px;
		}

	</style>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#submitBtn").click(function(){
				var fNameBoxVal = $("#fNameBox").val();
				var lNameBoxVal = $("#lNameBox").val();
				var emailBoxVal = $("#emailBox").val();
				var numberBoxVal = $("#numberBox").val();
				var passwordBoxVal = $("#passwordBox").val();
				var confirmPasswordBoxVal = $("#confirmPasswordBox").val();
				var dateBoxVal = $("#dateBox").val();
				var genderBoxVal = $("#genderBox").val();
				var addressBoxVal = $("#addressBox").val();



				if(passwordBoxVal != confirmPasswordBoxVal)
				{
					$("#p6").text("Password does not match").css("color","red");
				}
				else
				{
					$("#p6").text("").css("color","red");
				}
			});	
		});
	</script>
</head>
<body>
	<!-- <form> -->
		<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8 box">
				<form method="post" action="{{asset('/newUser')}}">
					{{csrf_field()}}
				<!-- <div class="col-md-12 text-center"> -->
					<h1>Signup</h1>
				<!-- </div> -->
				<div class="row">
					<div class="col-md-6">
						<input type="text" class="form-control" name="fname" placeholder="First name" id="fNameBox">
						<p id="p1"></p>
					</div>
					<div class="col-md-6">
						<input type="text" class="form-control" name="lname" placeholder="Last name" id="lNameBox">
						<p id="p2"></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<input type="email" class="form-control" name="email" placeholder="Email" id="emailBox">
						<p id="p3"></p>
					</div>
					<div class="col-md-6">
						<input type="number" class="form-control" name="phone" placeholder="Phone no" id="numberBox">
						<p id="p4"></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<input type="password" class="form-control" name="password" placeholder="Password" id="passwordBox">
						<p id="p5"></p>
					</div>
					<div class="col-md-6">
						<input type="password" class="form-control" name="" placeholder="Confirm Password" id="confirmPasswordBox">
						<p id="p6"></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<input type="date" class="form-control" name="dob" id="dateBox">
						<p id="p7"></p>
					</div>
					<div class="col-md-6">
						<select class="form-control" name="gender">
							<option selected="" disabled="" id="genderBox">Gender</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
						<p id="p8"></p>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<input type="textarea" name="address" class="form-control" placeholder="Address" id="addressBox">
					</div>
					<p id="p9"></p>
				</div>
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-4">
						<input type="submit" class="btn btn-success btn-block" name="" id="submitBtn">
					</div>
					<div class="col-md-4">
						<input type="reset" class="btn btn-danger btn-block" name="" id="submitBtn">
					</div>
					<div class="col-md-2"></div>
				</div>
				</form>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
	<!-- </form> -->
</body>
</html>