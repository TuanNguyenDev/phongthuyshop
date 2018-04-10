@extends('layouts.admin.admin')
@section('title', $title)
@section('config_title', $title)
@section('content')
<div class="col-sm-12">
	
	<form action="{{route('info.save')}}" method="post" accept-charset="utf-8" novalidate enctype="multipart/form-data">
		{{csrf_field()}}
		<input type="hidden" name="id" value="{{old('id', $model->id)}}">
		<input type="hidden" name="updated_by" value="{{\Auth::user()->id}}">
		<div class="form-group">
			<label for="danh_muc">Danh Mục</label>
			<input value="{{old('danh_muc', $model->danh_muc)}}" type="text" id="danh_muc" disabled="true" name="danh_muc" class="form-control" placeholder="Danh Mục">
		</div>
		<div class="form-group">
			<label for="noi_dung">Nội dung</label>
			<textarea name="noi_dung" class="form-control" id="noi_dung" >
				{{old('noi_dung', $model->noi_dung)}}
			</textarea>
			@if (count($errors) > 0)
				<span class="text-danger">{{$errors->first('noi_dung')}}</span>
			@endif
		</div>
		<div class="text-center">
			<button type="submit" class="btn btn-success">Cập nhập</button>
			<a href="{{route('info.list')}}" class="btn btn-warning">Cancel</a>
		</div>
	</form>
</div>
@endsection
@section('js')
<script type="text/javascript">
	ckeditor('noi_dung');
</script>
@endsection