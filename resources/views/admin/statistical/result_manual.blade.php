@extends('layouts.admin.admin')
@section('title', 'Chi tiết đơn hàng')
@section('config_title', 'Chi tiết đơn hàng')
@section('content')
<div class="text-left">
	<h2>Doanh thu từ ngày {{$begin}} đến ngày {{$end}}</h2>
	<h3>Tổng số doanh thu nếu không dùng khuyến mãi: {{$total}} Đ</h3>
	<h3>Tổng số doanh thu nếu  dùng khuyến mãi: {{$pro}} Đ</h3>
	<h3>Tổng số hóa đơn được hoàn thành: {{$count}} hóa đơn</h3>
	<h3>Tổng số hàng hóa bán ra: {{$product}} sản phẩm</h3>
	
</div>
<div class="text-center">
	<a href="{{route('revenue.form')}}" class="btn btn-warning" title="">Trở lại</a>
</div>
@endsection