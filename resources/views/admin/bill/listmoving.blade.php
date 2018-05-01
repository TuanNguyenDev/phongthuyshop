@extends('layouts.admin.admin')
@section('title', 'Danh sách đơn hàng đang giao')
@section('config_title', 'Danh sách đơn hàng đang giao')
@section('content')
<table class="table table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Tên khách hàng</th>
			<th>Phương thức thanh toán</th>
			<th>Địa chỉ</th>
			<th>Tổng tiền</th>
			<th>Chiết khấu</th>
			<th>Thanh toán</th>
			<th>Trạng thái</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		@foreach ($bills as $b)
		<tr>
			<td>{{++$loop->index}}</td>
			<td>{{get_customer_name($b->id_khach_hang)}}</td>
			<td>{{$b->phuong_thuc_thanh_toan}}</td>
			<td>{{$b->dia_chi}}</td>
			<td>{{$b->tong_tien}}</td>
			<td>
				@if ($b->chiet_khau != null)
					{{$b->chiet_khau}} %
				@else
					0%
				@endif
			</td>
			<td>{{$b->tien_thanh_toan}}</td>
			<td>Đang chờ</td>
			<td>
				<a href="{{route('bill.complete',['id' => $b->id])}}" class="btn btn-xs btn-success" title="">Hoàn thành hóa đơn</a>
				<a href="{{route('bill.detail',['id' => $b->id,'rdr' => $rdr])}}" class="btn btn-xs btn-success" title="">Chi tiết hóa đơn</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection