@extends('layouts.admin.admin')
@section('title', 'Danh sách khách hàng không đăng nhập')
@section('config_title', 'Chào Mừng đến trang khách hàng không đăng nhập')
@section('content')
@php
	$pageSize = [20, 40, 60, 80 , 100]
@endphp
<div class=" col-sm-12">
	<form action="{{route('customer.nologin')}}" method="get" accept-charset="utf-8" class="form-inline col-sm-10">
		<div class="form-group">
			<label> Page Size</label>
			<select name="pageSize">
				@foreach ($pageSize as $ps)
					@php
						$selectedPs = $ps ==$ctlPageSize ? "selected" : "";
					@endphp
					<option value="{{$ps}}" {{$selectedPs}}>{{$ps}}</option>}
				@endforeach
			</select>
		</div>
		<div class="form-group">
			<label>Search</label>
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
			<th>Tên</th>
			<th>Email</th>
			<th>Số điện thoại</th>
			<th>Địa chỉ</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
	@foreach ($cus as $key => $element)
		<tr>
			<td>{{++$loop->index}}</td>
			<td>{{$element->name}}</td>
			<td>{{$element->email}}</td>
			<td>{{$element->sdt}}</td>
			<td>{{$element->dia_chi}}</td>
			<td>
				<a href="{{route('customer.delete',['id' => $element->id])}}" class="btn btn-xs btn-info" title="">Remove</a>
				<a href="{{route('customer.noLogin.billdetail',['id' => $element->id])}}" class="btn btn-xs btn-success" title="">Xem thông tin đơn hàng</a>

			</td>
		</tr>
	@endforeach
		<tr>
			<td colspan="7" class="text-center">{{$cus->links()}}</td>
		</tr>
	</tbody>
	
</table>
@endsection