@extends('layouts.admin.admin')
@section('title', 'Danh Sách Slide Trang Chủ')
@section('config_title', 'Danh Sách Slide Trang Chủ')
@section('content')
<table class="table table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Mô tả</th>
			<th>Ảnh</th>
			<th>Update by</th>
			<th>
				<a href="{{route('slide.create')}}" class="btn btn-xs btn-success" title="">Tạo mới</a>
				
			</th>
		</tr>
	</thead>
	<tbody>
	@foreach ($slide as $s)
		<tr>
			<td>{{++$loop->index}}</td>
			<td>{{$s->mo_ta}}</td>
			<td ><img width="100" src="{{asset($s->anh)}}" alt=""></td>
			<td>{{get_admin_name($s->updated_by)}}</td>
			<td>
				<a href="{{route('slide.update',['id' => $s->id])}}" class="btn btn-xs btn-info" title="">Sửa</a>
				<a href="{{route('slide.delete',['id' => $s->id])}}" class="btn btn-xs btn-info" title="">Xóa</a>
			</td>
		</tr>
	@endforeach
	</tbody>
	
</table>
@endsection