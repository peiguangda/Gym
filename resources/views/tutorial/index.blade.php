@extends('layouts.master')
@section('content')

<div class="container">
	<form action="{{route('tutorial.result')}}" method="POST">
		{!! csrf_field() !!}
		<div class="form-group">
			<label for="weight">Weight</label>
			<input class="form-control input-sm" type="float" id="weight" name="weight">
		</div>

		<div class="form-group">
			<label for="age">Age</label>
			<input class="form-control input-sm" type="number" id="age" name="age">
		</div>

		<div class="form-group">
			<label for="high">High</label>
			<input class="form-control input-sm" type="float" id="high" name="high">
		</div>

		<button type="submit" class="btn btn-default">Submit</button>
	</form>
</div><br>
@endsection