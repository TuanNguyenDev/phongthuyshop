<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Thông tin đơn hàng</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div>
		<h4>Chào {{$customer->name}}, cám ơn đã đặt hàng, đây là thông tin của bạn, chúng tôi sẽ liên hệ trước khi giao hàng</h4>
	</div>
	<table>
		<thead>
			<tr>
				<th>Họ tên</th>
				<th>Email</th>
				<th>Số điện thoại</th>
				<th>Địa chỉ </th>
			</tr>
		</thead>
		<tbody>
				<tr>
					<td>{{$customer->name}}</td>
					<td>{{$customer->email}}</td>
					<td>{{$customer->sdt}}</td>
					<td>{{$customer->dia_chi}}</td>
				</tr>
		</tbody>
	</table>
	<table>
		<thead>
			<tr>
				<th>Tổng tiền thanh toán</th>
				<th>Phương thức thanh toán</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>{{$bill->tien_thanh_toan}}</td>
				<td>{{$bill->phuong_thuc_thanh_toan}}</td>
			</tr>
		</tbody>
	</table>
</body>
</html>