@extends('layouts.admin.admin')
@section('title', 'Danh sách quản trị')
@section('config_title', 'Chào Mừng đến trang danh sách quản trị')
@section('content')
@php
	$pageSize = [20, 40, 60, 80 , 100]
@endphp
<div class=" col-sm-12">
	<form action="{{route('user.list')}}" method="get" accept-charset="utf-8" class="form-inline col-sm-10">
		<div class="form-group">
			<label> Page Size</label>
			<select name="pageSize">
				@foreach ($pageSize as $ps)
					@php
						$selectedPs = $ps ==$ctlPageSize ? "selected" : "";
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
			<th>Tên</th>
			<th width="70">Ảnh</th>
			<th>Email</th>
			<th>Số điện thoại</th>
			<th>Địa chỉ</th>
			<th>Trạng thái</th>
			<th>Chức vụ</th>
			<th><a href="{{route('user.create')}}" class="btn btn-xs btn-success" title="">Create</a></th>
		</tr>
	</thead>
	<tbody>
	@foreach ($user as $key => $element)
		<tr>
			<td>{{++$loop->index}}</td>
			<td>{{$element->name}}</td>
			<td>
				<img src="{{asset($element->anh)}}" alt="">
			</td>
			<td>{{$element->email}}</td>
			<td>{{$element->sdt}}</td>
			<td>{{$element->dia_chi}}</td>
			<td>
				@if ($element->trang_thai==1)
					Enable
				@else
					Disable
				@endif
			</td>
			<td>
				@php
					$role_id = \App\Models\UserRole::where('id_user',$element->id)->first();
					if(!$role_id){
						echo "chưa đặt";
					}
					else{
						$role_name = \App\Models\Role::where('id',$role_id->id_role)->first();
					echo $role_name->ten_role;
					}
					
				@endphp
				
			</td>
			<td>
				<a href="{{-- {{route('user.remove',['id' => $element->id])}} --}}" class="btn btn-xs btn-info" title="">Remove</a>
			</td>
		</tr>
	@endforeach
		<tr>
			<td colspan="7" class="text-center">{{$user->links()}}</td>
		</tr>
	</tbody>
	
</table>
@endsection