@extends('layouts.master')
@section('content')
<div class="container">
	<h4>Search</h4>
		<div class="beta-products-details">
			<p class="pull-left">Found {{count($search1)}} program</p>
			<div class="clearfix"></div>
		</div>
@foreach ($search as $program)
    <div class="row">
        <div class="col-sm-9 col-sm-offset-1">
            <h2>{{$program->name}}</h2>
            <img src="{{$program->image}}">
            <p>{{$program->descript}}</p>
            <p>HLV : {{$program->trainer}}</p>
            <p><a href="{{route('program.show',$program->id)}}">Read more</a></p>
        </div>
    </div>
@endforeach
<div class="row">{{$search->links()}}</div>
</div>
@endsection