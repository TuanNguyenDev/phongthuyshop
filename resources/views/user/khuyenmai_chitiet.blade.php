@extends('layouts.users.main')
@section('title','Chi tiết khuyến mãi')
@section('content')
<div class="container">
	<div class="col-md-12" style="margin-top:0px  30px;">
		<p style="font-size: 28px;">Giảm ngay {{$km['0']->chiet_khau}} % cho mọi đơn hàng</p>
		<h1>Ngày bắt đầu: {{$km['0']->ngay_bat_dau}}</h1>
		<br>
		<h1>Ngày kết thúc: {{$km['0']->ngay_ket_thuc}}</h1>
		<p>{!!$km['0']->noi_dung!!}</p>
		<strong>Số lượng còn lại: {{$km['0']->so_luong_con_lai}}</strong>
		<h1 class="text-danger">Mã: {{$km['0']->ma_khuyen_mai}}</h1>
	</div>
</div>
@endsection