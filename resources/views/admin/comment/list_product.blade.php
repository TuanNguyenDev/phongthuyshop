@extends('layouts.admin.admin')
@if (isset($d_sp))
	@section('title', 'Danh sách comment của sản phẩm '. get_product_name($id_sp))
	@section('config_title', 'Danh sách comment của sản phẩm '. get_product_name($id_sp))
@else
	@section('title', 'Danh sách comment của sản phẩm ')
	@section('config_title', 'Danh sách comment của sản phẩm ')
@endif

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
		@foreach ($commentsp as $c)
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
				@if (isset($id_sp))
				<td>
					@if ($c->trang_thai ==1)
						<a href="{{route('comment.product.status',['id' => $c->id])}}" class="btn btn-xs btn-success" title="">Ẩn comment</a>
					@else
						<a href="{{route('comment.product.status',['id' => $c->id])}}" class="btn btn-xs btn-success" title="">Hiện comment</a>
					@endif
					<a href="{{route('comment.delete',['id' => $c->id])}}" class="btn btn-xs btn-success" title="">Xóa</a>
				</td>
				@else
				<td>
					@if ($c->trang_thai ==1)
						<a href="{{route('comment.product.status.all',['id' => $c->id])}}" class="btn btn-xs btn-success" title="">Ẩn comment</a>
					@else
						<a href="{{route('comment.product.status.all',['id' => $c->id])}}" class="btn btn-xs btn-success" title="">Hiện comment</a>
					@endif
					<a href="{{route('comment.delete.all',['id' => $c->id])}}" class="btn btn-xs btn-success" title="">Xóa</a>
				</td>
				@endif
			</tr>
		@endforeach
		<tr>
			<td colspan="10" rowspan="" class="text-center" headers="">{{$commentsp->links()}}</td>
		</tr>
	</tbody>
</table>
@if (isset($id_sp))
<div class="text-center">
	<a href="{{route('product.list')}}" class="btn btn-warning">Quay lại</a>
</div>
@endif
@endsection