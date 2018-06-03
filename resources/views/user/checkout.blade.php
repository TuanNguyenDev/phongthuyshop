@extends('layouts.users.main')
@section('title','Cart Infomation')
@section('content')
<section class="cart-content">
	<div class="cart-wrapper">
		<div class="container">
			<div class="row">
				<div id="shopify-section-cart-template" class="shopify-section">
					<div class="cart-inner">
						<div id="cart">
							<div class="cart-form">
									<table class="cart-items">
										<thead>
											<tr>
												<th class="image text-left">Item</th>
												<th class="price">Price</th>
												<th class="qty">Quantity</th>
												<th class="total">Total</th>
												<th class="remove"></th>
											</tr>
										</thead>
										<tbody>
											@foreach ($cart as $key => $value)
											<tr>
												<td class="title text-left">
													<ul class="list-inline">
														@foreach ($value->options as $k => $element)
															<li class="image">
																<a href="#">
																	<img style="height: 70px" src="{{asset($element)}}" alt="Electronic equipment">
																</a>
															</li>
															@endforeach
														<li class="link">
															<a href="#">
																<p>{{$value->name}}</p>
																{{-- <span class="variant_title">L / red</span> --}}
															</a>
														</li>
													</ul>
												</td>
												<td class="price"><span class="money" data-currency-usd="$200.00">{{$value->price}}</span></td>
												<td class="qty">
													<div class="quantity-wrapper">
														<div class="wrapper">
															<input type="text" disabled="true" size="4" name="updates[]" value="{{$value->qty}}" class="tc item-quantity">
															<input type="hidden" name="rowId" value="{{$value->rowId}}">
														</div>
														<!--End wrapper-->
													</div>
													<!--End quantily wrapper-->
												</td>
												<td class="total title-1"><span class="money" data-currency-usd="$200.00">{{($value->qty * $value->price)}} Đ</span></td>
												{{-- <td class="remove">
													<a href="{{route('removeCart',$value->rowId)}} class="cart"><i class="fa fa-trash"></i></a>
													<a href="#" class="updateCart" id="{{$value->rowId}}"><i class="fa fa-refresh"></i></a>
												</td> --}}
											</tr>
											@endforeach
										</tbody>
										<tfoot>
											<tr class="summary">
												<td class="total-action" colspan="4">
													<span class="">Tổng tiền: </span>
												</td>
												<td class="price" colspan="1">
													<span class="total"><strong><span class="money" data-currency-usd="$510.00">{{$total}} Đ</span></strong>
													</span>
												</td>
											</tr>
										</tfoot>
									</table>
								{{-- <div class=" cart-buttons">
									<div class="buttons clearfix">
										<input type="submit" id="checkout" class="btn" name="checkout" value="Check Out">
									</div>
								</div> --}}
								<div class="col-sm-6">
									@if (isset(Auth::user()->name))
									<form action="{{route('checkout.complete')}}" method="post" accept-charset="utf-8" novalidate="">
										{{csrf_field()}}
										<input type="hidden" name="id" value="{{Auth::id()}}">
										<div class="col-sm-6">
											<div class="form-group">
												<label for="name">Tên khách hàng</label>
												<input type="text" name="name" id="name" value="{{Auth::user()->name}}" disabled="true">
											</div>
											<div class="form-group">
												<label for="dia_chi">Địa chỉ giao hàng</label>
												<input type="text" name="dia_chi" id="dia_chi" value="{{Auth::user()->dia_chi}}">
											</div>
											<div class="form-group">
												<label for="sdt">Số điện thoại</label>
												<input type="number" name="sdt" id="sdt" value="{{Auth::user()->sdt}}">
											</div>
											<div class="form-group">
												<label for="email">Email</label>
												<input type="email" name="email" id="email" value="{{Auth::user()->email}}">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label for="ma_khuyen_mai">Mời nhập mã khuyến mãi</label>
												<input type="text" name="ma_khuyen_mai" id="ma_khuyen_mai" >
											</div>
											<div class="form-group">
												<label for="phuong_thuc_thanh_toan">Phương thức thanh toán</label>
												<select name="phuong_thuc_thanh_toan" >
													<option value="COD">COD</option>
													<option value="ATM">ATM</option>
												</select>
											</div>
											<div class="form-group">
												<p id="COD" class="COD">Cửa hàng sẽ gửi hàng đến địa chỉ của bạn, bạn xem hàng rồi thanh toán tiền cho nhân viên giao hàng.</p>
												<p id="ATM" class="ATM">
													Chuyển tiền đến tài khoản sau:
													<br>- Số tài khoản: 123 456 789
													<br>- Chủ TK: Nguyễn Anh Tuấn
													<br>- Ngân hàng Vietcombank, chi nhánh Hà Nội
												</p>
											</div>
											<div class="form-group">
												<label for="ghi_chu">Ghi chú</label>
												<textarea name="ghi_chu" id="ghi_chu"></textarea> 
											</div>
										</div>
										<div class="text-center">
											<button type="submit" class="btn btn-success">Thanh toán</button>
										</div>
									</form>
								@else
									<form action="{{route('checkout.complete')}}" method="post" accept-charset="utf-8" novalidate="">
										{{csrf_field()}}
										<div class="col-sm-6">
											<div class="form-group">
												<label for="name">Tên khách hàng</label>
												<input type="text" name="name" id="name" >
											</div>
											<div class="form-group">
												<label for="dia_chi">Địa chỉ giao hàng</label>
												<input type="text" name="dia_chi" id="dia_chi" >
											</div>
											<div class="form-group">
												<label for="sdt">Số điện thoại</label>
												<input type="number" name="sdt" id="sdt">
											</div>
											<div class="form-group">
												<label for="email">Email</label>
												<input type="email" name="email" id="email" >
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label for="ma_khuyen_mai">Mời nhập mã khuyến mãi</label>
												<input type="text" name="ma_khuyen_mai" id="ma_khuyen_mai" >
											</div>
											<div class="form-group">
												<label for="phuong_thuc_thanh_toan">Phương thức thanh toán</label>
												<select name="phuong_thuc_thanh_toan" id="phuong_thuc_thanh_toan">
													<option value="COD">COD</option>
													<option value="ATM">ATM</option>
												</select>
											</div>
											<div class="form-group">
												<p id="COD" class="COD" >Cửa hàng sẽ gửi hàng đến địa chỉ của bạn, bạn xem hàng rồi thanh toán tiền cho nhân viên giao hàng.</p>
												<p id="ATM" class="ATM" style="display: none">
													Chuyển tiền đến tài khoản sau:
													<br>- Số tài khoản: 123 456 789
													<br>- Chủ TK: Nguyễn Anh Tuấn
													<br>- Ngân hàng Vietcombank, chi nhánh Hà Nội
												</p>
											</div>
											<div class="form-group">
												<label for="ghi_chu">Ghi chú</label>
												<textarea name="ghi_chu" id="ghi_chu"></textarea> 
											</div>
										</div>
										
										
										<div class="text-center">
											<button type="submit" class="btn btn-success" onclick="return validate()"  >Thanh toán</button>
										</div>
									</form>
								@endif
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
@section('user_js')
<script type="text/javascript">
	document.getElementById("phuong_thuc_thanh_toan").onclick = function(){
		var e = document.getElementById("phuong_thuc_thanh_toan");
		var select = e.options[e.selectedIndex].value;
		if(select == 'COD'){
			document.getElementById("COD").style.display = "block"; 
			document.getElementById("ATM").style.display = "none";
		}
		if(select == 'ATM'){
			document.getElementById("ATM").style.display = "block"; 
			document.getElementById("COD").style.display = "none";
		}
	}
	function validate(){
		var name = document.getElementById("name").value;
		var dia_chi = document.getElementById("dia_chi").value;
		var sdt = document.getElementById("sdt").value;
		var email = document.getElementById("email").value;
		if(name == ""){
			alert("Hãy nhập tên");
			return false;
		}
		if(dia_chi == ""){
			alert("Hãy nhập địa chỉ giao hàng");
			return false;
		}
		if(sdt == ""){
			alert("Hãy nhập số điện thoại");
			return false;
		}
		if(email == ""){
			alert("Hãy nhập email");
			return false;
		}
	}
</script>
@endsection