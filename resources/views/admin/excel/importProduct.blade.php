<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Danh sách Sản Phẩm</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="" method="post" accept-charset="utf-8" enctype="multipart/form-data">
		{{csrf_field()}}
		<input type="file" name="product">
		<input type="submit" name="" value="Import">
	</form>
</body>
</html>