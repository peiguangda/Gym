@extends('layouts.master')
@section('content')
<div class="container">
	<h4>Tìm kiếm</h4>
		<div class="beta-products-details">
			<p class="pull-left">Tìm thấy {{count($search1)}} action</p>
			<div class="clearfix"></div>
		</div>
@foreach ($search as $action)
    <div class="row">
        <div class="col-sm-9 col-sm-offset-1">
            <h2>{{$action->name}}</h2>
            <p>HLV :{{$action->trainer}}</p>
            <p>Time practice :{{$action->timepractice}}</p>
            <p>Lever :{{$action->lever}}</p>
        </div>
    </div>
@endforeach
<div class="row">{{$search->links()}}</div>
</div>
@endsection