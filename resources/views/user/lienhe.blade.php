@extends('layouts.users.main')
@section('title','Thông tin liên hệ của cửa hàng')
@section('content')
<div class="container">
	<div class="col-md-12">
	{!!$lienhe->noi_dung!!}
	</div>
</div>
@endsection