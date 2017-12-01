@extends ('layouts.master')

@section ('content')
<div class="container">
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
            <p>Current time : {{\Carbon\Carbon::now()}}</p>
            <p>Registration time : {{$regester->created_at}}</p>
            <p>Lever : {{$action->lever}}</p>
            <p>{{$action->descript}}</p>
        </div>
    </div>
</div>
@endsection
