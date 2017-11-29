@extends ('layouts.master')

@section ('content')
<div class="container">
@foreach ($actions as $action)
    <div class="row">
        <div class="col-sm-9 col-sm-offset-1">
            <h2>{{$action->name}}</h2>
            <p class="floating-box">HLV :{{$action->trainer}}</p>
            <p class="floating-box">Time practice :{{$action->timepractice}}</p>
            <p class="floating-box">Lever :{{$action->lever}}</p>
            <button type="button" name="add_action" action_id ="{{$action->id}}" user_id ="{{\Auth::user()->id}}" id="add_action" class="btn btn-danger">Dang ki</button>
        </div>
    </div>
@endforeach
	<div class="row">
        <div class="col-sm-9 col-sm-offset-1">
            {{ $actions->render() }}
        </div>
    </div>
</div>
@endsection
