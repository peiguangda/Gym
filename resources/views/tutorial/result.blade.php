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
            <p class="floating-box">Time practice :{{$action->timepractice}} (h)</p>
            @for ($i = 0; $i < 5; $i++)
                @if ($i < $action->rate)
                    <span class="fa fa-star checked"></span>
                @else
                    <span class="fa fa-star"></span>
                @endif
            @endfor
            <p>Lever : {{$action->lever}}</p>
            <p>{{$action->descript}}</p>
            <button type="button" name="add_action" action_id ="{{$action->id}}" user_id ="{{\Auth::user()->id}}" id="add_action" class="btn btn-danger">Dang ki</button>
        </div>
    </div><br><br><br>
@endforeach
<div class="row">{{$search->links()}}</div>
</div>
@endsection