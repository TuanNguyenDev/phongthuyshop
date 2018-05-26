@extends('layouts.admin.admin')
@section('title', $title)
@section('config_title', $title)
@section('content')
<div class="col-sm-12">
	<div class="text-info">
		<p>Số lượng mã khuyến mãi phải từ 2 - 100, Phần trăm chiết khấu từ 5% đến 70%</p>
	</div>
	<form action="{{route('promotion.save')}}" method="post" accept-charset="utf-8" novalidate>
		{{csrf_field()}}
		<input type="hidden" name="id" value="{{old('id', $model->id)}}">
		<input type="hidden" name="nguoi_tao" value="{{Auth::user()->id}}">
		<div class="form-group">
			<label for="noi_dung">Nội dung khuyến mãi</label>
			<textarea name="noi_dung" class="form-control" id="noi_dung" >
				{{old('noi_dung', $model->noi_dung)}}
			</textarea>
			@if (count($errors) > 0)
				<span class="text-danger">{{$errors->first('noi_dung')}}</span>
			@endif
		</div>
		<div class="form-group">
			<label for="chiet_khau">Phần trăm chiết khấu</label>
			<input type="number"  value="{{old('chiet_khau',$model->chiet_khau)}}" name="chiet_khau" id="chiet_khau" class="form-control"  placeholder="Phần trăm triết khấu">
			@if (count($errors) > 0)
				<span class="text-danger">{{$errors->first('chiet_khau')}}</span>
			@endif
		</div>
		<div class="form-group col-sm-6">
			<label for="ngay_bat_dau">Ngày bắt đầu</label>
			<input type="date" name="ngay_bat_dau" id="ngay_bat_dau">
			@if (count($errors) > 0)
				<span class="text-danger">{{$errors->first('ngay_bat_dau')}}</span>
			@endif
		</div>
		<div class="form-group col-sm-6">
			<label for="ngay_ket_thuc">Ngày kết thúc</label>
			<input type="date" name="ngay_ket_thuc" id="ngay_ket_thuc">
			@if (count($errors) > 0)
				<span class="text-danger">{{$errors->first('ngay_ket_thuc')}}</span>
			@endif
		</div>
		<div class="form-group">
			<label for="so_luong">Số lượng mã khuyến mãi:</label>
			<input type="number" min="1" max="200" value="{{old('so_luong',$model->so_luong)}}" name="so_luong" id="so_luong" class="form-control" placeholder="Điền số lượng mã khuyến mãi muốn tạo">
			@if (count($errors) > 0)
				<span class="text-danger">{{$errors->first('so_luong')}}</span>
			@endif
		</div>
		<div class="text-center">
			<button type="submit" class="btn btn-success">Tạo Mới</button>
			<a href="{{-- {{route('category.list')}} --}}" class="btn btn-warning">Cancel</a>
		</div>
	</form>
</div>
@endsection
@section('js')
<script>
tinymce.init({ selector:'#noi_dung' });
</script>
<script type="text/javascript">
    var dtToday = new Date();
    
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var maxDate = year + '-' + month + '-' + day;
    console.log(maxDate);
    document.getElementById("ngay_bat_dau").onclick = function(){
    	$('#ngay_bat_dau').attr('min', maxDate);
    	$('#ngay_ket_thuc').removeAttr("disabled"); 
    }
    document.getElementById("ngay_ket_thuc").onclick = function(){
    	var end = document.getElementById("ngay_bat_dau").value;
    	if(end == ""){
    		$('#ngay_ket_thuc').attr('disabled', true);
    	}
    	if(end != "")
    	{
    		$('#ngay_ket_thuc').attr('min', end);
    	}
    }
    // $('#ngay_bat_dau').attr('min', maxDate);
    // var end = document.getElementById("ngay_bat_dau").value;
    // console.log(end);
    // $('#ngay_ket_thuc').attr('min', end);
</script>
@endsection
 