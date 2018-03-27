@extends('layouts.admin.admin')
@section('title', 'Danh sách mệnh')
@section('config_title', 'Chào Mừng đến trang danh sách mệnh')
@section('content')
@php
	$pageSize = [10, 20, 25, 30, 40]
@endphp
<div class="col-sm-12">
	<form action="{{route('menh.list')}}" method="get" accept-charset="utf-8" class="form-inline col-sm-10">
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
			<th>Tên mệnh</th>
			<th>Mô tả</th>
			<th>Trạng thái</th>
			<th>Người tạo</th>
			<th>
				<a href="{{route('menh.create')}}" class="btn btn-xs btn-success" title="">Tạo mới</a>
			</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($menhs as $m)
		<tr>
			<td>{{++$loop->index}}</td>
			<td>{{$m->ten_menh}}</td>
			<td>{{$m->mo_ta}}</td>
			<td>
				@if ($m->trang_thai==1)
					Enable
				@else
					Disable
				@endif
			</td>
			<td>{{$m->nguoi_tao}}</td>
			<td>
				<a href="{{route('menh.update',['id' => $m->id])}}" class="btn btn-xs btn-success" title="">Cập nhập</a>
				@if ($m->trang_thai ==1)
					<a href="{{route('menh.status',['id' => $m->id])}}" class="btn btn-xs btn-success" title="">Ẩn danh mục</a>
				@else
					<a href="{{route('menh.status',['id' => $m->id])}}" class="btn btn-xs btn-success" title="">Hiện danh mục</a>
				@endif
				<a href="{{route('menh.delete',['id' => $m->id])}}" class="btn btn-xs btn-success" title="">Xóa</a>
			</td>
		</tr>
		@endforeach
		<tr>
			<td colspan="7" class="text-center">{{$menhs->links()}}</td>
		</tr>
	</tbody>
</table>
@endsection