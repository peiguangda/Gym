@extends ('layouts.master')

@section ('content')
<div class="container">
@foreach ($programs as $program)
    <div class="row">
        <div class="col-sm-9 col-sm-offset-1">
            <h2>{{$program->name}}</h2>
            <img src="{{$program->image}}">
            <p>{{$program->descript}}</p>
            <p>Mức độ : {{$program->level}}</p>
            <p><a href="#">Read more</a></p>
        </div>
    </div>
@endforeach
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
        
        </div>
    </div>
</div>
@stop
