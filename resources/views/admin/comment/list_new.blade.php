@extends('layouts.admin.admin')
@section('title', 'Danh sách comment của tin tức ')
@section('config_title', 'Danh sách comment của tin tức ')
@section('content')
<table class="table table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Người viết</th>
			<th>Nội dung</th>
			<th>Trạng thái</th>
			<th>Ngày viết</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		@foreach ($commentnew as $c)
			<tr>
				<td>{{++$loop->index}}</td>
				<td>{{get_customer_name($c->id_khach)}}</td>
				<td>{{$c->noi_dung}}</td>
				<td>
					@if ($c->trang_thai==1)
						Enable
					@else
						Disable
					@endif
				</td>
				<td>{{$c->created_at}}</td>
				@if (isset($id_new))
				<td>
					@if ($c->trang_thai ==1)
						<a href="{{route('comment.new.status',['id' => $c->id])}}" class="btn btn-xs btn-success" title="">Ẩn comment</a>
					@else
						<a href="{{route('comment.new.status',['id' => $c->id])}}" class="btn btn-xs btn-success" title="">Hiện comment</a>
					@endif
					<a href="{{route('comment.new.delete',['id' => $c->id])}}" class="btn btn-xs btn-success" title="">Xóa</a>
				</td>
				@else
				<td>
					@if ($c->trang_thai ==1)
						<a href="{{route('comment.new.status.all',['id' => $c->id])}}" class="btn btn-xs btn-success" title="">Ẩn comment</a>
					@else
						<a href="{{route('comment.new.status.all',['id' => $c->id])}}" class="btn btn-xs btn-success" title="">Hiện comment</a>
					@endif
					<a href="{{route('comment.new.delete.all',['id' => $c->id])}}" class="btn btn-xs btn-success" title="">Xóa</a>
				</td>
				@endif
			</tr>
		@endforeach
		<tr>
			<td colspan="10" rowspan="" class="text-center" headers="">{{$commentnew->links()}}</td>
		</tr>
	</tbody>
</table>
@if (isset($id_new))
<div class="text-center">
	<a href="{{route('tintuc.list')}}" class="btn btn-warning">Quay lại</a>
</div>
@endif
@endsection