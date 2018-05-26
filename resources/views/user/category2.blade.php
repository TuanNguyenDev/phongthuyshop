@extends('layouts.users.main')
@section('title','Category')
@section('content')

	<div class="page-container" id="PageContainer">
		<main class="main-content" id="MainContent" role="main">
			<section class="collection-heading heading-content ">
				<a href="./collections-all.html">
					<img class="img_heading" src="./assets/images/demo_1920×348.png" alt="">
				</a>
				<div class="container">
					<div class="row">
						<div class="collection-wrapper">
							<h1 class="collection-title"><span>{{get_cate_name($id_cate)}}</span></h1>
							<div class="breadcrumb-group">
								<div class="breadcrumb clearfix">
									<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="{{route('index')}}" title="Sarahmarket 1" itemprop="url"><span itemprop="title">Home</span></a>
									</span>
									<span class="arrow-space">></span>
									<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
										<a href="#" title="Products" itemprop="url">
											<span itemprop="title">{{get_cate_name($id_cate)}}</span>
										</a>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="collection-content">
				<div class="collection-wrapper">
					<div class="container">
						<div class="row">
							<div id="shopify-section-collection-template" class="shopify-section">
								<div class="collection-inner">
									<!-- Tags loading -->
									<div id="tags-load" style="display:none;"><i class="fa fa-spinner fa-pulse fa-2x"></i></div>
								</div>
								<script type="text/javascript">
									/* Handle Grid - List */
									function handleGridList() {
										if ($('#goList').length) {
											$('#goList').on(clickEv, function(e) {
												$(this).parent().find('li').removeClass('active');
												$(this).addClass('active');
												$('.collection-items').addClass('full_width ListMode');
												$('.collection-items').removeClass('no_full_width GridMode');
												$('.collection-items .row-left').addClass('col-md-5');
												$('.collection-items .row-right').addClass('col-md-7');
												$('.collection-items .product-item').removeClass('col-sm-3 col-sm-4');
												$('.grid-mode').addClass("hide");
												$('.list-mode').removeClass("hide");
											});
										}
										if ($('#goGrid').length) {
											$('#goGrid').on(clickEv, function(e) {
												$(this).parent().find('li').removeClass('active');
												$(this).addClass('active');
												$('.collection-items').removeClass('full_width ListMode');
												$('.collection-items').addClass('no_full_width GridMode');
												$('.collection-items .row-left').removeClass('col-md-5');
												$('.collection-items .row-right').removeClass('col-md-7');

												$('.collection-items .product-item').addClass('col-sm-3');

												$('.grid-mode').removeClass("hide");
												$('.list-mode').addClass("hide");
											});
										}
									}
									$(document).ready(function() {
										if (location.search.search("sort_by=") == -1) {

										} else {
											if (location.search != "") {
												var stpo = location.search.search("sort_by=") + 8,
													sortby_url = '.' + location.search.substr(stpo).split('='),
													sortby_url_a = sortby_url + " a";
												$(sortby_url).addClass("active");
												$('#sortButton .name').html($(sortby_url_a).html());
											} else {
												$('.manual').addClass("active");
											}
										}
										handleGridList();
									});
								</script>
							</div>
						</div>
					</div>
				</div>
			</section>
			<div id="shopify-section-index-collection-product" class="shopify-section index-section index-section-colpro">
				<section class="collection-colpro">
					<div class="collection-colpro-wrapper">
						<div class="container">
							<div class="row">
								<div class="collection-colpro-inner">
									<div class="collection-colpro-content">
										<span class="colpro_title">Có {{count($count)}} sản phẩm trong danh mục này</span>
										<div class="colpro_content colpro_1_index-collection-product">
											@foreach ($product as $key => $p)
												<div class="content_product">
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
																			{{-- <form action="./cart.html" method="post">
																				<div class="effect-ajax-cart">
																					<input type="hidden" name="quantity" value="1">
																					<button class="btn select-option" type="button"><i class="fa fa-bars"></i></button>
																				</div>
																			</form> --}}
																			<ul class="quickview-wishlist-wrapper">
																				{{-- <li class="quickview hidden-xs hidden-sm">
																					<div class="product-ajax-cart">
																						<span class="overlay_mask"></span>
																						<div data-handle="neque-porro-quisquam-est-qui-dolor-ipsum-quia-11" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
																							<a class=""><i class="fa fa-search" title="Quick View"></i></a>
																						</div>
																					</div>
																				</li> --}}
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
															<span class="price_sale"><span class="money" data-currency-usd="$200.00">{{$p->gia}}</span></span>
															</div>
														</div>
													</div>
												</div>
											@endforeach
										</div>
									</div>
									<div class="pager col-md-12">
										{{$product->links()}}
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</main>
	</div>

@endsection