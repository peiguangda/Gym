@extends('layouts.master')
@section('content')

<div class="container">
		<div class="form-group">
			<label for="weight">Weight</label>
			<input class="form-control input-sm" type="float" id="weight" name="weight">
		</div>

		<div class="form-group">
			<label for="age">Age</label>
			<input class="form-control input-sm" type="number" id="age" name="age">
		</div>

		<div class="form-group">
			<label for="high">Height</label>
			<input class="form-control input-sm" type="float" id="height" name="height">
		</div>

		<button type="submit" class="btn btn-default" id="getProgram">Submit</button>
</div><br>

@endsection
