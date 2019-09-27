<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet">
	<script src="{{ asset('public/js/jquery-3.4.1.min.js') }}"></script>
	<script src="{{ asset('public/js/bootstrap.min.js') }}"></script>

	<style>
		.head{
			background: lightgrey;
			padding: 10px;
		}
	</style>
</head>
<body>
	<!-- Header -->
	<div class="text-center head">
		<h1>Online Quiz System</h1>
		<h3>Admin Dashboard</h3>		
	</div>
	<br/>
<!-- Navigation -->
	


<div class="container">
<div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <!-- <a href="#" class="navbar-brand">
            <img src="/examples/images/logo.svg" height="28" alt="CoolBrand">
        </a> -->
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="#" class="nav-item nav-link active">Dashboard</a>
                <a href="#" class="nav-item nav-link">Users</a>
                <a href="#" class="nav-item nav-link">Questions</a>
            </div>
            <div class="navbar-nav ml-auto">
                <a href="{{asset('/login')}}" class="nav-item nav-link">Logout</a>
            </div>
        </div>
    </nav>
</div>
</div>


<br/>
@yield('content')
	<!-- Footer -->
	<br/>
	<div class="text-center head">
		<p>Copyrights Reserved &copy | Powered by M.Shaheer khan</p>
	</div>
</body>
</html>