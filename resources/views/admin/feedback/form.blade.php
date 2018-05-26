@extends('layouts.admin.admin')
@section('title', 'Gửi email phản hồi')
@section('config_title', 'Gửi email phản hồi')
@section('content')
<div class="col-sm-12">
	<form action="{{route('send.mail.feedback')}}" method="get" accept-charset="utf-8" novalidate enctype="multipart/form-data">
		<input type="hidden" name="name" value="{{$name}}">
		<input type="hidden" name="email" value="{{$email}}">
		<input type="hidden" name="nguoi_tao" value="{{\Auth::user()->id}}">
		<div class="form-group">
			<label for="noi_dung">Nội dung</label>
			<textarea name="noi_dung" class="form-control" id="noi_dung" required >
			</textarea>
		</div>
		<div class="text-center">
			<button type="submit" class="btn btn-success">Gửi mail</button>
			<a href="{{route('category.list')}}" class="btn btn-warning">Cancel</a>
		</div>
	</form>
</div>
@endsection
@section('js')

@endsection