@extends('layouts.admin.admin')
@section('title', 'Danh sách phản hồi của khách hàng')
@section('config_title', 'Chào Mừng đến trang danh sách phản hồi của khách hàng')
@section('content')
@php
	$pageSize = [10, 20, 25, 30, 40]
@endphp
<div class="col-sm-12">
	<form action="{{route('product.list')}}" method="get" accept-charset="utf-8" class="form-inline col-sm-10">
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
			<th>Tên khách hàng</th>
			<th>Email</th>
			<th>Số điện thoại</th>
			<th>Nội dung</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		@foreach ($feedbacks as $l)
			<tr>
				<td>{{++$loop->index}}</td>
				<td>{{$l->ten}}</td>
				<td>{{$l->email}}</td>
				<td>{{$l->sdt}}</td>
				<td>{{$l->noi_dung}}</td>
				<td>
					<a href="{{route('feedback.delete',['id' => $l->id])}}" class="btn btn-xs btn-danger" title="">Xóa phản hồi</a>
					<a href="{{route('feedback.mail',['name' => $l->ten,'mail' => $l->email ])}}" class="btn btn-xs btn-danger" title="">Trả lời bằng email</a>
				</td>
			</tr>
		@endforeach
		<tr>
			<td colspan="10" rowspan="" class="text-center" headers="">{{$feedbacks->links()}}</td>
		</tr>
	</tbody>
</table>
@endsection