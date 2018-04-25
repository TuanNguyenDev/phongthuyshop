@extends('layouts.admin.admin')
@section('title', 'Chi tiết đơn hàng')
@section('config_title', 'Chi tiết đơn hàng')
@section('content')
<div>
	<ul class="list-group">
		<li class="list-group-item list-group-item-dark">Tên Khách Hàng: {{$cus->name}}</li>
		<li class="list-group-item list-group-item-dark">Địa chỉ giao hàng: {{$bills->dia_chi}}</li>
		<li class="list-group-item list-group-item-dark">Số điện thoại: {{$bills->sdt}}</li>
		<li class="list-group-item list-group-item-dark">Phương thức thanh toán: {{$bills->phuong_thuc_thanh_toan}}</li>
		<li class="list-group-item list-group-item-dark">Tổng tiền: {{$bills->tong_tien}} đ</li>
		<li class="list-group-item list-group-item-dark">Chiết khấu: 
			@if ($bills->chiet_khau != null)
				{{$bills->chiet_khau}} %
			@else
				0%
			@endif
		</li>
		<li class="list-group-item list-group-item-dark">Thanh toán: {{$bills->tien_thanh_toan}} đ</li>
		<li class="list-group-item list-group-item-dark">Trạng thái: 
			@if ($bills->trang_thai == 0)
				Đang chờ
			@endif
			@if ($bills->trang_thai == 1)
				Đang giao hàng
			@endif
			@if ($bills->trang_thai == 2)
				Đã hoàn thành
			@endif
		</li>
		<li class="list-group-item list-group-item-dark">Người tạo: 
			@if ($bills->nguoi_lap == null)
				Chưa có ai
			@else
				{{get_admin_name($bills->nguoi_lap)}}
			@endif
		</li>
		<li class="list-group-item list-group-item-dark">Ngày tạo:{{$bills->created_at}}
		</li>
	</ul>
</div>
<table class="table table-striped">
	<h2>Chi tiết đơn hàng</h2>
	<thead>
		<tr>
			<th>#</th>
			<th>Tên sản phẩm</th>
			<th>Số Lượng</th>
			<th>Thành tiền</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		@foreach ($billdetail as $detail)
		<tr>
			<td>{{++$loop->index}}</td>
			<td>{{get_product_name($detail->id_san_pham)}}</td>
			<td>{{$detail->so_luong}}</td>
			<td>{{$detail->thanhtien}} đ</td>
		</tr>
		@endforeach
	</tbody>
</table>
<div class="text-center">
			<a href="{{route('return.back',['rd' => $rd])}}" class="btn btn-warning">Quay lại</a>
		</div>
@endsection