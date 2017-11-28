@extends('layouts.master')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">User
				<small>{{$user->name}}</small>
			</h1>
		</div>
		@if(count($errors)>0)
			<div class="alert alert-danger">
				@foreach($errors->all() as $err)
					{{$err}}<br>
			</div>
				@endforeach
		@endif

		@if(session('thongbao'))
			<div class="alert alert-success">
				{{session('thongbao')}}
			</div>
			@endif
		<form action="edit" method="POST">
			<input type="hidden" name="_token" value="{{csrf_token()}}" />
			<div class="form-group">
				<label>Tên:</label>
				<input class="form-control" name="name" placeholder="Nhập tên người dùng"
				value="{{$user->name}}" />
			</div>
			<div class="form-group">
				<label>Email:</label>
				<input type="email" class="form-control" name="email" placeholder="Nhập email người dùng"
				value="{{$user->email}}" readonly=""/>
			</div>
			<div class="form-group">
				<label>User name:</label>
				<input class="form-control" name="username" placeholder="Nhập username người dùng"
				value="{{$user->username}}" />
			</div>
			<div class="form-group">
				<input type="checkbox" name="changepassword" id="changepassword">
				<label>Change Password:</label>
				<input type="password" class="form-control password" name="password" placeholder="Nhập password người dùng"
				 disabled="" />
			</div>
			<div class="form-group">
				<label>Repeat Password:</label>
				<input type="password" class="form-control password" name="repeatpassword" placeholder="Nhập repassword người dùng"
				 disabled="" />
			</div>
			<div class="form-group">
				<label>Purpose:</label>
				<input class="form-control" name="purpose" placeholder="Nhập purpose người dùng"
				value="{{$user->purpose}}" />
			</div>
			<div class="form-group">
				<label>Birth day:</label>
				<input class="form-control" name="birthday" type="date" placeholder="Nhập birthday người dùng"
				value="{{$user->birthday}}" />
			</div>
			<div class="form-group">
				<label>Address:</label>
				<input class="form-control" name="address" placeholder="Nhập address người dùng"
				value="{{$user->address}}" />
			</div>
			<div class="form-group">
				<label>Weight:</label>
				<input class="form-control" name="weight" placeholder="Nhập weight người dùng"
				value="{{$user->weight}}" />
			</div>
			<div class="form-group">
				<label>Job:</label>
				<input class="form-control" name="job" placeholder="Nhập job người dùng"
				value="{{$user->job}}" />
			</div>
			<button type="submit" class="btn btn-default">Update</button>
			<button type="reset" class="btn btn-default">Reset</button>
		</form>
	</div>
	</div>
</div>

@endsection

@section('script')
	<script>
		$(document).ready(function(){
			$("#changepassword").change(function(){
				if($(this).is(":checked")){
					$(".password").removeAttr('disabled');
				}
				else{
					$(".password").attr('disabled','');
				}
			});
		});
	</script>
@endsection