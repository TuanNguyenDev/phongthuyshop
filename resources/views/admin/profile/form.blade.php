@extends('layouts.admin.admin')
@section('title', 'Cập nhập thông tin tài khoản')
@section('config_title', 'Cập nhập thông tin tài khoản')
@section('content')
	<div class="col-sm-12">
		<form method="post" accept-charset="utf-8" novalidate enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="form-group">
				<label for="name">Name</label>
				<input value="{{old('name', $admin->name)}}" type="text" id="name" name="name" class="form-control" placeholder="Ex: Nguyen Van A">
				@if (count($errors) > 0)
					<span class="text-danger">{{$errors->first('name')}}</span>
				@endif
			</div>
			<div class="form-group">
				<label for="anh">Ảnh</label>
				<input type="file" name="anh" id="anh" class="form-control">
				@if (count($errors) > 0)
					<span class="text-danger">{{$errors->first('anh')}}</span>
				@endif
			</div>
			<div class="form-group">
				<label for="sdt">Số điện thoại</label>
				<input id="sdt" type="text" 
					value="{{old('sdt', $admin->sdt)}}" name="sdt" class="form-control" placeholder="Your Phone">
				@if (count($errors) > 0)
					<span class="text-danger">{{$errors->first('sdt')}}</span>
				@endif
			</div>
			<div class="form-group">
				<label for="dia_chi">Địa chỉ</label>
				<input id="dia_chi" type="text" 
					value="{{old('dia_chi', $admin->dia_chi)}}" name="dia_chi" class="form-control" placeholder="Your Address">
				@if (count($errors) > 0)
					<span class="text-danger">{{$errors->first('dia_chi')}}</span>
				@endif
			</div>
			<div class="text-center">
				<button type="submit" class="btn btn-success">Submit</button>
				<a href="{{route('dashboard')}}" class="btn btn-warning">Cancel</a>
			</div>
		</form>
	</div>
@endsection