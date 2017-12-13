@extends('layouts.users.main')
@section('title','Trang chủ')
@section('content')

	<div id="shopify-section-1490952756465" class="shopify-section index-section index-section-slideshow">
				<div data-section-id="1490952756465" data-section-type="slideshow-section">
					<section class="home_slideshow main-slideshow">
						<div class="home-slideshow-wrapper">
							<div class="container">
								<div class="row">
									<div class="group-home-slideshow">
										<div class="home-slideshow-inner col-sm-8">
											<div class="home-slideshow">
												<div id="home_main-slider" class="carousel slide  main-slider">
													<ol class="carousel-indicators">
														<li data-target="#home_main-slider" data-slide-to="0" class="carousel-1"></li>
														<li data-target="#home_main-slider" data-slide-to="1" class="carousel-2 active"></li>
													</ol>
													<div class="carousel-inner">
														
														<div class="item image active">
															<img src="{{$slide_first->anh}}">
															<div class="slideshow-caption position-right">
																<div class="slide-caption">
																	<div class="group-caption">
																		<div class="content">
																			<span class="title_1">
																				Get computer to become a
																			</span>
																			<span class="title_2">
																				Pro gamer
																			</span>
																			<span class="caption">
																				Aliquam sed arcu a elit porttitor mattis eu id nibh. Vestibulum ultricies nulla sed dapibus vestibulum.
																			</span>
																		</div>
																		<div class="flex-action"><a class="btn" href="./collections-all.html">Shop Now</a></div>
																	</div>
																</div>
															</div>
														</div>
														@foreach ($slides as  $s)
														<div class="item image ">
															<img src="{{$s->anh}}">
															<div class="slideshow-caption position-middle">
																<div class="slide-caption">
																	<div class="group-caption">
																		<div class="content">
																			<span class="title_1">
																				Get computer to become a
																			</span>
																			<span class="title_2">
																				Pro gamer
																			</span>
																			<span class="caption">
																				Aliquam sed arcu a elit porttitor mattis eu id nibh. Vestibulum ultricies nulla sed dapibus vestibulum.
																			</span>
																		</div>
																		<div class="flex-action"><a class="btn" href="./collections-all.html">Shop Now</a></div>
																	</div>
																</div>
															</div>
														</div>
														@endforeach
													</div>
													<a class="left carousel-control" href="#home_main-slider" data-slide="prev">
														<span class="icon-prev"></span>
													</a>
													<a class="right carousel-control" href="#home_main-slider" data-slide="next">
														<span class="icon-next"></span>
													</a>
												</div>
											</div>
										</div>
										<div class="home-banner-inner col-sm-4">
											<div class="banner-content">
												<div class="banner-1">
													<a href="./collections-all.html">
														<img src="{{ asset('images/demo.png') }}" alt="">
													</a>
												</div>
												<div class="banner-2">
													<a href="./collections-all.html">
														<img src="{{ asset('images/demo.png') }}" alt="">
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
			@foreach ($cates as $cate)
<div id="shopify-section-1490952827558" class="shopify-section index-section index-section-prosli">
	<div data-section-id="1490952827558" data-section-type="prosli-section">
		<section class="home_prosli_layout">
			<div class="home_prosli_wrapper">
				<div class="container">
					<div class="row">
						<div class="prosli_group">
							<div class="page-title">
								<h2>{{$cate->ten_danh_muc}}</h2>
								<a href="{{route('category',$cate->id)}}" class="prosli_action">Xem tất cả</a>
							</div>
							<div class="home_prosli_inner">
								<div class="home_prosli_content">
									@foreach ($cate->getProduct(12) as $p)
									<div class="content_product col-sm-2">
										<div class="row-container product list-unstyled clearfix">
											<div class="row-left">
												<a href="./product.html" class="hoverBorder container_item">
													<div class="hoverBorderWrapper">
														<img src="{{$p->anh}}" class="not-rotation img-responsive front" alt="Sport machine">
														<div class="mask"></div>
														<img src="{{$p->anh}}" class="rotation img-responsive" alt="Sport machine">
													</div>
												</a>
												@foreach ($p->getKM() as $km)
												@if ($km->ngay_ket_thuc >= date('d/m/Y'))
												<span class="sale_banner">
													<span class="sale_text">-{{$km->chiet_khau}}</span>
												</span>
												@endif
												@endforeach
												<div class="hover-mask">
													<div class="group-mask">
														<div class="inner-mask">
															<div class="group-actionbutton">
																<form action="./cart.html" method="post">
																	<div class="effect-ajax-cart">
																		<input type="hidden" name="quantity" value="1">
																		<button class="btn select-option" type="button"><i class="fa fa-bars"></i></button>
																	</div>
																</form>
																<ul class="quickview-wishlist-wrapper">
																	<li class="quickview hidden-xs hidden-sm">
																		<div class="product-ajax-cart">
																			<span class="overlay_mask"></span>
																			<div data-handle="neque-porro-quisquam-est-qui-dolor-ipsum-quia-11" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
																				<a class=""><i class="fa fa-search" title="Quick View"></i></a>
																			</div>
																		</div>
																	</li>
																	<li class="wishlist hidden-xs">
																		<a class="wish-list" href="./wish-list.html"><span class="hidden-xs"><i class="fa fa-heart" title="Wishlist"></i></span></a>
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
												<div class="product-title"><a class="title-5" href="{{route('product', $p->id)}}">{{$p->ten_san_pham}}</a></div>
												<div class="rating-star">
													<span class="spr-badge" data-rating="0.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span><span class="spr-badge-caption">No reviews</span>
													</span>
												</div>
												<div class="product-price">
												<span class="price_sale"><span class="money" data-currency-usd="$200.00">{{$p->gia}}</span></span>
												
												{{-- @foreach ($p->getKM() as $km)
												@if ($km->ngay_ket_thuc >= date('d/m/Y'))
													<span class="price_sale"><span class="money" data-currency-usd="$200.00">{{$p->gia * $km->chiet_khau}}</span></span>
													<del class="price_compare"> <span class="money" data-currency-usd="$600.00">{{$p->gia}}</span></del>
												@else
												@endif
												@endforeach --}}

												</div>
											</div>
										</div>
									</div>
									@endforeach
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
@endforeach
@endsection