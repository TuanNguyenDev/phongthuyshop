@extends('layouts.users.main')
@section('title','Tin túc hữu ích khi mua hàng')
@section('content')
<div class="container">
		<div class="category-list row col-md-12">
			{{-- <a href="{{$tintuc->getSlug()}}"><h3>{{$cate->cate_name}}</h3></a> --}}
			@foreach ($tintuc as $p)
				<div class="post-item col-md-6">
					<br>
					<br>
					<a href="{{route('tintuc.chitiet',['id' => $p->id])}}" title=""><span style="font-size: 22px">{{$p->tieu_de}}</span></a>
					<div class="bg-success">
						<a href="{{route('tintuc.chitiet',['id' => $p->id])}}" class="thumbnail" title="">
							<img src="{{asset($p->anh)}}" alt="">
						</a>
						{!!$p->description!!}
					</div>
				</div>
			@endforeach
			<div class="pager col-md-12">
				{{$tintuc->links()}}
			</div>
		</div>
		
	</div>
@endsection