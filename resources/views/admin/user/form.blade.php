@extends('layouts.admin.admin')
@section('title', 'Thêm mới user')
@section('config_title', 'Thêm mới user')
@section('content')
<div class="col-sm-12">
		<form action="{{route('user.save')}}" method="post" accept-charset="utf-8" novalidate enctype="multipart/form-data">
			{{csrf_field()}}
			<input type="hidden" name="id" value="{{old('id', $model->id)}}">
			<div class="form-group">
				<label for="name">Name</label>
				<input value="{{old('name', $model->name)}}" type="text" id="name" name="name" class="form-control" placeholder="full name">
			</div>
			<div class="form-group">
				<label for="role_name">Role</label>
				<select name="role_name" class="form-control">
					<option value="0">--------------</option>
					@foreach ($listRole as $value)
						<option value="{{$value->id}}">{{$value->ten_role}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
						<label for="password">Password*</label>
						<input type="password" name="password" class="form-control" required> 
					</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input id="email" type="text" 
					value="{{old('email', $model->email)}}" name="email" class="form-control" placeholder="email">
				@if (count($errors) > 0)
					<span class="text-danger">{{$errors->first('email')}}</span>
				@endif
			</div>
			<div class="form-group">
				<label for="phone">Số điện thoại</label>
				<input id="sdt" type="text" 
					value="{{old('sdt', $model->sdt)}}" name="sdt" class="form-control" placeholder="phone number">
				@if (count($errors) > 0)
					<span class="text-danger">{{$errors->first('sdt')}}</span>
				@endif
			</div>
			<div class="form-group">
				<label for="dia_chi">Địa chỉ</label>
				<input id="dia_chi" type="text" 
					value="{{old('dia_chi', $model->dia_chi)}}" name="dia_chi" class="form-control" placeholder="dia_chi">
				@if (count($errors) > 0)
					<span class="text-danger">{{$errors->first('dia_chi')}}</span>
				@endif
			</div>
			<div class="form-group">
				<label for="avatar">Ảnh</label>
				<input type="file" name="avatar" class="form-control">
			</div>
			<div class="form-group">
				<label for="trang_thai">Trạng thái</label>
				<select name="trang_thai" class="form-control">
					<option value="1">Enable</option>
					<option value="0">Disable</option>
				</select>
			</div>
			<div class="text-center">
				<button type="submit" class="btn btn-success">Submit</button>
				<a href="{{route('user.list')}}" class="btn btn-warning">Cancel</a>
			</div>
		</form>
	</div>
@endsection