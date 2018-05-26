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
										<div class="home-slideshow-inner col-sm-12">
											<div id="myCarousel" class="carousel slide" data-ride="carousel">
  											<!-- Indicators -->
											  <ol class="carousel-indicators">
											    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
											    <li data-target="#myCarousel" data-slide-to="1"></li>
											    <li data-target="#myCarousel" data-slide-to="2"></li>
											  </ol>

											  <!-- Wrapper for slides -->
											  <div class="carousel-inner">
											    <div class="item active">
											      <img src="{{$slide_first->anh}}" alt="{{$slide_first->alt}}">
											    </div>
											    @foreach ($slides as $s)
											    <div class="item">
											      <img src="{{$s->anh}}" alt="{{$s->alt}}">
											    </div>
											    @endforeach


											    {{-- <div class="item">
											      <img src="https://www.w3schools.com/bootstrap/chicago.jpg" alt="New York">
											    </div> --}}
											  </div>

											  <!-- Left and right controls -->
											  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
											    <span class="glyphicon glyphicon-chevron-left"></span>
											    {{-- <span class="sr-only">Previous</span> --}}
											  </a>
											  <a class="right carousel-control" href="#myCarousel" data-slide="next">
											    <span class="glyphicon glyphicon-chevron-right"></span>
											    {{-- <span class="sr-only">Next</span> --}}
											  </a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
			<!-- Sản phẩm mới -->
			<div id="shopify-section-1490952827558" class="shopify-section index-section index-section-prosli">
				<div data-section-id="1490952827558" data-section-type="prosli-section">
					<section class="home_prosli_layout">
						<div class="home_prosli_wrapper">
							<div class="container">
								<div class="row">
									<div class="prosli_group">
										<div class="page-title">
											<h2>Sản phẩm mới</h2>
										</div>
										<div class="home_prosli_inner">
											<div class="home_prosli_content">
												@foreach ($new_pro as $p)
												<div class="content_product col-sm-2">
													<div class="row-container product list-unstyled clearfix">
														<div class="row-left">
															<a href="{{route('slug.url',['slug'=> $p->getSlug()])}}" class="hoverBorder container_item">
																<div class="hoverBorderWrapper">
																	<img src="{{asset($p->anh)}}" height="230px" class="not-rotation thumbnail front" alt="Sport machine">
																	<div class="mask"></div>
																	<img src="{{asset($p->anh)}}"" height="230px" class="rotation thumbnail" alt="Sport machine">
																</div>
															</a>
															<div class="hover-mask">
																<div class="group-mask">
																	<div class="inner-mask">
																		<div class="group-actionbutton">
																			<ul class="quickview-wishlist-wrapper">
																				<li class="wishlist hidden-xs">
																					
																					<a class="wish-list" href="{{route('addCart',$p->id)}}"><span class="hidden-xs"><i class="fa fa-heart" title="Wishlist"></i></span></a>
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
															
															<div class="product-title"><a class="title-5" href="{{route('slug.url',['slug'=> $p->getSlug()])}}">{{$p->ten_san_pham}}</a></div>
															<div class="rating-star">
																<span class="spr-badge" data-rating="0.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span><span class="spr-badge-caption">No reviews</span>
																</span>
															</div>
															<div class="product-price">
															<span class="price_sale"><span class="money" data-currency-usd="$200.00">{{$p->gia}} đ</span></span>
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
			<!-- end Sản phẩm mới -->
			<!-- Sản phẩm random -->
			<div id="shopify-section-1490952827558" class="shopify-section index-section index-section-prosli">
				<div data-section-id="1490952827558" data-section-type="prosli-section">
					<section class="home_prosli_layout">
						<div class="home_prosli_wrapper">
							<div class="container">
								<div class="row">
									<div class="prosli_group">
										<div class="page-title">
											<h2>Có thể bạn sẽ thích</h2>
										</div>
										<div class="home_prosli_inner">
											<div class="home_prosli_content">
												@foreach ($random as $p)
												<div class="content_product col-sm-2">
													<div class="row-container product list-unstyled clearfix">
														<div class="row-left">
															<a href="{{route('slug.url',['slug'=> $p->getSlug()])}}" class="hoverBorder container_item">
																<div class="hoverBorderWrapper">
																	<img src="{{asset($p->anh)}}" class="not-rotation thumbnail front" height="230px" alt="Sport machine">
																	<div class="mask"></div>
																	<img src="{{asset($p->anh)}}" height="230px" class="rotation thumbnail" alt="Sport machine">
																</div>
															</a>
															<div class="hover-mask">
																<div class="group-mask">
																	<div class="inner-mask">
																		<div class="group-actionbutton">
																			<ul class="quickview-wishlist-wrapper">
																				<li class="wishlist hidden-xs">
																					
																					<a class="wish-list" href="{{route('addCart',$p->id)}}"><span class="hidden-xs"><i class="fa fa-heart" title="Wishlist"></i></span></a>
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
															<div class="product-title"><a class="title-5" href="{{route('slug.url',['slug'=> $p->getSlug()])}}">{{$p->ten_san_pham}}</a></div>
															<div class="rating-star">
																<span class="spr-badge" data-rating="0.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span><span class="spr-badge-caption">No reviews</span>
																</span>
															</div>
															<div class="product-price">
															<span class="price_sale"><span class="money" data-currency-usd="$200.00">{{$p->gia}} đ</span></span>
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
			<!-- end Sản phẩm random -->
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
															<a href="{{route('slug.url',['slug'=> $p->getSlug()])}}" class="hoverBorder container_item">
																<div class="hoverBorderWrapper">
																	<img src="{{asset($p->anh)}}" height="230px" class="not-rotation thumbnail front" alt="Sport machine">
																	<div class="mask"></div>
																	<img src="{{asset($p->anh)}}" height="230px" class="rotation thumbnail" alt="Sport machine">
																</div>
															</a>
															<div class="hover-mask">
																<div class="group-mask">
																	<div class="inner-mask">
																		<div class="group-actionbutton">
																			<ul class="quickview-wishlist-wrapper">
																				<li class="wishlist hidden-xs">
																					
																					<a class="wish-list" href="{{route('addCart',$p->id)}}"><span class="hidden-xs"><i class="fa fa-heart" title="Wishlist"></i></span></a>
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
															<div class="product-title"><a class="title-5" href="{{route('slug.url',['slug'=> $p->getSlug()])}}">{{$p->ten_san_pham}}</a></div>
															<div class="rating-star">
																<span class="spr-badge" data-rating="0.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span><span class="spr-badge-caption">No reviews</span>
																</span>
															</div>
															<div class="product-price">
															<span class="price_sale"><span class="money" data-currency-usd="$200.00">{{$p->gia}} đ</span></span>
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