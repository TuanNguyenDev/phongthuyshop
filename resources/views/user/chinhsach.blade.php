@extends('layouts.users.main')
@section('title','Chính sách của cửa hàng')
@section('content')
<div class="container">
	<div class="col-md-12">
	{!!$chinhsach->noi_dung!!}
	</div>
</div>
@endsection