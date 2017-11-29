@extends('layouts.master')
@section('content')
<div class="container">
	<h3>Tutorial</h3>
		<div class="beta-products-details">
			<p class="pull-left">Found {{count($search1)}} action</p>
			<div class="clearfix"></div>
		</div>
@foreach ($search as $action)
    <div class="row">
        <div class="col-sm-9 col-sm-offset-1">
            <h2>{{$action->name}}</h2>
            <p class="floating-box">HLV :{{$action->trainer}}</p>
            <p class="floating-box">Time practice :{{$action->timepractice}}</p>
            <p class="floating-box">Lever :{{$action->lever}}</p>
            <button type="button" class="btn btn-danger">Dang ki</button>
        </div>
    </div>
@endforeach
<div class="row">{{$search->links()}}</div>
</div>
@endsection