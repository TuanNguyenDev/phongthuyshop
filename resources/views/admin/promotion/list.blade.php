@extends('layouts.admin.admin')
@section('title', 'Danh sách khuyến mãi')
@section('config_title', 'Chào Mừng đến trang danh sách khuyến mãi')
@section('content')
@php
	$pageSize = [10, 20, 25, 30, 40]
@endphp
<div class="col-sm-12">
	<form action="{{route('promotion.list')}}" method="get" accept-charset="utf-8" class="form-inline col-sm-10">
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
			<th>Nội dung</th>
			<th>Mã khuyến mại</th>
			<th>Chiết khấu</th>
			<th>Ngày bắt đầu</th>
			<th>Ngày kết thúc</th>
			<th>Số lượng tạo</th>
			<th>Số lượng còn lại</th>
			<th>Trạng thái</th>
			<th>Người tạo</th>
			<th>
				<a href="{{route('promotion.create')}}" class="btn btn-xs btn-success" title="">Tạo mới</a>
				
			</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($promotions as $p)
			<tr>
				<td>{{++$loop->index}}</td>
				<td>{{$p->noi_dung}}</td>
				<td>{{$p->ma_khuyen_mai}}</td>
				<td>{{$p->chiet_khau}}</td>
				<td>{{$p->ngay_bat_dau}}</td>
				<td>{{$p->ngay_ket_thuc}}</td>
				<td>{{$p->so_luong}}</td>
				<td>{{$p->so_luong_con_lai}}</td>
				<td>
					@if ($p->trang_thai==1)
						Enable
					@else
						Disable
					@endif
				</td>
				<td>{{get_admin_name($p->nguoi_tao)}}</td>
				<td>
					@if ($p->trang_thai ==1)
						<a href="{{route('promotion.status',['id' => $p->id])}}" class="btn btn-xs btn-success" title="">Ẩn sản phẩm</a>
					@else
						<a href="{{route('promotion.status',['id' => $p->id])}}" class="btn btn-xs btn-success" title="">Hiện sản phẩm</a>
					@endif
					<a href="{{route('promotion.delete',['id' => $p->id])}}" class="btn btn-xs btn-success" title="">Xóa</a>
				</td>
			</tr>
		@endforeach
		<tr>
			<td colspan="10" rowspan="" class="text-center" headers="">{{$promotions->links()}}</td>
		</tr>
	</tbody>
</table>
@endsection