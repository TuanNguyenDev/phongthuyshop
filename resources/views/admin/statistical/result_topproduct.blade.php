@extends('layouts.admin.admin')
@section('title', 'Top mặt hàng bán chạy')
@section('config_title', 'Top mặt hàng bán chạy')
@section('content')
<div class="text-left">
	<h2>Sản phẩm bán chạy từ ngày {{$begin}} đến ngày {{$end}}</h2>
	<table class="table table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Tên sản phẩm</th>
			<th>Số lượng bán ra</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($pro as $key => $p)
			<tr>
				<td>{{++$loop->index}}</td>
				<td>{{get_product_name($key)}}</td>
				<td>{{$p}} sản phẩm</td>
			</tr>
		@endforeach
	</tbody>
</table>
	
</div>
<div class="text-center">
	<a href="{{route('top.product')}}" class="btn btn-warning" title="">Trở lại</a>
</div>
@endsection