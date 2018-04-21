@extends('layouts.users.main')
@section('title', 'Bill Detail')
@section('content')

	<div class="page-container" id="PageContainer">
		<main class="main-content" id="MainContent" role="main">
			<section class="collection-heading heading-content ">
				<div class="container">
					<div class="row">
						<div class="collection-wrapper">
							<h1 class="collection-title"><span>My Account</span></h1>
							<div class="breadcrumb-group">
								<div class="breadcrumb clearfix">
									<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
										<a href="./index.html" title="Bridal 1" itemprop="url">
											<span itemprop="title">Home</span>
										</a>
									</span>
									<span class="arrow-space">/</span>
									<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
										<a href="./index.html" title="Logout" itemprop="url">
											<span itemprop="title">Logout</span>
										</a>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="account-content">
				<div class="account-content-wrapper">
					<div class="container">
						<div class="row">
							<div class="account-content-inner">
								<div id="customer-account">
									<div id="customer_orders" class="col-sm-12 col-md-12">
										<table>
											<thead>
												<tr>
													<th class="date">#</th>
													<th class="date">Tên sản phẩm</th>
													<th class="payment_status">Số lượng</th>
													<th class="payment_status">Đơn giá</th>
													<th class="fulfillment_status">Thành tiền</th>
												</tr>
											</thead>
											<tbody>
												@foreach ($bill_detail as $b)
													<tr class="odd ">
														<td class="td-name"><a href="./order.html" title="">{{++$loop->index}}</a></td>
														<td class="td-note"><span class="note">{{get_product_name($b->id_san_pham)}}</span></td>
														<td class="td-authorized"><span class="status_authorized">{{$b->so_luong}}</span></td>
														<td class="td-unfulfilled"><span class="status_unfulfilled">{{get_product_price($b->id_san_pham)}}</span></td>
														<td
														<td class="td-total"><span class="total" style="font-family:'currencies'"><span class="money" data-currency-usd="$292.90">{{$b->thanhtien}}</span></span>
														

													</tr>
												@endforeach
												{{-- <tr class="odd ">
													<td class="td-name"><a href="./order.html" title="">#1001</a></td>
													<td class="td-note"><span class="note">07 Jun 00:14</span></td>
													<td class="td-authorized"><span class="status_authorized">Authorized</span></td>
													<td class="td-unfulfilled"><span class="status_unfulfilled">Unfulfilled</span></td>
													<td class="td-total"><span class="total" style="font-family:'currencies'"><span class="money" data-currency-usd="$292.90">$292.90</span></span>
													</td>
												</tr> --}}
												<tr>
													<td colspan="6" class="text-center"><a href="{{route('customer.profile',['id' => Auth::id()])}}" class="btn btn-success">Trở lại</a></td>
												</tr>
											</tbody>
										</table>

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