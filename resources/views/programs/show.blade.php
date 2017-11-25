@extends ('layouts.master')

@section ('content')
<div class="container">
@foreach ($actions as $action)
    <div class="row">
        <div class="col-sm-9 col-sm-offset-1">
            <h2>{{$action->name}}</h2>
            <p>HLV :{{$action->trainer}}</p>
            <p>Time practice :{{$action->timepractice}}</p>
            <p>Lever :{{$action->lever}}</p>
        </div>
    </div>
@endforeach
</div>
@stop
