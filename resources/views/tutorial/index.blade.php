@extends('layouts.master')
@section('content')

<div class="container">
	<form action="{{route('tutorial.result')}}" method="GET">
		<input type="hidden" name="_token" value="{{csrf_token()}}" />
		<div class="form-group">
			<label for="weight">Weight</label>
			<input class="form-control input-sm" type="float" id="weight" name="weight" required="true">
		</div>

		<div class="form-group">
			<label for="age">Age</label>
			<input class="form-control input-sm" type="number" id="age" name="age" required="true">
		</div>

		<div class="form-group">
			<label for="high">Height</label>
			<input class="form-control input-sm" type="float" id="height" name="height" required="true">
		</div>

		<button type="submit" class="btn btn-default" id="getProgram">Submit</button>
	</form>	
</div><br>

@endsection
