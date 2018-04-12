@extends('layouts.users.main')
@section('title','Cart Infomation')
@section('content')
	<div class="page-container" id="PageContainer">
		<main class="main-content" id="MainContent" role="main">
			<section class="collection-heading heading-content ">
				<div class="container">
					<div class="row">
						<div class="collection-wrapper">
							<h1 class="collection-title"><span>Your Cart</span></h1>
							<div class="breadcrumb-group">
								<div class="breadcrumb clearfix">
									<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="./index.html" title="Bridal 1" itemprop="url"><span itemprop="title">Home</span></a>
									</span>
									<span class="arrow-space">></span>
									<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
										<a href="./cart.html" title="Your Cart" itemprop="url"><span itemprop="title">Your Cart</span></a>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="cart-content">
				<div class="cart-wrapper">
					<div class="container">
						<div class="row">
							<div id="shopify-section-cart-template" class="shopify-section">
								<div class="cart-inner">
									<div id="cart">
										<div class="cart-form">
											<form action="{{-- {{route('updateCart')}} --}}" method="post" id="cartform">
												<input type="hidden" name="_token" value="{{csrf_token()}}">
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
																	<li class="image">
																		<a href="./product.html">
																			<img src="./assets/images/demo_139×160.png" alt="Electronic equipment">
																		</a>
																	</li>
																	<li class="link">
																		<a href="./product.html">
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
																		<input type="text" size="4" name="updates[]" value="{{$value->qty}}" class="tc item-quantity">
																		<input type="hidden" name="rowId" value="{{$value->rowId}}">
																	</div>
																	<!--End wrapper-->
																</div>
																<!--End quantily wrapper-->
															</td>
															<td class="total title-1"><span class="money" data-currency-usd="$200.00">{{($value->qty * $value->price)}}</span></td>
															<td class="remove">
																<a href="{{route('removeCart',$value->rowId)}} class="cart"><i class="fa fa-trash"></i></a>
																<a href="#" class="updateCart" id="{{$value->rowId}}"><i class="fa fa-refresh"></i></a>
															</td>
														</tr>
														@endforeach
													</tbody>
													<tfoot>
														<tr class="summary">
															<td class="total-action" colspan="4">
																<input type="submit" id="update-cart" class="btn btn-success" name="update" value="Update cart">
															</td>
															<td class="price" colspan="1">
																<span class="total"><strong><span class="money" data-currency-usd="$510.00">{{$total}}</span></strong>
																</span>
															</td>
														</tr>
													</tfoot>
												</table>
											</form>
												<div class=" cart-buttons">
													<div class="buttons clearfix">
														<input {{-- type="submit" --}} id="checkout" class="btn" name="checkout" value="Check Out">
													</div>
												</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
	</div>
@endsection
@section('user_js')
<script type="text/javascript">
	$(document).ready(function(){
		$(".updateCart").click(function(){
			var rowID = $(this).attr('id');
			var quantity = $(this).parent().parent().find(".item-quantity").val();
			var token = $("input[name='_token']").val();
			$.ajax({
				url:'updatecart/'+rowID+'/'+quantity,
				type:'POST',
				cache:false,
				data:{"_token":token, "id":rowID,"qty":quantity},
				success:function(data){
					if(data == "ok"){
						window.location = "cart";
					}
					
				}
			});
		});
	});
</script>
@endsection