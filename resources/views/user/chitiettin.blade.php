@extends('layouts.users.main')
@section('title','Tin túc hữu ích khi mua hàng')
@section('content')
<div class="container">
	<div class="col-md-12" style="margin-top:0px  30px;">
		<p style="font-size: 28px;">{{$tin->tieu_de}}</p>
		<h2>Người viết: {{get_admin_name($tin->id_tac_gia)}}, {{$tin->created_at}}</h2>
		<p>--------------------------------------------------------------------------</p>
		<p>{!!$tin->noi_dung!!}</p>
	</div>
</div>
@endsection