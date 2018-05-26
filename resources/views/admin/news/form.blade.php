@extends('layouts.admin.admin')
@section('title', $title)
@section('config_title', $title)
@section('content')
<div class="col-sm-12">
	
	<form action="{{route('news.save')}}" method="post" accept-charset="utf-8" novalidate enctype="multipart/form-data">
		{{csrf_field()}}
		<input type="hidden" name="id" value="{{old('id', $model->id)}}">
		<input type="hidden" name="entity_type" value="{{$modelSlug->entity_type}}">
		<input type="hidden" name="nguoi_tao" value="{{\Auth::user()->id}}">
		<div class="form-group">
			<label for="tieu_de">Tiêu Đề</label>
			<input value="{{old('tieu_de', $model->tieu_de)}}" type="text" id="tieu_de" name="tieu_de" class="form-control" placeholder="Tiêu đề">
			@if (count($errors) > 0)
				<span class="text-danger">{{$errors->first('tieu_de')}}</span>
			@endif
		</div>
		<div class="form-group">
			<label for="description">Mô tả</label>
			<input type="text" id="description" name="description" value="{{old('description',$model->description)}}" class="form-control" placeholder="description">
			@if (count($errors) > 0)
				<span class="text-danger">{{$errors->first('description')}}</span>
			@endif
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
		<div class="form-group">
			<label for="anh">Ảnh</label>
			<input type="file" name="anh" class="form-control">
			@if (count($errors) > 0)
				<span class="text-danger">{{$errors->first('anh')}}</span>
			@endif
		</div>
		<div class="text-center">
			<button type="submit" class="btn btn-success" onclick="return validate()">Tạo Mới</button>
			<a href="{{route('product.list')}}" class="btn btn-warning">Cancel</a>
		</div>
	</form>
</div>
@endsection
@section('js')
<script type="text/javascript">
	ckeditor('noi_dung');
	function validate(){
		var tieu_de = document.getElementById("tieu_de").value;
		var description = document.getElementById("description").value;
		var noi_dung = document.getElementById("noi_dung").value;
		if(tieu_de == ""){
			alert("Hãy nhập tiêu đề");
			return false;
		}
		if(description == ""){
			alert("Hãy nhập mô tả");
			return false;
		}
		// if(noi_dung == ""){
		// 	alert("Hãy nhập nội dung");
		// 	return false;
		// }
	}
</script>
@endsection