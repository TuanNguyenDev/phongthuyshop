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
										<h3 class="sb-title">ACCOUNT DETAILS</h3>
										<div class="sb-group">
											<p class="customer-name">Jin Alkaid</p>
											<p class="email note">jin@gmail.com</p>
											<div class="address note">
												<p>Ung Van Khiem</p>
												<p>Ho Chi Minh city, Vietnam</p>
												<p>123</p>
												<p></p>
												<a id="view_address" href="./addresses.html"><i class="fa fa-bookmark-o"></i><span>View Addresses</span></a>
											</div>
										</div>
										<!--End sb-group-account -->
									</div>
									<div id="customer_orders" class="col-sm-9 col-md-9">
										<table>
											<thead>
												<tr>
													<th class="order_number">Order</th>
													<th class="date">Date</th>
													<th class="payment_status">Payment Status</th>
													<th class="fulfillment_status">Fulfillment Status</th>
													<th class="total">Total</th>
												</tr>
											</thead>
											<tbody>
												<tr class="odd ">
													<td class="td-name"><a href="./order.html" title="">#1001</a></td>
													<td class="td-note"><span class="note">07 Jun 00:14</span></td>
													<td class="td-authorized"><span class="status_authorized">Authorized</span></td>
													<td class="td-unfulfilled"><span class="status_unfulfilled">Unfulfilled</span></td>
													<td class="td-total"><span class="total" style="font-family:'currencies'"><span class="money" data-currency-usd="$292.90">$292.90</span></span>
													</td>
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