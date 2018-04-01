@extends('layouts.admin.admin')
@section('title', 'Danh sách sản phẩm')
@section('config_title', 'Chào Mừng đến trang danh sách sản phẩm')
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
			<th>Tên sản phẩm</th>
			<th width="70">Ảnh</th>
			<th>Size</th>
			<th>Giá bán</th>
			<th>Trọng lượng</th>
			<th>Màu sắc</th>
			<th>Mệnh</th>
			<th>Danh mục</th>
			<th>Số lượng</th>
			<th>Chất liệu</th>
			<th>Mô tả</th>
			<th>Trạng thái</th>
			<th>Giá nhập</th>
			<th>Người tạo</th>
			<th>
				<a href="{{route('product.create')}}" class="btn btn-xs btn-success" title="">Tạo mới</a>
				
			</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($products as $p)
			<tr>
				<td>{{++$loop->index}}</td>
				<td>{{$p->ten_san_pham}}</td>
				<td ><img width="70" src="{{asset($p->anh)}}" alt=""></td>
				<td>{{$p->size}}</td>
				<td>{{$p->gia}}</td>
				<td>{{$p->trong_luong}}</td>
				<td>{{$p->mau_sac}}</td>
				<td>{{$p->Menh()['ten_menh']}}</td>
				<td>{{$p->Category()['ten_danh_muc']}}</td>
				<td>{{$p->so_luong}}</td>
				<td>{{$p->chat_lieu}}</td>
				<td>{{$p->mo_ta}}</td>
				<td>
					@if ($p->trang_thai==1)
						Enable
					@else
						Disable
					@endif
				</td>
					<td>{{$p->gia_nhap}}</td>
				<td>{{get_admin_name($p->nguoi_tao)}}</td>
				<td>
					<a href="{{route('product.update',['id' => $p->id])}}" class="btn btn-xs btn-success" title="">Cập nhập</a>
					@if ($p->trang_thai ==1)
						<a href="{{route('product.status',['id' => $p->id])}}" class="btn btn-xs btn-success" title="">Ẩn sản phẩm</a>
					@else
						<a href="{{route('product.status',['id' => $p->id])}}" class="btn btn-xs btn-success" title="">Hiện sản phẩm</a>
					@endif
					<a href="{{route('product.delete',['id' => $p->id])}}" class="btn btn-xs btn-success" title="">Xóa</a>
				</td>
			</tr>
		@endforeach
		<tr>
			<td colspan="10" rowspan="" class="text-center" headers="">{{$products->links()}}</td>
		</tr>
	</tbody>
</table>
@endsection