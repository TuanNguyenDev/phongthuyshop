@extends('layouts.admin.admin')
@section('title', 'Các đơn hàng của khách hàng '. $cus->name)
@section('config_title', 'Các đơn hàng của khách hàng '. $cus->name)
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
		@foreach ($model as $b)
		<tr>
			<td>{{++$loop->index}}</td>
			<td>{{$cus->name}}</td>
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
			<td>
				@if ($b->trang_thai = 0)
					Đang chờ
				@endif
				@if ($b->trang_thai = 1)
					Đang vận chuyển
				@endif
				@if ($b->trang_thai = 2)
					Đã hoàn thành
				@endif
				
			</td>
			<td>
				{{-- <a href="{{route('bill.accept',['id' => $b->id])}}" class="btn btn-xs btn-success" title="">Chấp nhận hóa đơn</a> --}}
				<a href="{{route('customer.billdetail',['id' => $b->id])}}" class="btn btn-xs btn-success" title="">Chi tiết hóa đơn</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection