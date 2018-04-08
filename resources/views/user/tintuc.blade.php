@extends('layouts.users.main')
@section('title','Tin túc hữu ích khi mua hàng')
@section('content')
<div class="container">
		<div class="category-list">
			{{-- <a href="{{$tintuc->getSlug()}}"><h3>{{$cate->cate_name}}</h3></a> --}}
			@foreach ($tintuc as $p)
				<div class="post-item col-md-4">
					<a href="{{route('tintuc.chitiet',['id' => $p->id])}}" title="">{{$p->tieu_de}}</a>
					<div class="bg-success">
						<a href="{{-- {{$p->getSlug()}} --}}" class="thumbnail" title="">
							<img src="{{asset($p->anh)}}" alt="">
						</a>
						{!!$p->description!!}
					</div>
				</div>
			@endforeach
		</div>
		<div class="pager col-md-12">
			{{$tintuc->links()}}
		</div>
		
	</div>
@endsection