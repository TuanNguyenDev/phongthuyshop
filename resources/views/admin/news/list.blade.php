@extends('layouts.admin.admin')
@section('title', 'Danh sách tin tức')
@section('config_title', 'Chào Mừng đến trang danh sách tin tức')
@section('content')
@php
	$pageSize = [20, 40, 60, 80 , 100]
@endphp
<div class=" col-sm-12">
	<form action="{{route('product.list')}}" method="get" accept-charset="utf-8" class="form-inline col-sm-10">
		<div class="form-group">
			<label> Page Size</label>
			<select name="pageSize">
				@foreach ($pageSize as $ps)
					@php
						$selectedPs = $ps == $ctlPageSize ? "selected" : "";
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
			<th>Tiêu đề</th>
			<th width="70">Ảnh</th>
			<th>Description</th>
			<th>Tác giả</th>
			<th>Nội dung</th>
			<th><a href="{{route('news.create')}}" class="btn btn-xs btn-success" title="">Create</a></th>
		</tr>
	</thead>
	<tbody>
	@foreach ($news as $n)
		<tr>
			<td>{{++$loop->index}}</td>
			<td>{{$n->tieu_de}}</td>
			<td>
				<img src="{{asset($n->image)}}" alt="">
			</td>
			<td>{{$n->description}}</td>
			<td>{{get_admin_name($n->id_tac_gia)}}</td>
			<td>{{$n->noi_dung}}</td>
			<td>
				<a href="{{route('news.update',['id' => $n->id])}}" class="btn btn-xs btn-info" title="">Edit</a>
				<a href="{{route('news.remove',['id' => $n->id])}}" class="btn btn-xs btn-info" title="">Remove</a>
			</td>
		</tr>
	@endforeach
		<tr>
			<td colspan="7" class="text-center">{{$news->links()}}</td>
		</tr>
	</tbody>
	
</table>
@endsection