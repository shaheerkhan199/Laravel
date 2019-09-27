@extends('admin.dashboardlayout')

@section('content')
<form method="post" action="{{ asset('/admindashboard') }}">
	{{ csrf_field()}}
	<div class="container">
		@isset($isStore)
			<div class="alert alert-success alert-dismissible">
  				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  				<strong>Success!</strong> Question Added Successfully.
			</div>
		@endisset
		<h1 align="center"><u>Add New Question</u></h1>
		<hr>
		<form>
			<div class="form-group">
				<label>Question:</label>
				<textarea class="form-control" rows="3" name="question"></textarea>
			</div>
		</form>
		<div class="form-group">
			<label>Correct Answer</label>
			<input type="text" class="form-control" name="correctAnswer" autocomplete="off">
		</div>
		<div>
			Choice A:<input type="text" class="form-control" name="choiceA" autocomplete="off">
			Choice B:<input type="text" class="form-control" name="choiceB" autocomplete="off">
			Choice C:<input type="text" class="form-control" name="choiceC" autocomplete="off">
			Choice D:<input type="text" class="form-control" name="choiceD" autocomplete="off">
		</div><br/>
		<div class="form-group">
			<input type="submit" class="btn btn-success btn-block" name="">
		</div>
	</div>
</form>
@endsection