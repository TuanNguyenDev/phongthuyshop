@extends('layouts.users.main')
@section('title','Trang chủ')
@section('content')
<div class="page-container" id="PageContainer">
		<main class="main-content" id="MainContent" role="main">
			<section class="collection-heading heading-content ">
				<div class="container">
					<div class="row">
						<div class="collection-wrapper">
							<h1 class="collection-title"><span>Tìm thấy {{count($result)}} sản phẩm</span></h1>
							<div class="breadcrumb-group">
								<div class="breadcrumb clearfix">
									<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="./index.html" title="Bridal 1" itemprop="url"><span itemprop="title">Home</span></a>
									</span>
									<span class="arrow-space">></span>
									<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
										<a href="./search.html" title="Search for:  'Electronic equipment'" itemprop="url">
											<span itemprop="title">Search for:  "{{$key}}"</span>
										</a>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="search-content">
				<div class="search-content-wrapper">
					<div class="container">
						<div class="row">
							<div class="search-content-group">
								<div class="search-content-inner">
									<div id="search">
										<!-- Begin results -->
										@foreach ($result  as $p)
										<div class="product-item-wrapper col-sm-3">
											<div class="row-container product list-unstyled clearfix">
												<div class="row-left">
													<a href="./product.html" class="hoverBorder container_item">
														<div class="hoverBorderWrapper">
															<img src="{{$p->anh}}" class="not-rotation img-responsive front" alt="Electronic equipment">
															<div class="mask"></div>
															<img src="{{$p->anh}}" class="rotation img-responsive" alt="Electronic equipment">           
														</div>
													</a>
													<div class="hover-mask">
														<div class="group-mask">
															<div class="inner-mask">
																<div class="group-actionbutton">
																	<form action="./product.html" method="post">
																		<div class="effect-ajax-cart">
																			<input type="hidden" name="quantity" value="1">
																			<button class="btn select-option" type="button" onclick="window.location='./product.html';"><i class="fa fa-bars"></i></button>
																		</div>
																	</form>
																	<ul class="quickview-wishlist-wrapper">
																		<li class="quickview hidden-xs hidden-sm">
																			<div class="product-ajax-cart">
																				<span class="overlay_mask"></span>
																				<div data-handle="navy-peak-dresses-2" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
																					<a class=""><i class="fa fa-search" title="Quick View"></i></a>
																				</div>
																			</div>
																		</li>
																		<li class="wishlist hidden-xs">
																			<a class="wish-list" data-toggle="modal" data-target="#modalNeedToWishlist">
																				<span class="hidden-xs"><i class="fa fa-heart" title="Wishlist"></i></span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
															<!--inner-mask-->
														</div>
														<!--Group mask-->
													</div>
												</div>
												<div class="row-right animMix">
													<div class="product-title"><a class="title-5" href="{{route('product',$p->id)}}">{{$p->ten_san_pham}}</a></div>
													<div class="rating-star">
														<span class="spr-badge" data-rating="0.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span><span class="spr-badge-caption">No reviews</span>
														</span>
													</div>
													<div class="product-price">
														<span class="price_sale"><span class="money" data-currency-usd="$110.00">{{$p->gia}}</span></span>
													</div>
												</div>
											</div>
										</div>
										@endforeach
									</div>
									<!-- /#search -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
	</div>
@endsection