@extends('layouts.admin.admin')
@section('title', $title)
@section('config_title', $title)
@section('content')
<div class="col-sm-12">
	<form action="{{route('slide.save')}}" method="post" accept-charset="utf-8" novalidate enctype="multipart/form-data">
		{{csrf_field()}}
		<input type="hidden" name="id" value="{{old('id', $model->id)}}">
		<input type="hidden" name="updated_by" value="{{\Auth::user()->id}}">
		<div class="form-group">
			<label for="mo_ta">Mô tả</label>
			<input value="{{old('mo_ta', $model->mo_ta)}}" type="text" id="mo_ta" name="mo_ta" class="form-control" placeholder="alt">
			@if (count($errors) > 0)
				<span class="text-danger">{{$errors->first('mo_ta')}}</span>
			@endif
		</div>
		<div class="form-group">
			<label for="anh">Ảnh</label>
			<input type="file" name="anh" class="form-control">
			@if (count($errors) > 0)
				<span class="text-danger">{{$errors->first('anh')}}</span>
			@endif
		</div>
		<div class="text-center">
			<button type="submit" class="btn btn-success">Tạo Mới</button>
			<a href="{{route('slide.list')}}" class="btn btn-warning">Cancel</a>
		</div>
	</form>
</div>
</div>
@endsection