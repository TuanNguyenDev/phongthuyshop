@extends('layouts.users.main')
@section('title','Thông tin khuyến mãi')
@section('content')
<div class="container">
	<div class="category-list">
		<div class="col-md-12 bg-danger text-center">
			<br>
			<br>
			<h1>Các Khuyến Mãi Đang Diễn Ra</h1>
		</div>
		@foreach ($result as $p)
			<div class="post-item col-md-4 bg-success">
				<br>
				<br>
				<a href="{{route('khuyenmai.chitiet',['id' => $p->id])}}" title="Xem Khuyến Mãi"><h1 style="color: red;">Khuyến mãi giảm {{$p->chiet_khau}} %</h1></a>
				<p>Ngày kết thúc: {{$p->ngay_ket_thuc}}</p>
				<br>
			</div>
		@endforeach
	</div>
</div>
@endsection