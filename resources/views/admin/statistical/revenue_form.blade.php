@extends('layouts.admin.admin')
@section('title', 'Thông tin doanh thu')
@section('config_title', 'Thông tin doanh thu')
@section('content')
<div class="text-center">
	<h3>Nhập ngày bắt đầu và kết thúc để xem thông tin doanh thu</h3>
</div>
<form action="{{route('revenue.manual')}}" method="post" accept-charset="utf-8" novalidate>
	{{csrf_field()}}
	<div class="form-group col-sm-6 text-center">
		<label for="ngay_bat_dau">Ngày bắt đầu</label>
		<input type="date" name="ngay_bat_dau" id="ngay_bat_dau" required>
	</div>
	<div class="form-group col-sm-6 text-center">
		<label for="ngay_ket_thuc">Ngày kết thúc</label>
		<input type="date" name="ngay_ket_thuc" id="ngay_ket_thuc" required>
	</div>
	<div class="text-center">
			<button type="submit" class="btn btn-success">Xem</button>
		</div>
</form>
@endsection
@section('js')
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
    	var begin = document.getElementById("ngay_bat_dau").value;
		var end = document.getElementById("ngay_ket_thuc").value;
		$('#ngay_ket_thuc').attr('max', maxDate);
    	$('#ngay_bat_dau').attr('max', maxDate);
    	if(end != ""){
    		$('#ngay_bat_dau').attr('max', end);
    	}
	}	
    document.getElementById("ngay_ket_thuc").onclick = function(){
    	var begin = document.getElementById("ngay_bat_dau").value;
		var end = document.getElementById("ngay_ket_thuc").value;
		$('#ngay_ket_thuc').attr('max', maxDate);
    	$('#ngay_bat_dau').attr('max', maxDate);
    	if(begin != ""){
    		$('#ngay_ket_thuc').attr('min', begin);
    	}
    }
</script>
@endsection