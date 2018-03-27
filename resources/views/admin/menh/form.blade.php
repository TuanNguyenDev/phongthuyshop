@extends('layouts.admin.admin')
@section('title', $title)
@section('config_title', $title)
@section('content')
<div class="col-sm-12">
	<form action="{{route('menh.save')}}" method="post" accept-charset="utf-8" novalidate enctype="multipart/form-data">
		{{csrf_field()}}
		<input type="hidden" name="id" value="{{old('id', $model->id)}}">
		<input type="hidden" name="entity_type" value="{{$modelSlug->entity_type}}">
		<div class="form-group">
			<label for="ten_menh">Tên mệnh</label>
			<input type="text" value="{{old('ten_menh',$model->ten_menh)}}" name="ten_menh" id="ten_menh" class="form-control" placeholder="Điền tên mệnh">
		</div>
		<div class="form-group">
			<label for="mo_ta">Mô tả</label>
			<textarea name="mo_ta" class="form-control" id="mo_ta" >
				{{old('mo_ta', $model->mo_ta)}}
			</textarea>
			@if (count($errors) > 0)
				<span class="text-danger">{{$errors->first('mo_ta')}}</span>
			@endif
		</div>
		<div class="text-center">
			<button type="submit" class="btn btn-success">Tạo Mới</button>
			<a href="{{route('menh.list')}}" class="btn btn-warning">Cancel</a>
		</div>
	</form>
</div>
@endsection
@section('js')
<script>tinymce.init({ selector:'#mo_ta' });</script>
@endsection