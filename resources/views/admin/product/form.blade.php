@extends('layouts.admin.admin')
@section('title', 'Thêm sản phẩm')
@section('config_title', 'Thêm sản phẩm')
@section('content')
<div class="col-sm-12">
	
	<form action="" method="" accept-charset="utf-8" novalidate enctype="multipart/form-data">
		{{csrf_field()}}
		<input type="hidden" name="id" value="{{old('id', $model->id)}}">
		<input type="hidden" name="entity_type" value="{{$modelSlug->entity_type}}">
		<div class="form-group">
			<label for="ten_san_pham">Tên sản phẩm</label>
			<input value="{{old('ten_san_pham', $model->ten_san_pham)}}" type="text" id="name" name="ten_san_pham" class="form-control" placeholder="Tên sản phẩm">
		</div>
		<div class="form-group">
				<label for="product_url">Slug Url</label>
				<input id="product_url" type="text" 
					value="{{old('slug', $modelSlug->slug)}}" name="slug" class="form-control" placeholder="Slug url">
				@if (count($errors) > 0)
					<span class="text-danger">{{$errors->first('slug')}}</span>
				@endif
			</div>
			<div class="form-group">
				<label for="category">Category</label>
				<select name="id_type" class="form-control">
					<option value="0">-------------</option>
					@foreach ($listType as $key => $value)
						@php
							$selected = $model->id_danh_muc == $value->id ? "selected" : null;
						@endphp
						<option value="{{$value->id}}" {{$selected}}>{{$value->ten_danh_muc}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="menh">Mệnh</label>
				<select name="id_menh" class="form-control">
					<option value="0">-------------</option>
					@foreach ($listMenh as $key => $value)
						@php
							$selected = $model->id_menh == $value->id ? "selected" : null;
						@endphp
						<option value="{{$value->id}}" {{$selected}}>{{$value->ten_menh}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="size">Size</label>
				<input type="text" id="size" name="size" value="{{old('size',$model->size)}}" class="form-control" placeholder="Size">
				@if (count($errors) > 0)
					<span class="text-danger">{{$errors->first('size')}}</span>
				@endif
			</div>
			<div class="form-group">
				<label for="gia">Giá</label>
				<input type="text" id="gia" name="gia" value="{{old('gia',$model->gia)}}" class="form-control" placeholder="Giá">
				@if (count($errors) > 0)
					<span class="text-danger">{{$errors->first('gia')}}</span>
				@endif
			</div>
			<div class="form-group">
				<label for="trong_luong">Trọng lượng</label>
				<input type="text" id="trong_luong" name="trong_luong" value="{{old('trong_luong',$model->trong_luong)}}" class="form-control" placeholder="Trọng lượng">
				@if (count($errors) > 0)
					<span class="text-danger">{{$errors->first('trong_luong')}}</span>
				@endif
			</div>
			<div class="form-group">
				<label for="mau_sac">Màu sắc</label>
				<input type="text" id="mau_sac" name="mau_sac" value="{{old('mau_sac',$model->mau_sac)}}" class="form-control" placeholder="Màu sắc">
				@if (count($errors) > 0)
					<span class="text-danger">{{$errors->first('mau_sac')}}</span>
				@endif
			</div>
			<div class="form-group">
				<label for="so_luong">Số lượng</label>
				<input type="text" id="so_luong" name="so_luong" value="{{old('so_luong',$model->so_luong)}}" class="form-control" placeholder="Số lượng">
				@if (count($errors) > 0)
					<span class="text-danger">{{$errors->first('so_luong')}}</span>
				@endif
			</div>
			<div class="form-group">
				<label for="chat_lieu">Chất liệu</label>
				<input type="text" id="chat_lieu" name="chat_lieu" value="{{old('chat_lieu',$model->chat_lieu)}}" class="form-control" placeholder="Chất liệu">
				@if (count($errors) > 0)
					<span class="text-danger">{{$errors->first('chat_lieu')}}</span>
				@endif
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
	</form>
</div>
@endsection
@section('js')
<script>tinymce.init({ selector:'#mo_ta' });</script>
@endsection
