@extends('layouts.users.main')
@section('title', 'Customer')
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
									<div id="customer_sidebar" class="col-sm-3 col-md-3">
										<h3 class="sb-title">Thông tin tài khoản</h3>
										<div class="sb-group">
											<p class="customer-name">{{$user->name}}</p>
											<p class="email note">{{$user->email}}</p>
											<div class="address note">
												<p>{{$user->dia_chi}}</p>
												<p>{{$user->sdt}}</p>
												<p>Tham gia ngày{{$user->created_at}}</p>
												<a id="view_address" href="{{route('customer.change.profile',['id'=> Auth::user()->id])}}"><i class="fa fa-bookmark-o"></i><span>Sửa thông tin</span></a>
												<a id="view_address" href="{{route('customer.change.pass')}}"><i class="fa fa-bookmark-o"></i><span>Đổi mật khẩu</span></a>
											</div>
										</div>
										<!--End sb-group-account -->
									</div>
									<div id="customer_orders" class="col-sm-9 col-md-9">
										<table>
											<thead>
												<tr>
													<th class="date">#</th>
													<th class="date">Thời gian đặt hàng</th>
													<th class="payment_status">Hình thức thanh toán</th>
													<th class="payment_status">Địa chỉ giao hàng</th>
													<th class="fulfillment_status">Trạng thái đơn hàng</th>
													<th class="total">Tổng tiền</th>
													<th class="total">Chi Tiết</th>
												</tr>
											</thead>
											<tbody>
												@foreach ($bills as $b)
													<tr class="odd ">
														<td class="td-name"><a href="./order.html" title="">{{++$loop->index}}</a></td>
														<td class="td-note"><span class="note">{{$b->created_at}}</span></td>
														<td class="td-authorized"><span class="status_authorized">{{$b->phuong_thuc_thanh_toan}}</span></td>
														<td class="td-unfulfilled"><span class="status_unfulfilled">{{$b->dia_chi}}</span></td>
														<td class="td-unfulfilled"><span class="status_unfulfilled">
															@if ($b->trang_thai == 0)
																Đang chờ xác nhận
															@endif
															@if ($b->trang_thai == 1)
																Đang giao hàng
															@endif
															@if ($b->trang_thai == 2)
																Đã hoàn thành
															@endif
														</span></td>
														<td class="td-total"><span class="total" style="font-family:'currencies'"><span class="money" data-currency-usd="$292.90">{{$b->tien_thanh_toan}}</span></span>
														<td class=""><a href="{{route('customer.bill.detail',['id'=> $b->id])}}" title="Xem chi tiết đơn hàng này" class="btn btn-success">Detail</a>
														</td>

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
													<td colspan="6" class="text-center">{{$bills->links()}}</td>
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