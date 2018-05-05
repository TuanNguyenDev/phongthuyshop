@extends('layouts.users.main')
@section('title','Thông tin tuyển dụng cửa hàng')
@section('content')
<div class="container">
	<div class="col-md-12">
	{{$tuyendung->noi_dung}}
	</div>
</div>
@endsection