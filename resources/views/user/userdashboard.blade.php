<!DOCTYPE html>
<html>
<head>
	<title>User Dashboard</title>
	<link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet">
	<script src="{{ asset('public/js/jquery-3.4.1.min') }}"></script>
	<script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
	<style>
		.head{
			background-color: grey;
			color: white;
			padding: 5px;
		}
		.head a{
			text-decoration: none;
			color: white;
		}
		.content{
			background-color: lightgrey;
			border-radius: 5px;
		}
		.row{
			border:1px solid grey;
			margin: 5px 0px;
		}
	</style>
</head>
<body>
	<!-- <div class="jumbotron text-center">
		<h1>You are logged in as Name</h1>
	</div> -->
	<div class="container-fluid">
		<div class="row head">
			<div class="col-md-5">Online Quiz System</div>
			<div class="col-md-6">You are logged in as name</div>
			<div class="col-md-1"><a href="#">logout</a></div>
		</div><hr/>
		<div class="container text-center content">
			<h1>All Questions are here</h1>
		</div>
	</div>
	@foreach($ques as $q)
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h5>{{ $q->question }}</h5>
				<p><input type="radio" name="a{{ $q->id }}"> {{ $q->choiceA }}</p>
				<p><input type="radio" name="a{{ $q->id }}"> {{ $q->choiceB }}</p>
				<p><input type="radio" name="a{{ $q->id }}"> {{ $q->choiceC }}</p>
				<p><input type="radio" name="a{{ $q->id }}"> {{ $q->choiceD }}</p>
			</div>
		</div>
	</div>
	@endforeach
	<div class="container">
		<div>
			<input type="submit" class="btn btn-success btn-block" name="">
		</div>
	</div>
	
</body>
</html>