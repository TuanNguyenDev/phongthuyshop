@extends('layouts.users.main')
@section('title','Product')
@section('content')
	<div class="page-container" id="PageContainer">
		<main class="main-content" id="MainContent" role="main">
			<section class="collection-heading heading-content ">
				<div class="container">
					<div class="row">
						<div class="collection-wrapper">
							<h1 class="collection-title">
								<span>
									<a href="./collections-all.html" title="All Products">Products</a>
								</span>
							</h1>
							<div class="breadcrumb-group">
								<div class="breadcrumb clearfix">
									<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="./index.html" title="Sarahmarket 1" itemprop="url"><span itemprop="title">Home</span></a>
									</span>
									<span class="arrow-space">></span>
									<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
										<a href="./collections-all.html" title="All Products" itemprop="url"><span itemprop="title">Products</span></a>
									</span>
									<span class="arrow-space">></span>
									<strong>{{$product->ten_san_pham}}</strong>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="product-detail-content">
				<div class="detail-content-wrapper">
					<div class="container">
						<div class="row">
							<div id="shopify-section-product-template" class="shopify-section">
								<div class="detail-content-inner" itemscope="" itemtype="http://schema.org/Product">
									<meta itemprop="name" content="Today's trending">
									<meta itemprop="url" content="./product.html">
									<meta itemprop="image" content="./assets/images/demo_471×544.png">
									<div id="product" class="neque-porro-quisquam-est-qui-dolor-ipsum-quia-9 detail-content">
										<div class="col-md-12 info-detail-pro clearfix">
											<div class="col-md-5" id="product-image">
												<div class="show-image-load" style="display: none;">
													<div class="show-image-load-inner">
														<i class="fa fa-spinner fa-pulse fa-2x"></i>
													</div>
												</div>
												<div id="featuted-image" class="image featured">
													<div class="image-item">
														<a href="#" class="thumbnail" id="thumbnail-product-1" data-toggle="modal" data-target="#lightbox"> 
															<img src="{{$product->anh}}" alt="Today's trending" data-item="1">
														</a>
														<span class="image-title-zoom" data-zoom="thumbnail-product-1">
															<i class="fa fa-search-plus"></i>
															Click to enlarge
														</span>
													</div>
													<div class="image-item">
														<a href="#" class="thumbnail" id="thumbnail-product-2" data-toggle="modal" data-target="#lightbox"> 
															<img src="./assets/images/demo_471×544.png" alt="Today's trending" data-item="2">
														</a>
														<span class="image-title-zoom" data-zoom="thumbnail-product-2">
															<i class="fa fa-search-plus"></i>
															Click to enlarge
														</span>
													</div>
													<div class="image-item">
														<a href="#" class="thumbnail" id="thumbnail-product-3" data-toggle="modal" data-target="#lightbox"> 
															<img src="./assets/images/demo_471×544.png" alt="Today's trending" data-item="3">
														</a>
														<span class="image-title-zoom" data-zoom="thumbnail-product-3">
															<i class="fa fa-search-plus"></i>
															Click to enlarge
														</span>
													</div>
													<div class="image-item">
														<a href="#" class="thumbnail" id="thumbnail-product-4" data-toggle="modal" data-target="#lightbox"> 
															<img src="./assets/images/demo_471×544.png" alt="Today's trending" data-item="4">
														</a>
														<span class="image-title-zoom" data-zoom="thumbnail-product-4">
															<i class="fa fa-search-plus"></i>
															Click to enlarge
														</span>
													</div>
												</div>
											</div>
											<div class="col-md-7" id="product-information">
												<h1 itemprop="name" class="title">{{$product->ten_san_pham}}</h1>
												<div class="description" itemprop="description">
													{{$product->mo_ta}}
												</div>
													<div class="product-options " itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
														<meta itemprop="priceCurrency" content="USD">
														<link itemprop="availability" href="http://schema.org/InStock">
														<div class="vendor-type">
															<span class="product_vendor"><span class="_title">Size:</span> {{$product->size}}</span>
															<span class="product_type"><span class="_title">Trọng lượng:</span> {{$product->trong_luong}}</span>
															<span class="product_sku"><span class="_title">Màu sắc: </span>{{$product->mau_sac}}</span>
															<span class="product_sku"><span class="_title">Chất liệu: </span>{{$product->chat_lieu}}</span>
															<span class="product_sku"><span class="_title">Ý nghĩa: </span>{{$product->y_nghia}}</span>
															<span class="product_sku"><span class="_title">Kích thước: </span>{{$product->kich_thuoc}}</span>
															<span class="product_sku"><span class="_title">Mệnh: </span>{{$product->getMenh()}}</span>
															<span class="product_sku"><span class="_title">Danh mục: </span>{{$product->getMenh()}}</span>
														</div>
														{{-- <div class="rating-star">
															<span class="spr-badge" data-rating="0.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">2 reviews</span>
															</span>
														</div> --}}
														
														<div class="product-price">
															<meta itemprop="price" content="200.00">
															<h2 class="price" id="price-preview"><span class="money" data-currency-usd="$200.00" data-currency="USD">{{$product->gia}}</span></h2>
														</div>
														<div class="purchase-section multiple">
															<form method="POST" action="{{route('updateCart')}}" accept-charset="utf-8">
																{{csrf_field()}}
																<div class="quantity-wrapper clearfix">
																	<div class="wrapper">
																		<input id="quantity" type="text" name="quantity" value="1" maxlength="3" size="5" class="item-quantity">
																		<input type="hidden" name="id" value="{{$product->id}}">
																	</div>
																</div>
																<div class="purchase">
																	<button type="submit" class="btn add-to-cart"><span class="hidden-xs"><i class="fa fa-shopping-bag"></i>Mua ngay</button>
																</div>
														</form>
														</div>
													</div>
												<div class="supports-fontface">
													<div class="social-sharing is-clean">
														<a target="_blank" href="./product.html" class="share-facebook">
															<span class="icon icon-facebook"></span>
															<span class="share-title">Share</span>     
														</a>
														<a target="_blank" href="./product.html" class="share-twitter">
															<span class="icon icon-twitter"></span>
															<span class="share-title">Tweet</span>
														</a>
														<a target="_blank" href="./product.html" class="share-pinterest">
															<span class="icon icon-pinterest"></span>
															<span class="share-title">Pin it</span>
														</a>
														<a target="_blank" href="./product.html" class="share-fancy">
															<span class="icon icon-fancy"></span>
															<span class="share-title">Fancy</span>
														</a>
														<a target="_blank" href="./product.html" class="share-google">
															<!-- Cannot get Google+ share count with JS yet -->
															<span class="icon icon-google-plus"></span>
															<span class="share-count is-loaded">+1</span>
														</a>
													</div>
												</div>
											</div>
										</div>
										<div id="tabs-information" class="col-md-12">
											<div class="information_content panel panel-default">
												<div class="panel-heading" role="tab" id="heading_des">
													<h4 class="panel-title" data-toggle="collapse" href="#collapse_des" aria-expanded="true" aria-controls="collapse_des">
														Description
														<i class="fa-icon fa fa-angle-up"></i>
													</h4>
												</div>
												<div id="collapse_des" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading_des">
													<div class="panel-body">
														<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis amet voluptas assumenda est, omnis dolor repellendus quis nostrum.</p>
													</div>
												</div>
											</div>
											<div class="information_content panel panel-default">
												<div class="panel-heading" role="tab" id="heading_tags">
													<h4 class="panel-title" data-toggle="collapse" href="#collapse_tags" aria-expanded="true" aria-controls="collapse_tags">
														Product Tags
														<i class="fa-icon fa fa-angle-up"></i>
													</h4>
												</div>
												<div id="collapse_tags" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading_tags">
													<div class="panel-body">
														<div class="relative product-detail-tag">
															<ul class="list-unstyled">
																<li class="tags">
																	<span>Tags:</span>
																	<a href="./collections-all.html">
																		100-200<span>,</span>
																	</a>
																	<a href="./collections-all.html">    
																		above-200<span>,</span>
																	</a>
																	<a href="./collections-all.html">
																		best-seller<span>,</span>
																	</a>
																	<a href="./collections-all.html">    
																		brown<span>,</span>      
																	</a>
																	<a href="./collections-all.html">
																		chanel<span>,</span>  
																	</a>
																	<a href="./collections-all.html">        
																		dior<span>,</span>    
																	</a>
																	<a href="./collections-all.html">        
																		gray<span>,</span>    
																	</a>
																	<a href="./collections-all.html">        
																		orange<span>,</span>      
																	</a>
																	<a href="./collections-all.html">        
																		pink<span>,</span>    
																	</a>
																	<a href="./collections-all.html">        
																		red<span>,</span>     
																	</a>
																	<a href="./collections-all.html">        
																		s<span>,</span>        
																	</a>
																	<a href="./collections-all.html">
																		sale-off<span>,</span>  
																	</a>
																	<a href="./collections-all.html">        
																		silver<span>,</span>  
																	</a>
																	<a href="./collections-all.html">        
																		under-100<span>,</span>
																	</a>
																	<a href="./collections-all.html">       
																		vintage<span>,</span>
																	</a>
																	<a href="./collections-all.html">       
																		x<span>,</span>
																	</a>
																	<a href="./collections-all.html">
																		xl
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="information_content panel panel-default">
												<div class="panel-heading" role="tab" id="heading_review">
													<h4 class="panel-title" data-toggle="collapse" href="#collapse_review" aria-expanded="true" aria-controls="collapse_review">
														Review
														<i class="fa-icon fa fa-angle-up"></i>
													</h4>
												</div>
												<div id="collapse_review" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading_review">
													<div class="panel-body">
														<div id="customer_review">
															<div class="preview_content">
																<div id="shopify-product-reviews" data-id="6537875078">
																	<div class="spr-container">
																		<div class="spr-header">
																			<h2 class="spr-header-title">Customer Reviews</h2>
																			<div class="spr-summary" itemscope="" itemtype="http://data-vocabulary.org/Review-aggregate">
																				<meta itemprop="itemreviewed" content="Chanel, the cheetah">
																				<meta itemprop="votes" content="1">
																				<span itemprop="rating" itemscope="" itemtype="http://data-vocabulary.org/Rating" class="spr-starrating spr-summary-starrating">
																					<meta itemprop="average" content="5.0">
																					<meta itemprop="best" content="5">
																					<meta itemprop="worst" content="1">
																					<i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i>
																				</span>
																				<span class="spr-summary-caption">
																					<span class="spr-summary-actions-togglereviews">Based on 1 review</span>
																				</span>
																				<span class="spr-summary-actions">
																					<a href="#" class="spr-summary-actions-newreview" onclick="active_review_form();return false">Write a review</a>
																				</span>
																			</div>
																		</div>
																		<div class="spr-content">
																			<div class="spr-form" id="form_6537875078" style="display: none;">
																				<form method="post" action="./product.html" id="new-review-form_6537875078" class="new-review-form" onsubmit="SPR.submitForm(this);return false;"><input type="hidden" name="review[rating]"><input type="hidden" name="product_id" value="6537875078">
																					<h3 class="spr-form-title">Write a review</h3>
																					<fieldset class="spr-form-contact">
																						<div class="spr-form-contact-name">
																							<label class="spr-form-label" for="review_author_6537875078">Name</label>
																							<input class="spr-form-input spr-form-input-text " id="review_author_6537875078" type="text" name="review[author]" value="" placeholder="Enter your name">
																						</div>
																						<div class="spr-form-contact-email">
																							<label class="spr-form-label" for="review_email_6537875078">Email</label>
																							<input class="spr-form-input spr-form-input-email " id="review_email_6537875078" type="email" name="review[email]" value="" placeholder="john.smith@example.com">
																						</div>
																					</fieldset>
																					<fieldset class="spr-form-review">
																						<div class="spr-form-review-rating">
																							<label class="spr-form-label">Rating</label>
																							<div class="spr-form-input spr-starrating ">
																								<a href="#" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="1">&nbsp;</a>
																								<a href="#" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="2">&nbsp;</a>
																								<a href="#" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="3">&nbsp;</a>
																								<a href="#" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="4">&nbsp;</a>
																								<a href="#" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="5">&nbsp;</a>
																							</div>
																						</div>
																						<div class="spr-form-review-title">
																							<label class="spr-form-label" for="review_title_6537875078">Review Title</label>
																							<input class="spr-form-input spr-form-input-text " id="review_title_6537875078" type="text" name="review[title]" value="" placeholder="Give your review a title">
																						</div>
																						<div class="spr-form-review-body">
																							<label class="spr-form-label" for="review_body_6537875078">Body of Review <span class="spr-form-review-body-charactersremaining">(1500)</span></label>
																							<div class="spr-form-input">
																								<textarea class="spr-form-input spr-form-input-textarea " id="review_body_6537875078" data-product-id="6537875078" name="review[body]" rows="10" placeholder="Write your comments here"></textarea>

																							</div>
																						</div>
																					</fieldset>
																					<fieldset class="spr-form-actions">
																						<input type="submit" class="spr-button spr-button-primary button button-primary btn btn-primary" value="Submit Review">
																					</fieldset>
																				</form>
																			</div>
																			<div class="spr-reviews" id="reviews_6537875078">
																				<div class="spr-review" id="spr-review-7003642">
																					<div class="spr-review-header">
																						<span class="spr-starratings spr-review-header-starratings"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span>
																						<h3 class="spr-review-header-title">FRENCH CONNECTION, SUNDAY BLISS BAG</h3>
																						<span class="spr-review-header-byline"><strong>Jin Alkaid</strong> on <strong>Jun 10, 2017</strong></span>
																					</div>
																					<div class="spr-review-content">
																						<p class="spr-review-content-body">FRENCH CONNECTION, SUNDAY BLISS BAG</p>
																					</div>
																					<div class="spr-review-footer">
																						<a href="#" class="spr-review-reportreview" onclick="SPR.reportReview(7003642);return false" id="report_7003642" data-msg="This review has been reported">Report as Inappropriate</a>
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
											</div>
											<script>
												$(".information_content .panel-title").click(function() {
													if ($(this).find("i").hasClass("fa-angle-up")) {
														$(this).find("i").removeClass("fa-angle-up");
														$(this).find("i").addClass("fa-angle-down");
													} else {
														$(this).find("i").removeClass("fa-angle-down");
														$(this).find("i").addClass("fa-angle-up");
													}
												});
											</script>
										</div>
										<div class="related-products col-sm-12">
											<div class="collection-title home-title page-title"><span>You may also like</span></div>
											<div class="group-related">
												<div class="group-related-inner">
													<div class="rp-slider">
														<div class="content_product">
															<div class="row-container product list-unstyled clearfix">
																<div class="row-left">
																	<a href="./product.html" class="hoverBorder container_item">
																		<div class="hoverBorderWrapper">
																			<img src="./assets/images/demo_194×224.png" class="not-rotation img-responsive front" alt="Sport machine">
																			<div class="mask"></div>
																			<img src="./assets/images/demo_194×224.png" class="rotation img-responsive" alt="Sport machine">
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
																	<div class="product-title"><a class="title-5" href="./product.html">Sport machine</a></div>
																	<div class="rating-star">
																		<span class="spr-badge" data-rating="0.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span><span class="spr-badge-caption">No reviews</span>
																		</span>
																	</div>
																	<div class="product-price">
																		<span class="price_sale"><span class="money" data-currency-usd="$200.00">$200.00</span></span>
																		<del class="price_compare"> <span class="money" data-currency-usd="$600.00">$600.00</span></del>
																	</div>
																</div>
															</div>
														</div>
														<div class="content_product">
															<div class="row-container product list-unstyled clearfix">
																<div class="row-left">
																	<a href="./product.html" class="hoverBorder container_item">
																		<div class="hoverBorderWrapper">
																			<img src="./assets/images/demo_194×224.png" class="not-rotation img-responsive front" alt="Sport machine">
																			<div class="mask"></div>
																			<img src="./assets/images/demo_194×224.png" class="rotation img-responsive" alt="Sport machine">
																		</div>
																	</a>
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
																	<div class="product-title"><a class="title-5" href="./product.html">Women's Accessories</a></div>
																	<div class="rating-star">
																		<span class="spr-badge" data-rating="0.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span><span class="spr-badge-caption">No reviews</span>
																		</span>
																	</div>
																	<div class="product-price">
																		<span class="price_sale"><span class="money" data-currency-usd="$200.00">$200.00</span></span>
																	</div>
																</div>
															</div>
														</div>
														<div class="content_product">
															<div class="row-container product list-unstyled clearfix">
																<div class="row-left">
																	<a href="./product.html" class="hoverBorder container_item">
																		<div class="hoverBorderWrapper">
																			<img src="./assets/images/demo_194×224.png" class="not-rotation img-responsive front" alt="Sport machine">
																			<div class="mask"></div>
																			<img src="./assets/images/demo_194×224.png" class="rotation img-responsive" alt="Sport machine">
																		</div>
																	</a>
																	<span class="sale_banner">
																		<span class="sale_text">-33.33%</span>
																	</span>
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
																	<div class="product-title"><a class="title-5" href="./product.html">Women's Accessories</a></div>
																	<div class="rating-star">
																		<span class="spr-badge" data-rating="0.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span><span class="spr-badge-caption">No reviews</span>
																		</span>
																	</div>
																	<div class="product-price">
																		<span class="price_sale"><span class="money" data-currency-usd="$200.00">$200.00</span></span>
																	</div>
																</div>
															</div>
														</div>
														<div class="content_product">
															<div class="row-container product list-unstyled clearfix">
																<div class="row-left">
																	<a href="./product.html" class="hoverBorder container_item">
																		<div class="hoverBorderWrapper">
																			<img src="./assets/images/demo_194×224.png" class="not-rotation img-responsive front" alt="Sport machine">
																			<div class="mask"></div>
																			<img src="./assets/images/demo_194×224.png" class="rotation img-responsive" alt="Sport machine">
																		</div>
																	</a>
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
																	<div class="product-title"><a class="title-5" href="./product.html">Sport machine</a></div>
																	<div class="rating-star">
																		<span class="spr-badge" data-rating="0.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span><span class="spr-badge-caption">No reviews</span>
																		</span>
																	</div>
																	<div class="product-price">
																		<span class="price_sale"><span class="money" data-currency-usd="$200.00">$200.00</span></span>
																	</div>
																</div>
															</div>
														</div>
														<div class="content_product">
															<div class="row-container product list-unstyled clearfix">
																<div class="row-left">
																	<a href="./product.html" class="hoverBorder container_item">
																		<div class="hoverBorderWrapper">
																			<img src="./assets/images/demo_194×224.png" class="not-rotation img-responsive front" alt="Sport machine">
																			<div class="mask"></div>
																			<img src="./assets/images/demo_194×224.png" class="rotation img-responsive" alt="Sport machine">
																		</div>
																	</a>
																	<span class="sale_banner">
																		<span class="sale_text">-33.33%</span>
																	</span>
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
																	<div class="product-title"><a class="title-5" href="./product.html">Office furniture</a></div>
																	<div class="rating-star">
																		<span class="spr-badge" data-rating="0.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span><span class="spr-badge-caption">No reviews</span>
																		</span>
																	</div>
																	<div class="product-price">
																		<span class="price_sale"><span class="money" data-currency-usd="$200.00">$200.00</span></span>
																		<del class="price_compare"> <span class="money" data-currency-usd="$600.00">$300.00</span></del>
																	</div>
																</div>
															</div>
														</div>
														<div class="content_product">
															<div class="row-container product list-unstyled clearfix">
																<div class="row-left">
																	<a href="./product.html" class="hoverBorder container_item">
																		<div class="hoverBorderWrapper">
																			<img src="./assets/images/demo_194×224.png" class="not-rotation img-responsive front" alt="Sport machine">
																			<div class="mask"></div>
																			<img src="./assets/images/demo_194×224.png" class="rotation img-responsive" alt="Sport machine">
																		</div>
																	</a>
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
																	<div class="product-title"><a class="title-5" href="./product.html">Office furniture</a></div>
																	<div class="rating-star">
																		<span class="spr-badge" data-rating="0.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span><span class="spr-badge-caption">No reviews</span>
																		</span>
																	</div>
																	<div class="product-price">
																		<span class="price_sale"><span class="money" data-currency-usd="$200.00">$200.00</span></span>
																	</div>
																</div>
															</div>
														</div>
														<div class="content_product">
															<div class="row-container product list-unstyled clearfix">
																<div class="row-left">
																	<a href="./product.html" class="hoverBorder container_item">
																		<div class="hoverBorderWrapper">
																			<img src="./assets/images/demo_194×224.png" class="not-rotation img-responsive front" alt="Sport machine">
																			<div class="mask"></div>
																			<img src="./assets/images/demo_194×224.png" class="rotation img-responsive" alt="Sport machine">
																		</div>
																	</a>
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
																	<div class="product-title"><a class="title-5" href="./product.html">Electronic equipment</a></div>
																	<div class="rating-star">
																		<span class="spr-badge" data-rating="0.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span><span class="spr-badge-caption">No reviews</span>
																		</span>
																	</div>
																	<div class="product-price">
																		<span class="price_sale"><span class="money" data-currency-usd="$200.00">$200.00</span></span>
																	</div>
																</div>
															</div>
														</div>
														<div class="content_product">
															<div class="row-container product list-unstyled clearfix">
																<div class="row-left">
																	<a href="./product.html" class="hoverBorder container_item">
																		<div class="hoverBorderWrapper">
																			<img src="./assets/images/demo_194×224.png" class="not-rotation img-responsive front" alt="Sport machine">
																			<div class="mask"></div>
																			<img src="./assets/images/demo_194×224.png" class="rotation img-responsive" alt="Sport machine">
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
																	<div class="product-title"><a class="title-5" href="./product.html">Today's trending</a></div>
																	<div class="rating-star">
																		<span class="spr-badge" data-rating="0.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span><span class="spr-badge-caption">No reviews</span>
																		</span>
																	</div>
																	<div class="product-price">
																		<span class="price_sale"><span class="money" data-currency-usd="$200.00">$200.00</span></span>
																		<del class="price_compare"> <span class="money" data-currency-usd="$600.00">$600.00</span></del>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!--END -->
										</div>
									</div>
								</div>
							</div>
						</div>
						<script>
							function active_review_form(){
								if($("#form_6537875078").attr('style')=='display: none;'){
									$("#form_6537875078").css('display','block');
								}
								else {
									$("#form_6537875078").css('display','none');
								}
							}
							jQuery(document).ready(function($){
								$('#gallery-images div.image').on('click', function() {
									var $this = $(this);
									var parent = $this.parents('#gallery-images');
									parent.find('.image').removeClass('active');
									$this.addClass('active');
								});
							});
						</script>
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