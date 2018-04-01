@extends('layouts.admin.admin')
@section('title', 'Danh sách danh mục')
@section('config_title', 'Chào Mừng đến trang danh sách danh mục')
@section('content')
@php
	$pageSize = [10, 20, 25, 30, 40]
@endphp
<div class="col-sm-12">
	<form action="{{route('category.list')}}" method="get" accept-charset="utf-8" class="form-inline col-sm-10">
		<div class="form-group">
			<label>Số lượng hiển thị</label>
			<select name="pageSize">
				@foreach ($pageSize as $ps)
					@php
						$selectedPs = $ps ==$ctlPageSize ? "selected" : "";
					@endphp
					<option value="{{$ps}}" {{$selectedPs}}>{{$ps}}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group">
			<label>Tìm kiếm</label>
			<input type="text" value="{{$keyword}}" name="keyword" class="form-control">
			<button type="submit" class="btn btn-sm btn-info">
				<span class="glyphicon glyphicon-search"></span>
			</button>
		</div>
	</form>
</div>
<table class="table table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Tên danh mục</th>
			<th>Ảnh</th>
			<th>Mô tả</th>
			<th>Trạng thái</th>
			<th>Người tạo</th>
			<th>
				<a href="{{route('category.create')}}" class="btn btn-xs btn-success" title="">Tạo mới</a>
			</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($cates as $c)
		<tr>
			<td>{{++$loop->index}}</td>
			<td>{{$c->ten_danh_muc}}</td>
			<td><img width="70" src="{{asset($c->anh)}}" alt=""></td>
			<td>{{$c->mo_ta}}</td>
			<td>
				@if ($c->trang_thai==1)
					Enable
				@else
					Disable
				@endif
			</td>
			<td>{{get_admin_name($c->nguoi_tao)}}</td>
			<td>
				<a href="{{route('category.update',['id' => $c->id])}}" class="btn btn-xs btn-success" title="">Cập nhập</a>
				@if ($c->trang_thai ==1)
					<a href="{{route('category.status',['id' => $c->id])}}" class="btn btn-xs btn-success" title="">Ẩn danh mục</a>
				@else
					<a href="{{route('category.status',['id' => $c->id])}}" class="btn btn-xs btn-success" title="">Hiện danh mục</a>
				@endif
				<a href="{{route('category.delete',['id' => $c->id])}}" class="btn btn-xs btn-success" title="">Xóa</a>
			</td>
		</tr>
		@endforeach
		<tr>
			<td colspan="7" class="text-center">{{$cates->links()}}</td>
		</tr>
	</tbody>
</table>

@endsection