@extends('layouts.admin.admin')
@section('title', 'Info cửa hàng')
@section('config_title', 'Info cửa hàng')
@section('content')
<table class="table table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Danh Mục</th>
			<th>Nội Dung</th>
		</tr>
	</thead>
	<tbody>
	@foreach ($info as $n)
		<tr>
			<td>{{++$loop->index}}</td>
			<td>{{$n->danh_muc}}</td>
			<td>{{$n->noi_dung}}</td>
			<td>{{get_admin_name($n->updated_by)}}</td>
			<td>
				<a href="{{route('info.update',['id' => $n->id])}}" class="btn btn-xs btn-info" title="">Edit</a>
			</td>
		</tr>
	@endforeach
	</tbody>
	
</table>
@endsection