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
							<h1 class="collection-title"><span>Products</span></h1>
							<div class="breadcrumb-group">
								<div class="breadcrumb clearfix">
									<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="./index.html" title="Sarahmarket 1" itemprop="url"><span itemprop="title">Home</span></a>
									</span>
									<span class="arrow-space">></span>
									<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
										<a href="./collections-all.html" title="Products" itemprop="url">
											<span itemprop="title">Products</span>
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
									<div id="collection">
										<div class="collection_inner">
											<div class="collection-leftsidebar sidebar col-sm-3 clearfix">
												<div class="sidebar-block collection-block">
													<div class="sidebar-title">
														<span>Categories</span>
														<i class="fa fa-caret-down show_sidebar_content" aria-hidden="true"></i>
													</div>
													<div class="sidebar-content">
														<ul class="list-cat">
															<li class="active"><a href="./collections-all.html">All Collections </a></li>
															<li><a href="./collections-all.html">Best Sellers </a></li>
															<li><a href="./collections-all.html">Digital </a></li>
															<li><a href="./collections-all.html">Electronic </a></li>
															<li><a href="./collections-all.html">Fashions </a></li>
															<li><a href="./collections-all.html">Furniture </a></li>
															<li><a href="./collections-all.html">Maybe You Prefer </a></li>
															<li><a href="./collections-all.html">New Products </a></li>
															<li><a href="./collections-all.html">Sport </a></li>
															<li><a href="./collections-all.html">Today's Trending </a></li>
														</ul>
													</div>
												</div>
												<div class="sidebar-block filter-block">
													<div class="sidebar-title">
														<span>Shop by</span>
														<i class="fa fa-caret-down show_sidebar_content" aria-hidden="true"></i>
													</div>
													<div id="tags-filter-content" class="sidebar-content">
														<!-- filter tags group -->
														<div class="filter-tag-group">
															<div class="tag-group" id="coll-filter-1">
																<p class="title">
																	<span class="filter-title">Size</span>
																	<span class="show_filter_content">+</span>
																</p>
																<ul class="filter-content">
																	<li><a href="./collections-all.html" title="Narrow selection to products matching tag S"><span class="fe-checkbox"></span> S</a></li>
																	<li><a href="./collections-all.html" title="Narrow selection to products matching tag X"><span class="fe-checkbox"></span> X</a></li>
																	<li><a href="./collections-all.html" title="Narrow selection to products matching tag L"><span class="fe-checkbox"></span> L</a></li>
																	<li><a href="./collections-all.html" title="Narrow selection to products matching tag XL"><span class="fe-checkbox"></span> XL</a></li>
																</ul>
															</div>
															<div class="tag-group" id="coll-filter-2">
																<p class="title">
																	<span class="filter-title">Color</span>
																	<span class="show_filter_content">+</span>
																</p>
																<ul class="filter-content">
																	<li><a href="./collections-all.html" title="Narrow selection to products matching tag Green"><span class="fe-checkbox"></span> Green</a></li>
																	<li><a href="./collections-all.html" title="Narrow selection to products matching tag Black"><span class="fe-checkbox"></span> Black</a></li>
																	<li><a href="./collections-all.html" title="Narrow selection to products matching tag Blue"><span class="fe-checkbox"></span> Blue</a></li>
																	<li><a href="./collections-all.html" title="Narrow selection to products matching tag Red"><span class="fe-checkbox"></span> Red</a></li>
																	<li><a href="./collections-all.html" title="Narrow selection to products matching tag Yellow"><span class="fe-checkbox"></span> Yellow</a></li>
																	<li><a href="./collections-all.html" title="Narrow selection to products matching tag Brown"><span class="fe-checkbox"></span> Brown</a></li>
																	<li><a href="./collections-all.html" title="Narrow selection to products matching tag Silver"><span class="fe-checkbox"></span> Silver</a></li>
																	<li><a href="./collections-all.html" title="Narrow selection to products matching tag Gray"><span class="fe-checkbox"></span> Gray</a></li>
																	<li><a href="./collections-all.html" title="Narrow selection to products matching tag Pink"><span class="fe-checkbox"></span> Pink</a></li>
																	<li><a href="./collections-all.html" title="Narrow selection to products matching tag Orange"><span class="fe-checkbox"></span> Orange</a></li>
																	<li><a href="./collections-all.html" title="Narrow selection to products matching tag Violet"><span class="fe-checkbox"></span> Violet</a></li>
																</ul>
															</div>
															<div class="tag-group" id="coll-filter-3">
																<p class="title">
																	<span class="filter-title">Price</span>
																	<span class="show_filter_content">+</span>
																</p>
																<ul class="filter-content">
																	<li><a href="./collections-all.html" title="Narrow selection to products matching tag Under $100"><span class="fe-checkbox"></span> Under $100</a></li>
																	<li><a href="./collections-all.html" title="Narrow selection to products matching tag $100 - $200"><span class="fe-checkbox"></span> $100 - $200</a></li>
																	<li><a href="./collections-all.html" title="Narrow selection to products matching tag Above $200"><span class="fe-checkbox"></span> Above $200</a></li>
																</ul>
															</div>
														</div>
														<script>
															$(function() {
																$("#coll-filter-1 ul li a, #coll-filter-2 ul li a, #coll-filter-3 ul li a, #coll-filter-4 ul li a").click(function(event) {
																	event.preventDefault();
																	var url = $(this).attr('href');
																	$.ajax({
																		type: 'GET',
																		url: url,
																		data: {},
																		beforeSend: function(xhr) {
																			$("#tags-load").show();
																		},
																		complete: function(data) {
																			$('#collection').html($("#collection", data.responseText).html());
																			history.pushState({
																				page: url
																			}, url, url);
																			$("#tags-load").hide();
																			handleGridList();
																			toggleTagsFilter();
																		}
																	});
																});
															});
														</script>
													</div>
												</div>												
												<div class="sidebar-block blogs-bestseller">
													<h3 class="sidebar-title"><span>Best Seller</span></h3>
													<div class="sidebar-content bestseller-content">
														<div class="bestseller-item-inner">
															<div class="bestseller-item">
																<div class="row-container ">
																	<div class="product home_product">
																		<div class="row-left">
																			<a href="product.html" class="container_item">
																				<div class="hoverBorderWrapper">
																					<img src="./assets/images/demo_96×111.png" class="not-rotation img-responsive front" alt="Digital equipment">
																					<div class="mask"></div>
																					<img src="./assets/images/demo_96×111.png" class="rotation img-responsive" alt="Digital equipment">
																				</div>
																			</a>
																			<span class="sale_banner">
																				<span class="sale_text">-33.33%</span>
																			</span>
																		</div>
																		<div class="row-right">
																			<div class="product-title"><a class="title-5" href="product.html">Women's Accessories</a></div>
																			<div class="rating-star">
																				<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
																				</span>
																			</div>
																			<div class="product-price">
																				<span class="price_sale"><span class="money" data-currency-usd="$200.00">$200.00</span></span>
																				<del class="price_compare"> <span class="money" data-currency-usd="$300.00">$300.00</span></del>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="bestseller-item">
																<div class="row-container ">
																	<div class="product home_product">
																		<div class="row-left">
																			<a href="product.html" class="container_item">
																				<div class="hoverBorderWrapper">
																					<img src="./assets/images/demo_96×111.png" class="not-rotation img-responsive front" alt="Digital equipment">
																					<div class="mask"></div>
																					<img src="./assets/images/demo_96×111.png" class="rotation img-responsive" alt="Digital equipment">
																				</div>
																			</a>
																			<span class="sale_banner">
																				<span class="sale_text">-33.33%</span>
																			</span>
																		</div>
																		<div class="row-right">
																			<div class="product-title"><a class="title-5" href="product.html">Women's Accessories</a></div>
																			<div class="rating-star">
																				<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
																				</span>
																			</div>
																			<div class="product-price">
																				<span class="price_sale"><span class="money" data-currency-usd="$200.00">$200.00</span></span>
																				<del class="price_compare"> <span class="money" data-currency-usd="$300.00">$300.00</span></del>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="bestseller-item">
																<div class="row-container ">
																	<div class="product home_product">
																		<div class="row-left">
																			<a href="product.html" class="container_item">
																				<div class="hoverBorderWrapper">
																					<img src="./assets/images/demo_96×111.png" class="not-rotation img-responsive front" alt="Digital equipment">
																					<div class="mask"></div>
																					<img src="./assets/images/demo_96×111.png" class="rotation img-responsive" alt="Digital equipment">
																				</div>
																			</a>
																			<span class="sale_banner">
																				<span class="sale_text">-33.33%</span>
																			</span>
																		</div>
																		<div class="row-right">
																			<div class="product-title"><a class="title-5" href="product.html">Office furniture</a></div>
																			<div class="rating-star">
																				<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
																				</span>
																			</div>
																			<div class="product-price">
																				<span class="price_sale"><span class="money" data-currency-usd="$200.00">$200.00</span></span>
																				<del class="price_compare"> <span class="money" data-currency-usd="$300.00">$300.00</span></del>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="bestseller-item">
																<div class="row-container ">
																	<div class="product home_product">
																		<div class="row-left">
																			<a href="product.html" class="container_item">
																				<div class="hoverBorderWrapper">
																					<img src="./assets/images/demo_96×111.png" class="not-rotation img-responsive front" alt="Digital equipment">
																					<div class="mask"></div>
																					<img src="./assets/images/demo_96×111.png" class="rotation img-responsive" alt="Digital equipment">
																				</div>
																			</a>
																			<span class="sale_banner">
																				<span class="sale_text">-33.33%</span>
																			</span>
																		</div>
																		<div class="row-right">
																			<div class="product-title"><a class="title-5" href="product.html">Today's trending</a></div>
																			<div class="rating-star">
																				<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
																				</span>
																			</div>
																			<div class="product-price">
																				<span class="price_sale"><span class="money" data-currency-usd="$200.00">$200.00</span></span>
																				<del class="price_compare"> <span class="money" data-currency-usd="$300.00">$300.00</span></del>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>	
												<div class="sidebar-block tags-block">
													<div class="sidebar-title">
														<span>Tags</span>
														<i class="fa fa-caret-down show_sidebar_content" aria-hidden="true"></i>
													</div>
													<div class="sidebar-content">
														<ul class="tags-inner tags">
															<!--vendor-->
															<li class="">
																<a href="./collections-all.html" title="Vendor 1">Vendor 1</a>
															</li>
															<li class="">
																<a href="./collections-all.html" title="Vendor 2">Vendor 2</a>
															</li>
															<li class="">
																<a href="./collections-all.html" title="Vendor 3">Vendor 3</a>
															</li>
															<!--type-->
															<li class="">
																<a href="./collections-all.html" title="Dressing">Dressing</a>
															</li>
															<li class="">
																<a href="./collections-all.html" title="Hoodies Wear">Hoodies Wear</a>
															</li>
															<li class="">
																<a href="./collections-all.html" title="Sweaters Wear">Sweaters Wear</a>
															</li>
														</ul>
													</div>
												</div>

											</div>
											<div class="collection-mainarea col-sm-9 clearfix">
												<div class="collection-service-content">
													<div class="service-content-item">
														<span class="title">
														Great Value
														</span>
														<span class="description">
														Curabitur lacus turpis, pretium at vestibulum ac, gravida et mi.
														</span>
													</div>
													<div class="service-content-item">
														<span class="title">
														Worldwide Delivery
														</span>
														<span class="description">
														Donec imperdiet sed nisi eget blandit. Donec vehicula.
														</span>
													</div>
													<div class="service-content-item">
														<span class="title">
														Safe Payment
														</span>
														<span class="description">
														Maecenas vulputate auctor eleifend. Aenean elementum.
														</span>
													</div>
													<div class="service-content-item">
														<span class="title">
														Confidence
														</span>
														<span class="description">
														In id fermentum sem. Aliquam facilisis nunc urna.
														</span>
													</div>
													<div class="service-content-item">
														<span class="title">
														24/7 Help Center
														</span>
														<span class="description">
														Integer nec velit dapibus, vestibulum lorem id, tincidunt nibh.
														</span>
													</div>
												</div>
												<div class="collection-banner-content clearfix">
													<div class="collection-banner-content-inner">
														<div class="banner-content col-sm-6">
															<div class="banner-content-inner">
																<img class="banner-img" src="./assets/images/demo_168×168.png" alt="">
																<div class="banner-caption">
																	<span class="title">
																	Capture Great Video with a Stabilizer
																	</span>
																	<span class="description">
																	Duis eu orci at orci mollis viverra ut quis diam. Suspendisse malesuada dolor et lacus.
																	</span>
																	<a class="btn" href="./product.html">Details</a>
																</div>
															</div>
														</div>
														<div class="banner-content col-sm-6">
															<div class="banner-content-inner">
																<img class="banner-img" src="./assets/images/demo_168×168.png" alt="">
																<div class="banner-caption">
																	<span class="title">
																	GoPro HERO5 Collection
																	</span>
																	<span class="description">
																	Curabitur suscipit iaculis purus, vitae blandit nisi lobortis sit amet. Praesent est dui, volutpat vel lacus luctus
																	</span>
																	<a class="btn" href="./product.html">Details</a>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="collection_toolbar">
													<div class="toolbar_left">
														Items 1 to 16 of 40 total
													</div>
													<div class="toolbar_right">
														<div class="group_toolbar">
															<!-- View as -->
															<div class="grid_list">
																<span class="toolbar_title">Select View:</span>
																<ul class="list-inline option-set hidden-xs" data-option-key="layoutMode">
																	<li data-option-value="fitRows" id="goGrid" class="active goAction " data-toggle="tooltip" data-placement="top" title="" data-original-title="Grid">
																		<i class="fa fa fa-th"></i>
																	</li>
																	<li data-option-value="straightDown" id="goList" class="goAction " data-toggle="tooltip" data-placement="top" title="" data-original-title="List">
																		<i class="fa fa-th-list"></i>
																	</li>
																</ul>
															</div>
															<!-- Sort by -->
															<div class="sortBy">
																<span class="toolbar_title">Sort By:</span>
																<div id="sortButtonWarper" class="dropdown-toggle" data-toggle="dropdown">
																	<button id="sortButton">
																		<span class="name">Featured</span><i class="fa fa-caret-down"></i>
																	</button>
																	<i class="sub-dropdown1"></i>
																	<i class="sub-dropdown"></i>
																</div>
																<div id="sortBox" class="control-container dropdown-menu">
																	<ul id="sortForm" class="list-unstyled option-set text-left list-styled" data-option-key="sortBy">
																		<li class="sort manual"><a href="./collections-all.html">Featured</a></li>
																		<li class="sort price-ascending"><a href="./collections-all.html">Price, low to high</a></li>
																		<li class="sort price-descending"><a href="./collections-all.html">Price, high to low</a></li>
																		<li class="sort title-ascending"><a href="./collections-all.html">Alphabetically, A-Z</a></li>
																		<li class="sort title-descending"><a href="./collections-all.html">Alphabetically, Z-A</a></li>
																		<li class="sort created-ascending"><a href="./collections-all.html">Date, old to new</a></li>
																		<li class="sort created-descending"><a href="./collections-all.html">Date, new to old</a></li>
																		<li class="sort best-selling"><a href="./collections-all.html">Best Selling</a></li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="collection-items clearfix">
													<div class="products">
														<div class="product-item col-sm-3">
															<div class="product">
																<div class="row-left">
																	<a href="./product.html" class="hoverBorder container_item">
																		<div class="hoverBorderWrapper">
																			<img src="./assets/images/demo_216×250.png" class="not-rotation img-responsive front" alt="Digital equipment">
																			<div class="mask"></div>
																			<img src="./assets/images/demo_216×250.png" class="rotation img-responsive" alt="Digital equipment">
																		</div>
																	</a>
																	<span class="sale_banner">
																		<span class="sale_text">-33.33%</span>
																	</span>
																	<div class="hover-mask grid-mode">
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
																							<div class="product-ajax-cart ">
																								<span class="overlay_mask"></span>
																								<div data-handle="seafood-restaurant" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
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
																	<div class="grid-mode">
																		<div class="product-title"><a class="title-5" href="./product.html">Digital equipment</a></div>
																		<div class="rating-star">
																			<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
																			</span>
																		</div>
																		<div class="product-price">
																			<span class="price_sale"><span class="money" data-currency-usd="$200.00">$200.00</span></span>
																			<del class="price_compare"> <span class="money" data-currency-usd="$300.00">$300.00</span></del>
																		</div>
																	</div>
																	<div class="list-mode hide">
																		<div class="list-left">
																			<div class="product-title"><a class="title-5" href="./product.html">Digital equipment</a></div>
																			<div class="rating-star">
																				<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
																				</span>
																			</div>
																			<div class="product-description">
																				Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis amet voluptas assumenda est, omnis dolor repellendus quis nostrum. Temporibus autem quibusdam et aut officiis debitis aut rerum dolorem necessitatibus saepe eveniet ut et neque porro quisquam est, qui...
																			</div>
																		</div>
																		<div class="list-right">
																			<div class="product-price">
																				<span class="price_sale"><span class="money" data-currency-usd="$200.00">$200.00</span></span>
																				<del class="price_compare"> <span class="money" data-currency-usd="$300.00">$300.00</span></del>
																			</div>
																			<div class="product-group-actions">
																				<form class="product-addtocart" action="./cart.html" method="post">
																					<div class="effect-ajax-cart">
																						<input type="hidden" name="quantity" value="1">
																						<button class="btn btn-1 select-option" type="button"><i class="fa fa-bars"></i></button>
																					</div>
																				</form>
																				<ul class="quickview-wishlist-wrapper">
																					<li class="product-wishlist wishlist">
																						<a class="wish-list" href="./wish-list.html"><span class="hidden-xs"><i class="fa fa-heart" title="Wishlist"></i></span></a>
																					</li>
																					<li class="product-quickview quickview hidden-xs hidden-sm">
																						<div class="product-ajax-cart ">
																							<span class="overlay_mask"></span>
																							<div data-handle="seafood-restaurant" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
																								<a class=""><i class="fa fa-search" title="Quick View"></i></a>
																							</div>
																						</div>
																					</li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="product-item col-sm-3">
															<div class="product">
																<div class="row-left">
																	<a href="./product.html" class="hoverBorder container_item">
																		<div class="hoverBorderWrapper">
																			<img src="./assets/images/demo_216×250.png" class="not-rotation img-responsive front" alt="Digital equipment">
																			<div class="mask"></div>
																			<img src="./assets/images/demo_216×250.png" class="rotation img-responsive" alt="Digital equipment">
																		</div>
																	</a>
																	<div class="hover-mask grid-mode">
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
																							<div class="product-ajax-cart ">
																								<span class="overlay_mask"></span>
																								<div data-handle="seafood-restaurant" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
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
																	<div class="grid-mode">
																		<div class="product-title"><a class="title-5" href="./product.html">Digital equipment</a></div>
																		<div class="rating-star">
																			<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
																			</span>
																		</div>
																		<div class="product-price">
																			<span class="price_sale"><span class="money" data-currency-usd="$200.00">$200.00</span></span>
																		</div>
																	</div>
																	<div class="list-mode hide">
																		<div class="list-left">
																			<div class="product-title"><a class="title-5" href="./product.html">Digital equipment</a></div>
																			<div class="rating-star">
																				<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
																				</span>
																			</div>
																			<div class="product-description">
																				Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis amet voluptas assumenda est, omnis dolor repellendus quis nostrum. Temporibus autem quibusdam et aut officiis debitis aut rerum dolorem necessitatibus saepe eveniet ut et neque porro quisquam est, qui...
																			</div>
																		</div>
																		<div class="list-right">
																			<div class="product-price">
																				<span class="price_sale"><span class="money" data-currency-usd="$200.00">$200.00</span></span>
																				<del class="price_compare"> <span class="money" data-currency-usd="$300.00">$300.00</span></del>
																			</div>
																			<div class="product-group-actions">
																				<form class="product-addtocart" action="./cart.html" method="post">
																					<div class="effect-ajax-cart">
																						<input type="hidden" name="quantity" value="1">
																						<button class="btn btn-1 select-option" type="button"><i class="fa fa-bars"></i></button>
																					</div>
																				</form>
																				<ul class="quickview-wishlist-wrapper">
																					<li class="product-wishlist wishlist">
																						<a class="wish-list" href="./wish-list.html"><span class="hidden-xs"><i class="fa fa-heart" title="Wishlist"></i></span></a>
																					</li>
																					<li class="product-quickview quickview hidden-xs hidden-sm">
																						<div class="product-ajax-cart ">
																							<span class="overlay_mask"></span>
																							<div data-handle="seafood-restaurant" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
																								<a class=""><i class="fa fa-search" title="Quick View"></i></a>
																							</div>
																						</div>
																					</li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="product-item col-sm-3">
															<div class="product">
																<div class="row-left">
																	<a href="./product.html" class="hoverBorder container_item">
																		<div class="hoverBorderWrapper">
																			<img src="./assets/images/demo_216×250.png" class="not-rotation img-responsive front" alt="Digital equipment">
																			<div class="mask"></div>
																			<img src="./assets/images/demo_216×250.png" class="rotation img-responsive" alt="Digital equipment">
																		</div>
																	</a>
																	<div class="hover-mask grid-mode">
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
																							<div class="product-ajax-cart ">
																								<span class="overlay_mask"></span>
																								<div data-handle="seafood-restaurant" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
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
																	<div class="grid-mode">
																		<div class="product-title"><a class="title-5" href="./product.html">Digital equipment</a></div>
																		<div class="rating-star">
																			<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
																			</span>
																		</div>
																		<div class="product-price">
																			<span class="price_sale"><span class="money" data-currency-usd="$200.00">$200.00</span></span>
																		</div>
																	</div>
																	<div class="list-mode hide">
																		<div class="list-left">
																			<div class="product-title"><a class="title-5" href="./product.html">Digital equipment</a></div>
																			<div class="rating-star">
																				<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
																				</span>
																			</div>
																			<div class="product-description">
																				Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis amet voluptas assumenda est, omnis dolor repellendus quis nostrum. Temporibus autem quibusdam et aut officiis debitis aut rerum dolorem necessitatibus saepe eveniet ut et neque porro quisquam est, qui...
																			</div>
																		</div>
																		<div class="list-right">
																			<div class="product-price">
																				<span class="price_sale"><span class="money" data-currency-usd="$200.00">$200.00</span></span>
																			</div>
																			<div class="product-group-actions">
																				<form class="product-addtocart" action="./cart.html" method="post">
																					<div class="effect-ajax-cart">
																						<input type="hidden" name="quantity" value="1">
																						<button class="btn btn-1 select-option" type="button"><i class="fa fa-bars"></i></button>
																					</div>
																				</form>
																				<ul class="quickview-wishlist-wrapper">
																					<li class="product-wishlist wishlist">
																						<a class="wish-list" href="./wish-list.html"><span class="hidden-xs"><i class="fa fa-heart" title="Wishlist"></i></span></a>
																					</li>
																					<li class="product-quickview quickview hidden-xs hidden-sm">
																						<div class="product-ajax-cart ">
																							<span class="overlay_mask"></span>
																							<div data-handle="seafood-restaurant" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
																								<a class=""><i class="fa fa-search" title="Quick View"></i></a>
																							</div>
																						</div>
																					</li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="product-item col-sm-3">
															<div class="product">
																<div class="row-left">
																	<a href="./product.html" class="hoverBorder container_item">
																		<div class="hoverBorderWrapper">
																			<img src="./assets/images/demo_216×250.png" class="not-rotation img-responsive front" alt="Digital equipment">
																			<div class="mask"></div>
																			<img src="./assets/images/demo_216×250.png" class="rotation img-responsive" alt="Digital equipment">
																		</div>
																	</a>
																	<span class="sale_banner">
																		<span class="sale_text">-33.33%</span>
																	</span>
																	<div class="hover-mask grid-mode">
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
																							<div class="product-ajax-cart ">
																								<span class="overlay_mask"></span>
																								<div data-handle="seafood-restaurant" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
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
																	<div class="grid-mode">
																		<div class="product-title"><a class="title-5" href="./product.html">Electronic equipment</a></div>
																		<div class="rating-star">
																			<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
																			</span>
																		</div>
																		<div class="product-price">
																			<span class="price_sale"><span class="money" data-currency-usd="$200.00">$200.00</span></span>
																			<del class="price_compare"> <span class="money" data-currency-usd="$300.00">$300.00</span></del>
																		</div>
																	</div>
																	<div class="list-mode hide">
																		<div class="list-left">
																			<div class="product-title"><a class="title-5" href="./product.html">Electronic equipment</a></div>
																			<div class="rating-star">
																				<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
																				</span>
																			</div>
																			<div class="product-description">
																				Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis amet voluptas assumenda est, omnis dolor repellendus quis nostrum. Temporibus autem quibusdam et aut officiis debitis aut rerum dolorem necessitatibus saepe eveniet ut et neque porro quisquam est, qui...
																			</div>
																		</div>
																		<div class="list-right">
																			<div class="product-price">
																				<span class="price_sale"><span class="money" data-currency-usd="$200.00">$200.00</span></span>
																				<del class="price_compare"> <span class="money" data-currency-usd="$300.00">$300.00</span></del>
																			</div>
																			<div class="product-group-actions">
																				<form class="product-addtocart" action="./cart.html" method="post">
																					<div class="effect-ajax-cart">
																						<input type="hidden" name="quantity" value="1">
																						<button class="btn btn-1 select-option" type="button"><i class="fa fa-bars"></i></button>
																					</div>
																				</form>
																				<ul class="quickview-wishlist-wrapper">
																					<li class="product-wishlist wishlist">
																						<a class="wish-list" href="./wish-list.html"><span class="hidden-xs"><i class="fa fa-heart" title="Wishlist"></i></span></a>
																					</li>
																					<li class="product-quickview quickview hidden-xs hidden-sm">
																						<div class="product-ajax-cart ">
																							<span class="overlay_mask"></span>
																							<div data-handle="seafood-restaurant" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
																								<a class=""><i class="fa fa-search" title="Quick View"></i></a>
																							</div>
																						</div>
																					</li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="product-item col-sm-3">
															<div class="product">
																<div class="row-left">
																	<a href="./product.html" class="hoverBorder container_item">
																		<div class="hoverBorderWrapper">
																			<img src="./assets/images/demo_216×250.png" class="not-rotation img-responsive front" alt="Digital equipment">
																			<div class="mask"></div>
																			<img src="./assets/images/demo_216×250.png" class="rotation img-responsive" alt="Digital equipment">
																		</div>
																	</a>
																	<span class="sale_banner">
																		<span class="sale_text">-33.33%</span>
																	</span>
																	<div class="hover-mask grid-mode">
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
																							<div class="product-ajax-cart ">
																								<span class="overlay_mask"></span>
																								<div data-handle="seafood-restaurant" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
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
																	<div class="grid-mode">
																		<div class="product-title"><a class="title-5" href="./product.html">Electronic equipment</a></div>
																		<div class="rating-star">
																			<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
																			</span>
																		</div>
																		<div class="product-price">
																			<span class="price_sale"><span class="money" data-currency-usd="$200.00">$200.00</span></span>
																			<del class="price_compare"> <span class="money" data-currency-usd="$300.00">$300.00</span></del>
																		</div>
																	</div>
																	<div class="list-mode hide">
																		<div class="list-left">
																			<div class="product-title"><a class="title-5" href="./product.html">Electronic equipment</a></div>
																			<div class="rating-star">
																				<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
																				</span>
																			</div>
																			<div class="product-description">
																				Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis amet voluptas assumenda est, omnis dolor repellendus quis nostrum. Temporibus autem quibusdam et aut officiis debitis aut rerum dolorem necessitatibus saepe eveniet ut et neque porro quisquam est, qui...
																			</div>
																		</div>
																		<div class="list-right">
																			<div class="product-price">
																				<span class="price_sale"><span class="money" data-currency-usd="$200.00">$200.00</span></span>
																				<del class="price_compare"> <span class="money" data-currency-usd="$300.00">$300.00</span></del>
																			</div>
																			<div class="product-group-actions">
																				<form class="product-addtocart" action="./cart.html" method="post">
																					<div class="effect-ajax-cart">
																						<input type="hidden" name="quantity" value="1">
																						<button class="btn btn-1 select-option" type="button"><i class="fa fa-bars"></i></button>
																					</div>
																				</form>
																				<ul class="quickview-wishlist-wrapper">
																					<li class="product-wishlist wishlist">
																						<a class="wish-list" href="./wish-list.html"><span class="hidden-xs"><i class="fa fa-heart" title="Wishlist"></i></span></a>
																					</li>
																					<li class="product-quickview quickview hidden-xs hidden-sm">
																						<div class="product-ajax-cart ">
																							<span class="overlay_mask"></span>
																							<div data-handle="seafood-restaurant" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
																								<a class=""><i class="fa fa-search" title="Quick View"></i></a>
																							</div>
																						</div>
																					</li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="product-item col-sm-3">
															<div class="product">
																<div class="row-left">
																	<a href="./product.html" class="hoverBorder container_item">
																		<div class="hoverBorderWrapper">
																			<img src="./assets/images/demo_216×250.png" class="not-rotation img-responsive front" alt="Digital equipment">
																			<div class="mask"></div>
																			<img src="./assets/images/demo_216×250.png" class="rotation img-responsive" alt="Digital equipment">
																		</div>
																	</a>
																	<div class="hover-mask grid-mode">
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
																							<div class="product-ajax-cart ">
																								<span class="overlay_mask"></span>
																								<div data-handle="seafood-restaurant" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
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
																	<div class="grid-mode">
																		<div class="product-title"><a class="title-5" href="./product.html">Electronic equipment</a></div>
																		<div class="rating-star">
																			<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
																			</span>
																		</div>
																		<div class="product-price">
																			<span class="price_sale"><span class="money" data-currency-usd="$200.00">$200.00</span></span>
																		</div>
																	</div>
																	<div class="list-mode hide">
																		<div class="list-left">
																			<div class="product-title"><a class="title-5" href="./product.html">Electronic equipment</a></div>
																			<div class="rating-star">
																				<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
																				</span>
																			</div>
																			<div class="product-description">
																				Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis amet voluptas assumenda est, omnis dolor repellendus quis nostrum. Temporibus autem quibusdam et aut officiis debitis aut rerum dolorem necessitatibus saepe eveniet ut et neque porro quisquam est, qui...
																			</div>
																		</div>
																		<div class="list-right">
																			<div class="product-price">
																				<span class="price_sale"><span class="money" data-currency-usd="$200.00">$200.00</span></span>
																			</div>
																			<div class="product-group-actions">
																				<form class="product-addtocart" action="./cart.html" method="post">
																					<div class="effect-ajax-cart">
																						<input type="hidden" name="quantity" value="1">
																						<button class="btn btn-1 select-option" type="button"><i class="fa fa-bars"></i></button>
																					</div>
																				</form>
																				<ul class="quickview-wishlist-wrapper">
																					<li class="product-wishlist wishlist">
																						<a class="wish-list" href="./wish-list.html"><span class="hidden-xs"><i class="fa fa-heart" title="Wishlist"></i></span></a>
																					</li>
																					<li class="product-quickview quickview hidden-xs hidden-sm">
																						<div class="product-ajax-cart ">
																							<span class="overlay_mask"></span>
																							<div data-handle="seafood-restaurant" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
																								<a class=""><i class="fa fa-search" title="Quick View"></i></a>
																							</div>
																						</div>
																					</li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="product-item col-sm-3">
															<div class="product">
																<div class="row-left">
																	<a href="./product.html" class="hoverBorder container_item">
																		<div class="hoverBorderWrapper">
																			<img src="./assets/images/demo_216×250.png" class="not-rotation img-responsive front" alt="Digital equipment">
																			<div class="mask"></div>
																			<img src="./assets/images/demo_216×250.png" class="rotation img-responsive" alt="Digital equipment">
																		</div>
																	</a>
																	<div class="hover-mask grid-mode">
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
																							<div class="product-ajax-cart ">
																								<span class="overlay_mask"></span>
																								<div data-handle="seafood-restaurant" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
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
																	<div class="grid-mode">
																		<div class="product-title"><a class="title-5" href="./product.html">Electronic equipment</a></div>
																		<div class="rating-star">
																			<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
																			</span>
																		</div>
																		<div class="product-price">
																			<span class="price_sale"><span class="money" data-currency-usd="$200.00">$200.00</span></span>
																		</div>
																	</div>
																	<div class="list-mode hide">
																		<div class="list-left">
																			<div class="product-title"><a class="title-5" href="./product.html">Electronic equipment</a></div>
																			<div class="rating-star">
																				<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
																				</span>
																			</div>
																			<div class="product-description">
																				Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis amet voluptas assumenda est, omnis dolor repellendus quis nostrum. Temporibus autem quibusdam et aut officiis debitis aut rerum dolorem necessitatibus saepe eveniet ut et neque porro quisquam est, qui...
																			</div>
																		</div>
																		<div class="list-right">
																			<div class="product-price">
																				<span class="price_sale"><span class="money" data-currency-usd="$200.00">$200.00</span></span>
																			</div>
																			<div class="product-group-actions">
																				<form class="product-addtocart" action="./cart.html" method="post">
																					<div class="effect-ajax-cart">
																						<input type="hidden" name="quantity" value="1">
																						<button class="btn btn-1 select-option" type="button"><i class="fa fa-bars"></i></button>
																					</div>
																				</form>
																				<ul class="quickview-wishlist-wrapper">
																					<li class="product-wishlist wishlist">
																						<a class="wish-list" href="./wish-list.html"><span class="hidden-xs"><i class="fa fa-heart" title="Wishlist"></i></span></a>
																					</li>
																					<li class="product-quickview quickview hidden-xs hidden-sm">
																						<div class="product-ajax-cart ">
																							<span class="overlay_mask"></span>
																							<div data-handle="seafood-restaurant" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
																								<a class=""><i class="fa fa-search" title="Quick View"></i></a>
																							</div>
																						</div>
																					</li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="product-item col-sm-3">
															<div class="product">
																<div class="row-left">
																	<a href="./product.html" class="hoverBorder container_item">
																		<div class="hoverBorderWrapper">
																			<img src="./assets/images/demo_216×250.png" class="not-rotation img-responsive front" alt="Digital equipment">
																			<div class="mask"></div>
																			<img src="./assets/images/demo_216×250.png" class="rotation img-responsive" alt="Digital equipment">
																		</div>
																	</a>
																	<span class="sale_banner">
																		<span class="sale_text">-33.33%</span>
																	</span>
																	<div class="hover-mask grid-mode">
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
																							<div class="product-ajax-cart ">
																								<span class="overlay_mask"></span>
																								<div data-handle="seafood-restaurant" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
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
																	<div class="grid-mode">
																		<div class="product-title"><a class="title-5" href="./product.html">Office furniture</a></div>
																		<div class="rating-star">
																			<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
																			</span>
																		</div>
																		<div class="product-price">
																			<span class="price_sale"><span class="money" data-currency-usd="$200.00">$200.00</span></span>
																			<del class="price_compare"> <span class="money" data-currency-usd="$300.00">$300.00</span></del>
																		</div>
																	</div>
																	<div class="list-mode hide">
																		<div class="list-left">
																			<div class="product-title"><a class="title-5" href="./product.html">Office furniture</a></div>
																			<div class="rating-star">
																				<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
																				</span>
																			</div>
																			<div class="product-description">
																				Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis amet voluptas assumenda est, omnis dolor repellendus quis nostrum. Temporibus autem quibusdam et aut officiis debitis aut rerum dolorem necessitatibus saepe eveniet ut et neque porro quisquam est, qui...
																			</div>
																		</div>
																		<div class="list-right">
																			<div class="product-price">
																				<span class="price_sale"><span class="money" data-currency-usd="$200.00">$200.00</span></span>
																				<del class="price_compare"> <span class="money" data-currency-usd="$300.00">$300.00</span></del>
																			</div>
																			<div class="product-group-actions">
																				<form class="product-addtocart" action="./cart.html" method="post">
																					<div class="effect-ajax-cart">
																						<input type="hidden" name="quantity" value="1">
																						<button class="btn btn-1 select-option" type="button"><i class="fa fa-bars"></i></button>
																					</div>
																				</form>
																				<ul class="quickview-wishlist-wrapper">
																					<li class="product-wishlist wishlist">
																						<a class="wish-list" href="./wish-list.html"><span class="hidden-xs"><i class="fa fa-heart" title="Wishlist"></i></span></a>
																					</li>
																					<li class="product-quickview quickview hidden-xs hidden-sm">
																						<div class="product-ajax-cart ">
																							<span class="overlay_mask"></span>
																							<div data-handle="seafood-restaurant" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
																								<a class=""><i class="fa fa-search" title="Quick View"></i></a>
																							</div>
																						</div>
																					</li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="product-item col-sm-3">
															<div class="product">
																<div class="row-left">
																	<a href="./product.html" class="hoverBorder container_item">
																		<div class="hoverBorderWrapper">
																			<img src="./assets/images/demo_216×250.png" class="not-rotation img-responsive front" alt="Digital equipment">
																			<div class="mask"></div>
																			<img src="./assets/images/demo_216×250.png" class="rotation img-responsive" alt="Digital equipment">
																		</div>
																	</a>
																	<div class="hover-mask grid-mode">
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
																							<div class="product-ajax-cart ">
																								<span class="overlay_mask"></span>
																								<div data-handle="seafood-restaurant" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
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
																	<div class="grid-mode">
																		<div class="product-title"><a class="title-5" href="./product.html">Office furniture</a></div>
																		<div class="rating-star">
																			<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
																			</span>
																		</div>
																		<div class="product-price">
																			<span class="price_sale"><span class="money" data-currency-usd="$200.00">$200.00</span></span>
																		</div>
																	</div>
																	<div class="list-mode hide">
																		<div class="list-left">
																			<div class="product-title"><a class="title-5" href="./product.html">Office furniture</a></div>
																			<div class="rating-star">
																				<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
																				</span>
																			</div>
																			<div class="product-description">
																				Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis amet voluptas assumenda est, omnis dolor repellendus quis nostrum. Temporibus autem quibusdam et aut officiis debitis aut rerum dolorem necessitatibus saepe eveniet ut et neque porro quisquam est, qui...
																			</div>
																		</div>
																		<div class="list-right">
																			<div class="product-price">
																				<span class="price_sale"><span class="money" data-currency-usd="$200.00">$200.00</span></span>
																			</div>
																			<div class="product-group-actions">
																				<form class="product-addtocart" action="./cart.html" method="post">
																					<div class="effect-ajax-cart">
																						<input type="hidden" name="quantity" value="1">
																						<button class="btn btn-1 select-option" type="button"><i class="fa fa-bars"></i></button>
																					</div>
																				</form>
																				<ul class="quickview-wishlist-wrapper">
																					<li class="product-wishlist wishlist">
																						<a class="wish-list" href="./wish-list.html"><span class="hidden-xs"><i class="fa fa-heart" title="Wishlist"></i></span></a>
																					</li>
																					<li class="product-quickview quickview hidden-xs hidden-sm">
																						<div class="product-ajax-cart ">
																							<span class="overlay_mask"></span>
																							<div data-handle="seafood-restaurant" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
																								<a class=""><i class="fa fa-search" title="Quick View"></i></a>
																							</div>
																						</div>
																					</li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="product-item col-sm-3">
															<div class="product">
																<div class="row-left">
																	<a href="./product.html" class="hoverBorder container_item">
																		<div class="hoverBorderWrapper">
																			<img src="./assets/images/demo_216×250.png" class="not-rotation img-responsive front" alt="Digital equipment">
																			<div class="mask"></div>
																			<img src="./assets/images/demo_216×250.png" class="rotation img-responsive" alt="Digital equipment">
																		</div>
																	</a>
																	<div class="hover-mask grid-mode">
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
																							<div class="product-ajax-cart ">
																								<span class="overlay_mask"></span>
																								<div data-handle="seafood-restaurant" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
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
																	<div class="grid-mode">
																		<div class="product-title"><a class="title-5" href="./product.html">Office furniture</a></div>
																		<div class="rating-star">
																			<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
																			</span>
																		</div>
																		<div class="product-price">
																			<span class="price_sale"><span class="money" data-currency-usd="$200.00">$200.00</span></span>
																		</div>
																	</div>
																	<div class="list-mode hide">
																		<div class="list-left">
																			<div class="product-title"><a class="title-5" href="./product.html">Office furniture</a></div>
																			<div class="rating-star">
																				<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
																				</span>
																			</div>
																			<div class="product-description">
																				Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis amet voluptas assumenda est, omnis dolor repellendus quis nostrum. Temporibus autem quibusdam et aut officiis debitis aut rerum dolorem necessitatibus saepe eveniet ut et neque porro quisquam est, qui...
																			</div>
																		</div>
																		<div class="list-right">
																			<div class="product-price">
																				<span class="price_sale"><span class="money" data-currency-usd="$200.00">$200.00</span></span>
																			</div>
																			<div class="product-group-actions">
																				<form class="product-addtocart" action="./cart.html" method="post">
																					<div class="effect-ajax-cart">
																						<input type="hidden" name="quantity" value="1">
																						<button class="btn btn-1 select-option" type="button"><i class="fa fa-bars"></i></button>
																					</div>
																				</form>
																				<ul class="quickview-wishlist-wrapper">
																					<li class="product-wishlist wishlist">
																						<a class="wish-list" href="./wish-list.html"><span class="hidden-xs"><i class="fa fa-heart" title="Wishlist"></i></span></a>
																					</li>
																					<li class="product-quickview quickview hidden-xs hidden-sm">
																						<div class="product-ajax-cart ">
																							<span class="overlay_mask"></span>
																							<div data-handle="seafood-restaurant" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
																								<a class=""><i class="fa fa-search" title="Quick View"></i></a>
																							</div>
																						</div>
																					</li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="product-item col-sm-3">
															<div class="product">
																<div class="row-left">
																	<a href="./product.html" class="hoverBorder container_item">
																		<div class="hoverBorderWrapper">
																			<img src="./assets/images/demo_216×250.png" class="not-rotation img-responsive front" alt="Digital equipment">
																			<div class="mask"></div>
																			<img src="./assets/images/demo_216×250.png" class="rotation img-responsive" alt="Digital equipment">
																		</div>
																	</a>
																	<span class="sale_banner">
																		<span class="sale_text">-33.33%</span>
																	</span>
																	<div class="hover-mask grid-mode">
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
																							<div class="product-ajax-cart ">
																								<span class="overlay_mask"></span>
																								<div data-handle="seafood-restaurant" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
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
																	<div class="grid-mode">
																		<div class="product-title"><a class="title-5" href="./product.html">Sport machine</a></div>
																		<div class="rating-star">
																			<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
																			</span>
																		</div>
																		<div class="product-price">
																			<span class="price_sale"><span class="money" data-currency-usd="$200.00">$200.00</span></span>
																			<del class="price_compare"> <span class="money" data-currency-usd="$300.00">$300.00</span></del>
																		</div>
																	</div>
																	<div class="list-mode hide">
																		<div class="list-left">
																			<div class="product-title"><a class="title-5" href="./product.html">Sport machinet</a></div>
																			<div class="rating-star">
																				<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
																				</span>
																			</div>
																			<div class="product-description">
																				Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis amet voluptas assumenda est, omnis dolor repellendus quis nostrum. Temporibus autem quibusdam et aut officiis debitis aut rerum dolorem necessitatibus saepe eveniet ut et neque porro quisquam est, qui...
																			</div>
																		</div>
																		<div class="list-right">
																			<div class="product-price">
																				<span class="price_sale"><span class="money" data-currency-usd="$200.00">$200.00</span></span>
																				<del class="price_compare"> <span class="money" data-currency-usd="$300.00">$300.00</span></del>
																			</div>
																			<div class="product-group-actions">
																				<form class="product-addtocart" action="./cart.html" method="post">
																					<div class="effect-ajax-cart">
																						<input type="hidden" name="quantity" value="1">
																						<button class="btn btn-1 select-option" type="button"><i class="fa fa-bars"></i></button>
																					</div>
																				</form>
																				<ul class="quickview-wishlist-wrapper">
																					<li class="product-wishlist wishlist">
																						<a class="wish-list" href="./wish-list.html"><span class="hidden-xs"><i class="fa fa-heart" title="Wishlist"></i></span></a>
																					</li>
																					<li class="product-quickview quickview hidden-xs hidden-sm">
																						<div class="product-ajax-cart ">
																							<span class="overlay_mask"></span>
																							<div data-handle="seafood-restaurant" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
																								<a class=""><i class="fa fa-search" title="Quick View"></i></a>
																							</div>
																						</div>
																					</li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="product-item col-sm-3">
															<div class="product">
																<div class="row-left">
																	<a href="./product.html" class="hoverBorder container_item">
																		<div class="hoverBorderWrapper">
																			<img src="./assets/images/demo_216×250.png" class="not-rotation img-responsive front" alt="Digital equipment">
																			<div class="mask"></div>
																			<img src="./assets/images/demo_216×250.png" class="rotation img-responsive" alt="Digital equipment">
																		</div>
																	</a>
																	<span class="sale_banner">
																		<span class="sale_text">-33.33%</span>
																	</span>
																	<div class="hover-mask grid-mode">
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
																							<div class="product-ajax-cart ">
																								<span class="overlay_mask"></span>
																								<div data-handle="seafood-restaurant" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
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
																	<div class="grid-mode">
																		<div class="product-title"><a class="title-5" href="./product.html">Sport machine</a></div>
																		<div class="rating-star">
																			<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
																			</span>
																		</div>
																		<div class="product-price">
																			<span class="price_sale"><span class="money" data-currency-usd="$200.00">$200.00</span></span>
																			<del class="price_compare"> <span class="money" data-currency-usd="$300.00">$300.00</span></del>
																		</div>
																	</div>
																	<div class="list-mode hide">
																		<div class="list-left">
																			<div class="product-title"><a class="title-5" href="./product.html">Sport machinet</a></div>
																			<div class="rating-star">
																				<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
																				</span>
																			</div>
																			<div class="product-description">
																				Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis amet voluptas assumenda est, omnis dolor repellendus quis nostrum. Temporibus autem quibusdam et aut officiis debitis aut rerum dolorem necessitatibus saepe eveniet ut et neque porro quisquam est, qui...
																			</div>
																		</div>
																		<div class="list-right">
																			<div class="product-price">
																				<span class="price_sale"><span class="money" data-currency-usd="$200.00">$200.00</span></span>
																				<del class="price_compare"> <span class="money" data-currency-usd="$300.00">$300.00</span></del>
																			</div>
																			<div class="product-group-actions">
																				<form class="product-addtocart" action="./cart.html" method="post">
																					<div class="effect-ajax-cart">
																						<input type="hidden" name="quantity" value="1">
																						<button class="btn btn-1 select-option" type="button"><i class="fa fa-bars"></i></button>
																					</div>
																				</form>
																				<ul class="quickview-wishlist-wrapper">
																					<li class="product-wishlist wishlist">
																						<a class="wish-list" href="./wish-list.html"><span class="hidden-xs"><i class="fa fa-heart" title="Wishlist"></i></span></a>
																					</li>
																					<li class="product-quickview quickview hidden-xs hidden-sm">
																						<div class="product-ajax-cart ">
																							<span class="overlay_mask"></span>
																							<div data-handle="seafood-restaurant" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
																								<a class=""><i class="fa fa-search" title="Quick View"></i></a>
																							</div>
																						</div>
																					</li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="product-item col-sm-3">
															<div class="product">
																<div class="row-left">
																	<a href="./product.html" class="hoverBorder container_item">
																		<div class="hoverBorderWrapper">
																			<img src="./assets/images/demo_216×250.png" class="not-rotation img-responsive front" alt="Digital equipment">
																			<div class="mask"></div>
																			<img src="./assets/images/demo_216×250.png" class="rotation img-responsive" alt="Digital equipment">
																		</div>
																	</a>
																	<div class="hover-mask grid-mode">
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
																							<div class="product-ajax-cart ">
																								<span class="overlay_mask"></span>
																								<div data-handle="seafood-restaurant" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
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
																	<div class="grid-mode">
																		<div class="product-title"><a class="title-5" href="./product.html">Sport machine</a></div>
																		<div class="rating-star">
																			<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
																			</span>
																		</div>
																		<div class="product-price">
																			<span class="price_sale"><span class="money" data-currency-usd="$200.00">$200.00</span></span>
																		</div>
																	</div>
																	<div class="list-mode hide">
																		<div class="list-left">
																			<div class="product-title"><a class="title-5" href="./product.html">Sport machinet</a></div>
																			<div class="rating-star">
																				<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
																				</span>
																			</div>
																			<div class="product-description">
																				Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis amet voluptas assumenda est, omnis dolor repellendus quis nostrum. Temporibus autem quibusdam et aut officiis debitis aut rerum dolorem necessitatibus saepe eveniet ut et neque porro quisquam est, qui...
																			</div>
																		</div>
																		<div class="list-right">
																			<div class="product-price">
																				<span class="price_sale"><span class="money" data-currency-usd="$200.00">$200.00</span></span>
																			</div>
																			<div class="product-group-actions">
																				<form class="product-addtocart" action="./cart.html" method="post">
																					<div class="effect-ajax-cart">
																						<input type="hidden" name="quantity" value="1">
																						<button class="btn btn-1 select-option" type="button"><i class="fa fa-bars"></i></button>
																					</div>
																				</form>
																				<ul class="quickview-wishlist-wrapper">
																					<li class="product-wishlist wishlist">
																						<a class="wish-list" href="./wish-list.html"><span class="hidden-xs"><i class="fa fa-heart" title="Wishlist"></i></span></a>
																					</li>
																					<li class="product-quickview quickview hidden-xs hidden-sm">
																						<div class="product-ajax-cart ">
																							<span class="overlay_mask"></span>
																							<div data-handle="seafood-restaurant" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
																								<a class=""><i class="fa fa-search" title="Quick View"></i></a>
																							</div>
																						</div>
																					</li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="product-item col-sm-3">
															<div class="product">
																<div class="row-left">
																	<a href="./product.html" class="hoverBorder container_item">
																		<div class="hoverBorderWrapper">
																			<img src="./assets/images/demo_216×250.png" class="not-rotation img-responsive front" alt="Digital equipment">
																			<div class="mask"></div>
																			<img src="./assets/images/demo_216×250.png" class="rotation img-responsive" alt="Digital equipment">
																		</div>
																	</a>
																	<div class="hover-mask grid-mode">
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
																							<div class="product-ajax-cart ">
																								<span class="overlay_mask"></span>
																								<div data-handle="seafood-restaurant" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
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
																	<div class="grid-mode">
																		<div class="product-title"><a class="title-5" href="./product.html">Sport machine</a></div>
																		<div class="rating-star">
																			<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
																			</span>
																		</div>
																		<div class="product-price">
																			<span class="price_sale"><span class="money" data-currency-usd="$200.00">$200.00</span></span>
																		</div>
																	</div>
																	<div class="list-mode hide">
																		<div class="list-left">
																			<div class="product-title"><a class="title-5" href="./product.html">Sport machinet</a></div>
																			<div class="rating-star">
																				<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
																				</span>
																			</div>
																			<div class="product-description">
																				Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis amet voluptas assumenda est, omnis dolor repellendus quis nostrum. Temporibus autem quibusdam et aut officiis debitis aut rerum dolorem necessitatibus saepe eveniet ut et neque porro quisquam est, qui...
																			</div>
																		</div>
																		<div class="list-right">
																			<div class="product-price">
																				<span class="price_sale"><span class="money" data-currency-usd="$200.00">$200.00</span></span>
																			</div>
																			<div class="product-group-actions">
																				<form class="product-addtocart" action="./cart.html" method="post">
																					<div class="effect-ajax-cart">
																						<input type="hidden" name="quantity" value="1">
																						<button class="btn btn-1 select-option" type="button"><i class="fa fa-bars"></i></button>
																					</div>
																				</form>
																				<ul class="quickview-wishlist-wrapper">
																					<li class="product-wishlist wishlist">
																						<a class="wish-list" href="./wish-list.html"><span class="hidden-xs"><i class="fa fa-heart" title="Wishlist"></i></span></a>
																					</li>
																					<li class="product-quickview quickview hidden-xs hidden-sm">
																						<div class="product-ajax-cart ">
																							<span class="overlay_mask"></span>
																							<div data-handle="seafood-restaurant" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
																								<a class=""><i class="fa fa-search" title="Quick View"></i></a>
																							</div>
																						</div>
																					</li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="product-item col-sm-3">
															<div class="product">
																<div class="row-left">
																	<a href="./product.html" class="hoverBorder container_item">
																		<div class="hoverBorderWrapper">
																			<img src="./assets/images/demo_216×250.png" class="not-rotation img-responsive front" alt="Digital equipment">
																			<div class="mask"></div>
																			<img src="./assets/images/demo_216×250.png" class="rotation img-responsive" alt="Digital equipment">
																		</div>
																	</a>
																	<div class="hover-mask grid-mode">
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
																							<div class="product-ajax-cart ">
																								<span class="overlay_mask"></span>
																								<div data-handle="seafood-restaurant" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
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
																	<div class="grid-mode">
																		<div class="product-title"><a class="title-5" href="./product.html">Today's trending</a></div>
																		<div class="rating-star">
																			<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
																			</span>
																		</div>
																		<div class="product-price">
																			<span class="price_sale"><span class="money" data-currency-usd="$200.00">$200.00</span></span>
																		</div>
																	</div>
																	<div class="list-mode hide">
																		<div class="list-left">
																			<div class="product-title"><a class="title-5" href="./product.html">Today's trending</a></div>
																			<div class="rating-star">
																				<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
																				</span>
																			</div>
																			<div class="product-description">
																				Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis amet voluptas assumenda est, omnis dolor repellendus quis nostrum. Temporibus autem quibusdam et aut officiis debitis aut rerum dolorem necessitatibus saepe eveniet ut et neque porro quisquam est, qui...
																			</div>
																		</div>
																		<div class="list-right">
																			<div class="product-price">
																				<span class="price_sale"><span class="money" data-currency-usd="$200.00">$200.00</span></span>
																			</div>
																			<div class="product-group-actions">
																				<form class="product-addtocart" action="./cart.html" method="post">
																					<div class="effect-ajax-cart">
																						<input type="hidden" name="quantity" value="1">
																						<button class="btn btn-1 select-option" type="button"><i class="fa fa-bars"></i></button>
																					</div>
																				</form>
																				<ul class="quickview-wishlist-wrapper">
																					<li class="product-wishlist wishlist">
																						<a class="wish-list" href="./wish-list.html"><span class="hidden-xs"><i class="fa fa-heart" title="Wishlist"></i></span></a>
																					</li>
																					<li class="product-quickview quickview hidden-xs hidden-sm">
																						<div class="product-ajax-cart ">
																							<span class="overlay_mask"></span>
																							<div data-handle="seafood-restaurant" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
																								<a class=""><i class="fa fa-search" title="Quick View"></i></a>
																							</div>
																						</div>
																					</li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="product-item col-sm-3">
															<div class="product">
																<div class="row-left">
																	<a href="./product.html" class="hoverBorder container_item">
																		<div class="hoverBorderWrapper">
																			<img src="./assets/images/demo_216×250.png" class="not-rotation img-responsive front" alt="Digital equipment">
																			<div class="mask"></div>
																			<img src="./assets/images/demo_216×250.png" class="rotation img-responsive" alt="Digital equipment">
																		</div>
																	</a>
																	<div class="hover-mask grid-mode">
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
																							<div class="product-ajax-cart ">
																								<span class="overlay_mask"></span>
																								<div data-handle="seafood-restaurant" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
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
																	<div class="grid-mode">
																		<div class="product-title"><a class="title-5" href="./product.html">Today's trending</a></div>
																		<div class="rating-star">
																			<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
																			</span>
																		</div>
																		<div class="product-price">
																			<span class="price_sale"><span class="money" data-currency-usd="$200.00">$200.00</span></span>
																		</div>
																	</div>
																	<div class="list-mode hide">
																		<div class="list-left">
																			<div class="product-title"><a class="title-5" href="./product.html">Today's trending</a></div>
																			<div class="rating-star">
																				<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
																				</span>
																			</div>
																			<div class="product-description">
																				Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis amet voluptas assumenda est, omnis dolor repellendus quis nostrum. Temporibus autem quibusdam et aut officiis debitis aut rerum dolorem necessitatibus saepe eveniet ut et neque porro quisquam est, qui...
																			</div>
																		</div>
																		<div class="list-right">
																			<div class="product-price">
																				<span class="price_sale"><span class="money" data-currency-usd="$200.00">$200.00</span></span>
																			</div>
																			<div class="product-group-actions">
																				<form class="product-addtocart" action="./cart.html" method="post">
																					<div class="effect-ajax-cart">
																						<input type="hidden" name="quantity" value="1">
																						<button class="btn btn-1 select-option" type="button"><i class="fa fa-bars"></i></button>
																					</div>
																				</form>
																				<ul class="quickview-wishlist-wrapper">
																					<li class="product-wishlist wishlist">
																						<a class="wish-list" href="./wish-list.html"><span class="hidden-xs"><i class="fa fa-heart" title="Wishlist"></i></span></a>
																					</li>
																					<li class="product-quickview quickview hidden-xs hidden-sm">
																						<div class="product-ajax-cart ">
																							<span class="overlay_mask"></span>
																							<div data-handle="seafood-restaurant" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
																								<a class=""><i class="fa fa-search" title="Quick View"></i></a>
																							</div>
																						</div>
																					</li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="collection-bottom-toolbar">
													<div class="product-counter col-sm-6">
														Items 1 to 16 of 40 total
													</div>
													<div class="product-pagination col-sm-6">
														<div class="pagination_group">
															<ul class="pagination">
																<li class="prev"><a href="./collections-all.html">Prev</a></li>
																<li class="active"><a href="./collections-all.html">1</a></li>
																<li><a href="./collections-all.html">2</a></li>
																<li><a href="./collections-all.html">3</a></li>
																<li class="next"><a href="./collections-all.html">Next</a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
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
										<span class="colpro_title">Recommended Based on Recent Browsing</span>
										<div class="colpro_content colpro_1_index-collection-product">
											<div class="content_product">
												<div class="row-container product list-unstyled clearfix">
													<div class="row-left">
														<a href="./product.html" class="hoverBorder container_item">
															<div class="hoverBorderWrapper">
																<img src="./assets/images/demo_194×224.png" class="not-rotation img-responsive front" alt="Women's Accessories">
																<div class="mask"></div>
																<img src="./assets/images/demo_194×224.png" class="rotation img-responsive" alt="Women's Accessories">
															</div>
														</a>
														<div class="hover-mask">
															<div class="group-mask">
																<div class="inner-mask">
																	<div class="group-actionbutton">
																		<form action="./cart.html" method="post">
																			<div class="effect-ajax-cart">
																				<input type="hidden" name="quantity" value="1">
																				<button class="btn add-to-cart" data-parent=".parent-fly" type="submit" name="add"><i class="fa fa-shopping-bag"></i></button>
																			</div>
																		</form>
																		<ul class="quickview-wishlist-wrapper">
																			<li class="quickview hidden-xs hidden-sm">
																				<div class="product-ajax-cart">
																					<span class="overlay_mask"></span>
																					<div data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
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
														<div class="product-title"><a class="title-5" href="./product.html">Women's Accessories</a></div>
														<div class="rating-star">
															<span class="spr-badge" data-rating="0.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span><span class="spr-badge-caption">No reviews</span>
															</span>
														</div>
														<div class="product-price">
															<span class="price">
																<span class="money" data-currency-usd="$200.00" data-currency="USD">$200.00</span>
															</span>
														</div>
													</div>
												</div>
											</div>
											<div class="content_product">
												<div class="row-container product list-unstyled clearfix">
													<div class="row-left">
														<a href="./product.html" class="hoverBorder container_item">
															<div class="hoverBorderWrapper">
																<img src="./assets/images/demo_194×224.png" class="not-rotation img-responsive front" alt="Women's Accessories">
																<div class="mask"></div>
																<img src="./assets/images/demo_194×224.png" class="rotation img-responsive" alt="Women's Accessories">
															</div>
														</a>
														<div class="hover-mask">
															<div class="group-mask">
																<div class="inner-mask">
																	<div class="group-actionbutton">
																		<form action="./cart.html" method="post">
																			<div class="effect-ajax-cart">
																				<input type="hidden" name="quantity" value="1">
																				<button class="btn add-to-cart" data-parent=".parent-fly" type="submit" name="add"><i class="fa fa-shopping-bag"></i></button>
																			</div>
																		</form>
																		<ul class="quickview-wishlist-wrapper">
																			<li class="quickview hidden-xs hidden-sm">
																				<div class="product-ajax-cart">
																					<span class="overlay_mask"></span>
																					<div data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
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
														<div class="product-title"><a class="title-5" href="./product.html">Women's Accessories</a></div>
														<div class="rating-star">
															<span class="spr-badge" data-rating="0.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span><span class="spr-badge-caption">No reviews</span>
															</span>
														</div>
														<div class="product-price">
															<span class="price">
																<span class="money" data-currency-usd="$200.00" data-currency="USD">$200.00</span>
															</span>
														</div>
													</div>
												</div>
											</div>
											<div class="content_product">
												<div class="row-container product list-unstyled clearfix">
													<div class="row-left">
														<a href="./product.html" class="hoverBorder container_item">
															<div class="hoverBorderWrapper">
																<img src="./assets/images/demo_194×224.png" class="not-rotation img-responsive front" alt="Women's Accessories">
																<div class="mask"></div>
																<img src="./assets/images/demo_194×224.png" class="rotation img-responsive" alt="Women's Accessories">
															</div>
														</a>
														<div class="hover-mask">
															<div class="group-mask">
																<div class="inner-mask">
																	<div class="group-actionbutton">
																		<form action="./cart.html" method="post">
																			<div class="effect-ajax-cart">
																				<input type="hidden" name="quantity" value="1">
																				<button class="btn add-to-cart" data-parent=".parent-fly" type="submit" name="add"><i class="fa fa-shopping-bag"></i></button>
																			</div>
																		</form>
																		<ul class="quickview-wishlist-wrapper">
																			<li class="quickview hidden-xs hidden-sm">
																				<div class="product-ajax-cart">
																					<span class="overlay_mask"></span>
																					<div data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
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
														<div class="product-title"><a class="title-5" href="./product.html">Women's Accessories</a></div>
														<div class="rating-star">
															<span class="spr-badge" data-rating="0.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span><span class="spr-badge-caption">No reviews</span>
															</span>
														</div>
														<div class="product-price">
															<span class="price">
																<span class="money" data-currency-usd="$200.00" data-currency="USD">$200.00</span>
															</span>
														</div>
													</div>
												</div>
											</div>
											<div class="content_product">
												<div class="row-container product list-unstyled clearfix">
													<div class="row-left">
														<a href="./product.html" class="hoverBorder container_item">
															<div class="hoverBorderWrapper">
																<img src="./assets/images/demo_194×224.png" class="not-rotation img-responsive front" alt="Women's Accessories">
																<div class="mask"></div>
																<img src="./assets/images/demo_194×224.png" class="rotation img-responsive" alt="Women's Accessories">
															</div>
														</a>
														<div class="hover-mask">
															<div class="group-mask">
																<div class="inner-mask">
																	<div class="group-actionbutton">
																		<form action="./cart.html" method="post">
																			<div class="effect-ajax-cart">
																				<input type="hidden" name="quantity" value="1">
																				<button class="btn add-to-cart" data-parent=".parent-fly" type="submit" name="add"><i class="fa fa-shopping-bag"></i></button>
																			</div>
																		</form>
																		<ul class="quickview-wishlist-wrapper">
																			<li class="quickview hidden-xs hidden-sm">
																				<div class="product-ajax-cart">
																					<span class="overlay_mask"></span>
																					<div data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
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
														<div class="product-title"><a class="title-5" href="./product.html">Office furniture</a></div>
														<div class="rating-star">
															<span class="spr-badge" data-rating="0.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span><span class="spr-badge-caption">No reviews</span>
															</span>
														</div>
														<div class="product-price">
															<span class="price">
																<span class="money" data-currency-usd="$200.00" data-currency="USD">$200.00</span>
															</span>
														</div>
													</div>
												</div>
											</div>
											<div class="content_product">
												<div class="row-container product list-unstyled clearfix">
													<div class="row-left">
														<a href="./product.html" class="hoverBorder container_item">
															<div class="hoverBorderWrapper">
																<img src="./assets/images/demo_194×224.png" class="not-rotation img-responsive front" alt="Women's Accessories">
																<div class="mask"></div>
																<img src="./assets/images/demo_194×224.png" class="rotation img-responsive" alt="Women's Accessories">
															</div>
														</a>
														<div class="hover-mask">
															<div class="group-mask">
																<div class="inner-mask">
																	<div class="group-actionbutton">
																		<form action="./cart.html" method="post">
																			<div class="effect-ajax-cart">
																				<input type="hidden" name="quantity" value="1">
																				<button class="btn add-to-cart" data-parent=".parent-fly" type="submit" name="add"><i class="fa fa-shopping-bag"></i></button>
																			</div>
																		</form>
																		<ul class="quickview-wishlist-wrapper">
																			<li class="quickview hidden-xs hidden-sm">
																				<div class="product-ajax-cart">
																					<span class="overlay_mask"></span>
																					<div data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
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
														<div class="product-title"><a class="title-5" href="./product.html">Office furniture</a></div>
														<div class="rating-star">
															<span class="spr-badge" data-rating="0.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span><span class="spr-badge-caption">No reviews</span>
															</span>
														</div>
														<div class="product-price">
															<span class="price">
																<span class="money" data-currency-usd="$200.00" data-currency="USD">$200.00</span>
															</span>
														</div>
													</div>
												</div>
											</div>
											<div class="content_product">
												<div class="row-container product list-unstyled clearfix">
													<div class="row-left">
														<a href="./product.html" class="hoverBorder container_item">
															<div class="hoverBorderWrapper">
																<img src="./assets/images/demo_194×224.png" class="not-rotation img-responsive front" alt="Women's Accessories">
																<div class="mask"></div>
																<img src="./assets/images/demo_194×224.png" class="rotation img-responsive" alt="Women's Accessories">
															</div>
														</a>
														<div class="hover-mask">
															<div class="group-mask">
																<div class="inner-mask">
																	<div class="group-actionbutton">
																		<form action="./cart.html" method="post">
																			<div class="effect-ajax-cart">
																				<input type="hidden" name="quantity" value="1">
																				<button class="btn add-to-cart" data-parent=".parent-fly" type="submit" name="add"><i class="fa fa-shopping-bag"></i></button>
																			</div>
																		</form>
																		<ul class="quickview-wishlist-wrapper">
																			<li class="quickview hidden-xs hidden-sm">
																				<div class="product-ajax-cart">
																					<span class="overlay_mask"></span>
																					<div data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
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
														<div class="product-title"><a class="title-5" href="./product.html">Office furniture</a></div>
														<div class="rating-star">
															<span class="spr-badge" data-rating="0.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span><span class="spr-badge-caption">No reviews</span>
															</span>
														</div>
														<div class="product-price">
															<span class="price">
																<span class="money" data-currency-usd="$200.00" data-currency="USD">$200.00</span>
															</span>
														</div>
													</div>
												</div>
											</div>
											<div class="content_product">
												<div class="row-container product list-unstyled clearfix">
													<div class="row-left">
														<a href="./product.html" class="hoverBorder container_item">
															<div class="hoverBorderWrapper">
																<img src="./assets/images/demo_194×224.png" class="not-rotation img-responsive front" alt="Women's Accessories">
																<div class="mask"></div>
																<img src="./assets/images/demo_194×224.png" class="rotation img-responsive" alt="Women's Accessories">
															</div>
														</a>
														<div class="hover-mask">
															<div class="group-mask">
																<div class="inner-mask">
																	<div class="group-actionbutton">
																		<form action="./cart.html" method="post">
																			<div class="effect-ajax-cart">
																				<input type="hidden" name="quantity" value="1">
																				<button class="btn add-to-cart" data-parent=".parent-fly" type="submit" name="add"><i class="fa fa-shopping-bag"></i></button>
																			</div>
																		</form>
																		<ul class="quickview-wishlist-wrapper">
																			<li class="quickview hidden-xs hidden-sm">
																				<div class="product-ajax-cart">
																					<span class="overlay_mask"></span>
																					<div data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
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
														<div class="product-title"><a class="title-5" href="./product.html">Office furniture</a></div>
														<div class="rating-star">
															<span class="spr-badge" data-rating="0.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span><span class="spr-badge-caption">No reviews</span>
															</span>
														</div>
														<div class="product-price">
															<span class="price">
																<span class="money" data-currency-usd="$200.00" data-currency="USD">$200.00</span>
															</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="collection-colpro-content">
										<span class="colpro_title">Most-Viewed Mixers & Mixers Accessories</span>
										<div class="colpro_content colpro_1_index-collection-product">
											<div class="content_product">
												<div class="row-container product list-unstyled clearfix">
													<div class="row-left">
														<a href="./product.html" class="hoverBorder container_item">
															<div class="hoverBorderWrapper">
																<img src="./assets/images/demo_194×224.png" class="not-rotation img-responsive front" alt="Women's Accessories">
																<div class="mask"></div>
																<img src="./assets/images/demo_194×224.png" class="rotation img-responsive" alt="Women's Accessories">
															</div>
														</a>
														<span class="sale_banner">
															<span class="sale_text">-66.67%</span>
														</span>
														<div class="hover-mask">
															<div class="group-mask">
																<div class="inner-mask">
																	<div class="group-actionbutton">
																		<form action="./cart.html" method="post">
																			<div class="effect-ajax-cart">
																				<input type="hidden" name="quantity" value="1">
																				<button class="btn add-to-cart" data-parent=".parent-fly" type="submit" name="add"><i class="fa fa-shopping-bag"></i></button>
																			</div>
																		</form>
																		<ul class="quickview-wishlist-wrapper">
																			<li class="quickview hidden-xs hidden-sm">
																				<div class="product-ajax-cart">
																					<span class="overlay_mask"></span>
																					<div data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
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
														<div class="product-title"><a class="title-5" href="./product.html">Digital equipment</a></div>
														<div class="rating-star">
															<span class="spr-badge" data-rating="0.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span><span class="spr-badge-caption">No reviews</span>
															</span>
														</div>
														<div class="product-price">
															<span class="price_sale"><span class="money" data-currency-usd="$200.00" data-currency="USD">$200.00</span></span>
															<del class="price_compare"> <span class="money" data-currency-usd="$600.00" data-currency="USD">$600.00</span></del>
														</div>
													</div>
												</div>
											</div>
											<div class="content_product">
												<div class="row-container product list-unstyled clearfix">
													<div class="row-left">
														<a href="./product.html" class="hoverBorder container_item">
															<div class="hoverBorderWrapper">
																<img src="./assets/images/demo_194×224.png" class="not-rotation img-responsive front" alt="Women's Accessories">
																<div class="mask"></div>
																<img src="./assets/images/demo_194×224.png" class="rotation img-responsive" alt="Women's Accessories">
															</div>
														</a>
														<span class="sale_banner">
															<span class="sale_text">-66.67%</span>
														</span>
														<div class="hover-mask">
															<div class="group-mask">
																<div class="inner-mask">
																	<div class="group-actionbutton">
																		<form action="./cart.html" method="post">
																			<div class="effect-ajax-cart">
																				<input type="hidden" name="quantity" value="1">
																				<button class="btn add-to-cart" data-parent=".parent-fly" type="submit" name="add"><i class="fa fa-shopping-bag"></i></button>
																			</div>
																		</form>
																		<ul class="quickview-wishlist-wrapper">
																			<li class="quickview hidden-xs hidden-sm">
																				<div class="product-ajax-cart">
																					<span class="overlay_mask"></span>
																					<div data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
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
														<div class="product-title"><a class="title-5" href="./product.html">Digital equipment</a></div>
														<div class="rating-star">
															<span class="spr-badge" data-rating="0.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span><span class="spr-badge-caption">No reviews</span>
															</span>
														</div>
														<div class="product-price">
															<span class="price_sale"><span class="money" data-currency-usd="$200.00" data-currency="USD">$200.00</span></span>
															<del class="price_compare"> <span class="money" data-currency-usd="$600.00" data-currency="USD">$600.00</span></del>
														</div>
													</div>
												</div>
											</div>
											<div class="content_product">
												<div class="row-container product list-unstyled clearfix">
													<div class="row-left">
														<a href="./product.html" class="hoverBorder container_item">
															<div class="hoverBorderWrapper">
																<img src="./assets/images/demo_194×224.png" class="not-rotation img-responsive front" alt="Women's Accessories">
																<div class="mask"></div>
																<img src="./assets/images/demo_194×224.png" class="rotation img-responsive" alt="Women's Accessories">
															</div>
														</a>
														<div class="hover-mask">
															<div class="group-mask">
																<div class="inner-mask">
																	<div class="group-actionbutton">
																		<form action="./cart.html" method="post">
																			<div class="effect-ajax-cart">
																				<input type="hidden" name="quantity" value="1">
																				<button class="btn add-to-cart" data-parent=".parent-fly" type="submit" name="add"><i class="fa fa-shopping-bag"></i></button>
																			</div>
																		</form>
																		<ul class="quickview-wishlist-wrapper">
																			<li class="quickview hidden-xs hidden-sm">
																				<div class="product-ajax-cart">
																					<span class="overlay_mask"></span>
																					<div data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
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
														<div class="product-title"><a class="title-5" href="./product.html">Digital equipment</a></div>
														<div class="rating-star">
															<span class="spr-badge" data-rating="0.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span><span class="spr-badge-caption">No reviews</span>
															</span>
														</div>
														<div class="product-price">
															<span class="price_sale"><span class="money" data-currency-usd="$200.00" data-currency="USD">$200.00</span></span>
														</div>
													</div>
												</div>
											</div>
											<div class="content_product">
												<div class="row-container product list-unstyled clearfix">
													<div class="row-left">
														<a href="./product.html" class="hoverBorder container_item">
															<div class="hoverBorderWrapper">
																<img src="./assets/images/demo_194×224.png" class="not-rotation img-responsive front" alt="Women's Accessories">
																<div class="mask"></div>
																<img src="./assets/images/demo_194×224.png" class="rotation img-responsive" alt="Women's Accessories">
															</div>
														</a>
														<span class="sale_banner">
															<span class="sale_text">-66.67%</span>
														</span>
														<div class="hover-mask">
															<div class="group-mask">
																<div class="inner-mask">
																	<div class="group-actionbutton">
																		<form action="./cart.html" method="post">
																			<div class="effect-ajax-cart">
																				<input type="hidden" name="quantity" value="1">
																				<button class="btn add-to-cart" data-parent=".parent-fly" type="submit" name="add"><i class="fa fa-shopping-bag"></i></button>
																			</div>
																		</form>
																		<ul class="quickview-wishlist-wrapper">
																			<li class="quickview hidden-xs hidden-sm">
																				<div class="product-ajax-cart">
																					<span class="overlay_mask"></span>
																					<div data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
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
														<div class="product-title"><a class="title-5" href="./product.html">Digital equipment</a></div>
														<div class="rating-star">
															<span class="spr-badge" data-rating="0.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span><span class="spr-badge-caption">No reviews</span>
															</span>
														</div>
														<div class="product-price">
															<span class="price_sale"><span class="money" data-currency-usd="$200.00" data-currency="USD">$200.00</span></span>
															<del class="price_compare"> <span class="money" data-currency-usd="$600.00" data-currency="USD">$600.00</span></del>
														</div>
													</div>
												</div>
											</div>
											<div class="content_product">
												<div class="row-container product list-unstyled clearfix">
													<div class="row-left">
														<a href="./product.html" class="hoverBorder container_item">
															<div class="hoverBorderWrapper">
																<img src="./assets/images/demo_194×224.png" class="not-rotation img-responsive front" alt="Women's Accessories">
																<div class="mask"></div>
																<img src="./assets/images/demo_194×224.png" class="rotation img-responsive" alt="Women's Accessories">
															</div>
														</a>
														<span class="sale_banner">
															<span class="sale_text">-66.67%</span>
														</span>
														<div class="hover-mask">
															<div class="group-mask">
																<div class="inner-mask">
																	<div class="group-actionbutton">
																		<form action="./cart.html" method="post">
																			<div class="effect-ajax-cart">
																				<input type="hidden" name="quantity" value="1">
																				<button class="btn add-to-cart" data-parent=".parent-fly" type="submit" name="add"><i class="fa fa-shopping-bag"></i></button>
																			</div>
																		</form>
																		<ul class="quickview-wishlist-wrapper">
																			<li class="quickview hidden-xs hidden-sm">
																				<div class="product-ajax-cart">
																					<span class="overlay_mask"></span>
																					<div data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
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
														<div class="product-title"><a class="title-5" href="./product.html">Electronic equipment</a></div>
														<div class="rating-star">
															<span class="spr-badge" data-rating="0.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span><span class="spr-badge-caption">No reviews</span>
															</span>
														</div>
														<div class="product-price">
															<span class="price_sale"><span class="money" data-currency-usd="$200.00" data-currency="USD">$200.00</span></span>
															<del class="price_compare"> <span class="money" data-currency-usd="$600.00" data-currency="USD">$600.00</span></del>
														</div>
													</div>
												</div>
											</div>
											<div class="content_product">
												<div class="row-container product list-unstyled clearfix">
													<div class="row-left">
														<a href="./product.html" class="hoverBorder container_item">
															<div class="hoverBorderWrapper">
																<img src="./assets/images/demo_194×224.png" class="not-rotation img-responsive front" alt="Women's Accessories">
																<div class="mask"></div>
																<img src="./assets/images/demo_194×224.png" class="rotation img-responsive" alt="Women's Accessories">
															</div>
														</a>
														<div class="hover-mask">
															<div class="group-mask">
																<div class="inner-mask">
																	<div class="group-actionbutton">
																		<form action="./cart.html" method="post">
																			<div class="effect-ajax-cart">
																				<input type="hidden" name="quantity" value="1">
																				<button class="btn add-to-cart" data-parent=".parent-fly" type="submit" name="add"><i class="fa fa-shopping-bag"></i></button>
																			</div>
																		</form>
																		<ul class="quickview-wishlist-wrapper">
																			<li class="quickview hidden-xs hidden-sm">
																				<div class="product-ajax-cart">
																					<span class="overlay_mask"></span>
																					<div data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
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
														<div class="product-title"><a class="title-5" href="./product.html">Electronic equipment</a></div>
														<div class="rating-star">
															<span class="spr-badge" data-rating="0.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span><span class="spr-badge-caption">No reviews</span>
															</span>
														</div>
														<div class="product-price">
															<span class="price_sale"><span class="money" data-currency-usd="$200.00" data-currency="USD">$200.00</span></span>
														</div>
													</div>
												</div>
											</div>
											<div class="content_product">
												<div class="row-container product list-unstyled clearfix">
													<div class="row-left">
														<a href="./product.html" class="hoverBorder container_item">
															<div class="hoverBorderWrapper">
																<img src="./assets/images/demo_194×224.png" class="not-rotation img-responsive front" alt="Women's Accessories">
																<div class="mask"></div>
																<img src="./assets/images/demo_194×224.png" class="rotation img-responsive" alt="Women's Accessories">
															</div>
														</a>
														<div class="hover-mask">
															<div class="group-mask">
																<div class="inner-mask">
																	<div class="group-actionbutton">
																		<form action="./cart.html" method="post">
																			<div class="effect-ajax-cart">
																				<input type="hidden" name="quantity" value="1">
																				<button class="btn add-to-cart" data-parent=".parent-fly" type="submit" name="add"><i class="fa fa-shopping-bag"></i></button>
																			</div>
																		</form>
																		<ul class="quickview-wishlist-wrapper">
																			<li class="quickview hidden-xs hidden-sm">
																				<div class="product-ajax-cart">
																					<span class="overlay_mask"></span>
																					<div data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
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
														<div class="product-title"><a class="title-5" href="./product.html">Electronic equipment</a></div>
														<div class="rating-star">
															<span class="spr-badge" data-rating="0.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span><span class="spr-badge-caption">No reviews</span>
															</span>
														</div>
														<div class="product-price">
															<span class="price_sale"><span class="money" data-currency-usd="$200.00" data-currency="USD">$200.00</span></span>
														</div>
													</div>
												</div>
											</div>
											<div class="content_product">
												<div class="row-container product list-unstyled clearfix">
													<div class="row-left">
														<a href="./product.html" class="hoverBorder container_item">
															<div class="hoverBorderWrapper">
																<img src="./assets/images/demo_194×224.png" class="not-rotation img-responsive front" alt="Women's Accessories">
																<div class="mask"></div>
																<img src="./assets/images/demo_194×224.png" class="rotation img-responsive" alt="Women's Accessories">
															</div>
														</a>
														<span class="sale_banner">
															<span class="sale_text">-66.67%</span>
														</span>
														<div class="hover-mask">
															<div class="group-mask">
																<div class="inner-mask">
																	<div class="group-actionbutton">
																		<form action="./cart.html" method="post">
																			<div class="effect-ajax-cart">
																				<input type="hidden" name="quantity" value="1">
																				<button class="btn add-to-cart" data-parent=".parent-fly" type="submit" name="add"><i class="fa fa-shopping-bag"></i></button>
																			</div>
																		</form>
																		<ul class="quickview-wishlist-wrapper">
																			<li class="quickview hidden-xs hidden-sm">
																				<div class="product-ajax-cart">
																					<span class="overlay_mask"></span>
																					<div data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
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
														<div class="product-title"><a class="title-5" href="./product.html">Electronic equipment</a></div>
														<div class="rating-star">
															<span class="spr-badge" data-rating="0.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span><span class="spr-badge-caption">No reviews</span>
															</span>
														</div>
														<div class="product-price">
															<span class="price_sale"><span class="money" data-currency-usd="$200.00" data-currency="USD">$200.00</span></span>
															<del class="price_compare"> <span class="money" data-currency-usd="$600.00" data-currency="USD">$600.00</span></del>
														</div>
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
			</div>
		</main>
	</div>

@endsection