@extends ('layouts.master')

@section ('content')
<div class="container">
@foreach ($programs as $program)
    <div class="row">
        <div class="col-sm-9 col-sm-offset-1">
            <h2>{{$program->name}}</h2>
            <img src="{{$program->image}}">
            <p>{{$program->descript}}</p>
            <p><a href="{{route('program.show',$program->id)}}">Read more</a></p>
        </div>
    </div>
@endforeach
    <div class="row">
        <div class="col-sm-9 col-sm-offset-1">
            {{ $programs->render() }}
        </div>
    </div>
</div>
@stop
