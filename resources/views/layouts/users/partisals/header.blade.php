
 <!DOCTYPE html>
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="canonical" href="/" />
	<meta name="theme-color" content="#7796A8">
	<meta name="description" content="" />
	<title>
	Phong Thủy Shop | @yield('title')
	</title>
	
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">
	
	<link href="{{	url('css/assets/stylesheets/bootstrap.min.css')  }}" rel="stylesheet" type="text/css" media="all">  
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="{{  url('css/assets/stylesheets/fonts.googleapis.css')  }}" rel="stylesheet" type="text/css" media="all">
	<link href="{{  url('css/assets/stylesheets/font-awesome.min.css')  }}" rel="stylesheet" type="text/css" media="all">
	<link href="{{  url('css/assets/stylesheets/icon-font.min.css')  }}" rel="stylesheet" type="text/css" media="all">
	<link href="{{  url('css/assets/stylesheets/social-buttons.css')  }}" rel="stylesheet" type="text/css" media="all">
	<link href="{{  url('css/assets/stylesheets/cs-1.styles.css')  }}" rel="stylesheet" type="text/css" media="all">
	<link href="{{  url('css/assets/stylesheets/owl.carousel.min.css')  }}" rel="stylesheet" type="text/css" media="all">
	<link href="{{  url('css/assets/stylesheets/spr.css')  }}" rel="stylesheet" type="text/css" media="all">
	<link href="{{  url('css/assets/stylesheets/slideshow-fade.css')  }}" rel="stylesheet" type="text/css" media="all">
	<link href="{{  url('css/assets/stylesheets/cs.animate.css')  }}" rel="stylesheet" type="text/css" media="all">
	
	<script type="text/javascript" src="{{ url('js/javascripts/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{ url('js/javascripts/classie.js')}}"></script>
	<script type="text/javascript" src="{{ url('js/javascripts/cs.optionSelect.js')}}"></script>
	<script type="text/javascript" src="{{ url('js/javascripts/cs.script.js')}}"></script>
	<script type="text/javascript" src="{{ url('js/javascripts/jquery.currencies.min.js')}}"></script>
	<script type="text/javascript" src="{{ url('js/javascripts/jquery.zoom.min.js')}}"></script>
	<script type="text/javascript" src="{{ url('js/javascripts/linkOptionSelectors.js')}}"></script>
	<script type="text/javascript" src="{{ url('js/javascripts/owl.carousel.min.js')}}"></script>
	<script type="text/javascript" src="{{ url('js/javascripts/scripts.js')}}"></script>
	<script type="text/javascript" src="{{ url('js/javascripts/social-buttons.js')}}"></script>
	<script type="text/javascript" src="{{ url('js/javascripts/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{ url('js/javascripts/jquery.touchSwipe.min.js')}}"></script>

</head>

<body class="index-template sarahmarket_1">

	<!--Header-->
	<header id="top" class="header clearfix">
		<div id="shopify-section-theme-header" class="shopify-section">
			<div data-section-id="theme-header" data-section-type="header-section">
				<section class="top-header">
					<div class="top-header-wrapper">
						<div class="container">
							<div class="row">
								<div class="top-header-inner">
									<ul class="unstyled top-menu">
										<li class="nav-item active">
											<a href="{{route('contact.user')}}">
												<span>Phản Hồi</span>
											</a>
										</li>
										@if (isset(Auth::user()->name))
											<li class="toolbar-customer my-wishlist"><a href="{{route('customer.profile',['id' => Auth::id()])}}">{{Auth::user()->name}}</a></li>
											<li class="toolbar-customer log-out"><a href="{{route('user.logout')}}"><span>/</span> Logout</a></li>
											{{-- true expr --}}
										@else
											<li class="toolbar-customer my-wishlist"><a href="{{route('login')}}">Login</a></li>
											<li class="toolbar-customer log-out"><a href="{{route('register')}}"><span>/</span> Register</a></li>
										@endif
										
									</ul>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="main-header">
					<div class="main-header-wrapper">
						<div class="container clearfix">
							<div class="row">
								<div class="main-header-inner">
									<div class="nav-top">
										<div class="nav-logo">
											<a href="{{route('index')}}"><img src="{{ asset('images/logo_main.png') }}" alt="" title="Trang chủ"></a>
											<h1 style="display:none"><a href="./index.html">Sarahmarket 1</a></h1>
										</div>
										<div class="group-search-cart">
											<div class="nav-search">
												<form class="search" action="{{route('search_normal')}}" method="get">
													<input type="hidden" name="type" value="product">
													<input type="text" name="key" class="search_box" placeholder="Nhập từ khóa..." value="">
													<div class="collections-selector">
														<select class="single-option-selector" data-option="collection-option" id="collection-option" name="cate">
														<option value="0">Tất cả danh mục</option>
														@foreach ($cates as $cate)
															<option value="{{$cate->id}}">{{$cate->ten_danh_muc}}</option>
														@endforeach
														</select>
													</div>
													<button class="search_submit" type="submit">
														<svg aria-hidden="true" role="presentation" class="icon icon-search" viewBox="0 0 37 40"><path d="M35.6 36l-9.8-9.8c4.1-5.4 3.6-13.2-1.3-18.1-5.4-5.4-14.2-5.4-19.7 0-5.4 5.4-5.4 14.2 0 19.7 2.6 2.6 6.1 4.1 9.8 4.1 3 0 5.9-1 8.3-2.8l9.8 9.8c.4.4.9.6 1.4.6s1-.2 1.4-.6c.9-.9.9-2.1.1-2.9zm-20.9-8.2c-2.6 0-5.1-1-7-2.9-3.9-3.9-3.9-10.1 0-14C9.6 9 12.2 8 14.7 8s5.1 1 7 2.9c3.9 3.9 3.9 10.1 0 14-1.9 1.9-4.4 2.9-7 2.9z"></path></svg>
													</button>
												</form>
											</div>
											<div class="nav-cart " id="cart-target">
												<div class="cart-info-group">
													<a href="./cart.html" class="cart dropdown-toggle dropdown-link" data-toggle="dropdown">
														<i class="sub-dropdown1 visible-sm visible-md visible-lg"></i>
														<i class="sub-dropdown visible-sm visible-md visible-lg"></i> 
														<div class="num-items-in-cart">
															<div class="items-cart-left">
																<img class="cart_img" src="{{ asset('images/bg-cart.png') }}" alt="Image Cart" title="Image Cart">
																<span class="cart_text icon"><span class="number">

																</span></span>       
															</div>
															<div class="items-cart-right">
																<span class="title_cart">Giỏ hàng</span>        
															</div>
														</div>
													</a>
													<div class="dropdown-menu cart-info" style="display: none;">
														<div class="cart-content">
															<div class="items control-container">
																@if (count($cart)>0)
																	@foreach ($cart as $key => $element)
																	<div class="row">
																		<a class="cart-close" title="Remove" href="{{route('removeCart',$element->rowId)}}">
																			<i class="fa fa-times"></i>
																		</a>
																		@foreach ($element->options as $k => $img)
																		<div class="cart-left">
																			<a class="cart-image" href="./product.html">
																				<img src="{{asset($img)}}" alt="" title="">
																			</a>
																		</div>
																		@endforeach
																		<div class="cart-right">
																			<div class="cart-title"><a href="./product.html">{{$element->name}}</a></div>
																			<div class="cart-price"><span class="money" data-currency-usd="$200.00" data-currency="USD">{{$element->price}}</span><span class="x"> x{{$element->qty}}</span></div>
																		</div>
																	</div>
																		
																	@endforeach
																@else
																	{{-- false expr --}}
																@endif
																
															</div>
															<div class="subtotal"><span>Tổng tiền:</span><span class="cart-total-right money" data-currency-usd="$600.00" data-currency="USD">{{$total}} Đ</span></div>
															<div class="action"><button class="btn" onclick="window.location='{{route('showCart')}}'">View Cart<i class="fa fa-caret-right"></i></button><button class="btn float-right" onclick="window.location='{{route('checkout')}}'">CHECKOUT<i class="fa fa-caret-right"></i></button></div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="mobile-navigation">
										<button id="showLeftPush" class="visible-xs"><i class="fa fa-bars fa-2x"></i></button>
										<div class="nav-logo visible-xs">
											<div><a href="./index.html"><img src="./assets/images/logo.png" alt="" title="Sarahmarket 1"></a></div>
										</div>
										<div class="icon_cart visible-xs">
											<div class="cart-info-group">
												<a href="./cart.html" class="cart dropdown-toggle dropdown-link">
													<i class="sub-dropdown1 visible-sm visible-md visible-lg"></i>
													<i class="sub-dropdown visible-sm visible-md visible-lg"></i> 
													<div class="num-items-in-cart">
														<div class="items-cart-left">
															<img class="cart_img" src="{{ asset('images/bg-cart.png') }}" alt="Image Cart" title="Image Cart">
															<span class="cart_text icon"><span class="number">
																@php
																	$total = count($cart);
																@endphp
																{{$total}}
															</span></span>       
														</div>
													</div>
												</a>
											</div>
										</div>
										<div class="nav-search visible-xs">
											<form class="search" action="./search.html">
												<input type="hidden" name="type" value="product">
												<input type="text" name="q" class="search_box" placeholder="Enter your keyword ..." value="">
												<button class="search_submit" type="submit">
													<svg aria-hidden="true" role="presentation" class="icon icon-search" viewBox="0 0 37 40"><path d="M35.6 36l-9.8-9.8c4.1-5.4 3.6-13.2-1.3-18.1-5.4-5.4-14.2-5.4-19.7 0-5.4 5.4-5.4 14.2 0 19.7 2.6 2.6 6.1 4.1 9.8 4.1 3 0 5.9-1 8.3-2.8l9.8 9.8c.4.4.9.6 1.4.6s1-.2 1.4-.6c.9-.9.9-2.1.1-2.9zm-20.9-8.2c-2.6 0-5.1-1-7-2.9-3.9-3.9-3.9-10.1 0-14C9.6 9 12.2 8 14.7 8s5.1 1 7 2.9c3.9 3.9 3.9 10.1 0 14-1.9 1.9-4.4 2.9-7 2.9z"></path></svg>
												</button>
											</form>
										</div>
										<div class="mobile-navigation-inner">
											<div class="mobile-navigation-content">
												<div class="mobile-top-navigation visible-xs">
													<div class="mobile-content-top">
														<div class="mobile-language-currency">
															<div class="currencies-switcher">
																<div class="currency btn-group uppercase">
																	<a class="currency_wrapper dropdown-toggle" data-toggle="dropdown">
																		<i class="sub-dropdown1 visible-sm visible-md visible-lg"></i>
																		<i class="sub-dropdown visible-sm visible-md visible-lg"></i>
																		<span class="currency_code heading hidden-xs">USD</span>
																		<span class="currency_code visible-xs">USD</span>
																		<i class="fa fa-angle-down"></i>
																	</a>
																	<ul class="currencies dropdown-menu text-left">
																		<li class="currency-USD active">
																			<a href="javascript:;">USD</a>
																			<input type="hidden" value="USD">
																		</li>
																		<li class="currency-GBP">
																			<a href="javascript:;">GBP</a>
																			<input type="hidden" value="GBP">
																		</li>
																		<li class="currency-AUD">
																			<a href="javascript:;">AUD</a>
																			<input type="hidden" value="AUD">
																		</li>
																		<li class="currency-EUR">
																			<a href="javascript:;">EUR</a>
																			<input type="hidden" value="EUR">
																		</li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="mobile-top-account">
															<div class="is-mobile-login">
																<ul class="customer">
																	<li class="logout">
																		<a href="./login.html"><i class="fa fa-user" aria-hidden="true"></i>
																			<span>Login</span>
																		</a>
																	</li>
																	<li class="account">
																		<a href=".register.html"><i class="fa fa-user-plus" aria-hidden="true"></i>
																			<span>Register</span>
																		</a>
																	</li>
																	<li class="is-mobile-cart">
																		<a href="./cart.html">
																			<div class="num-items-in-cart">
																				<i class="fa fa-shopping-cart"></i>
																				<span>Cart</span>
																				<div class="ajax-subtotal" style="display:none;"></div>
																			</div>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<div class="nav-menu visible-xs leftnavi" id="is-mobile-nav-menu">
													<div class="is-mobile-menu-content">
														<div class="mobile-content-link">
															<ul class="nav navbar-nav hoverMenuWrapper">
																<li class="nav-item active">
																	<a href="./index.html">
																		Home
																	</a>
																</li>
																<li class="nav-item navigation navigation_mobile">
																	<a href="./blog.html" class="menu-mobile-link">
																		Blogs
																	</a>
																	<a href="javascript:void(0)" class="arrow">
																		<i class="fa fa-angle-down"></i>
																	</a>
																	<ul class="menu-mobile-container" style="display: none;">
																		<li class=" li-sub-mega navigation_mobile_1">
																			<a href="./blog.html" class="menu-mobile-link">
																				<span>Home &amp; Garden</span>
																			</a>
																			<a href="javascript:void(0)" class="arrow_1">
																				<i class="fa fa-angle-down"></i>
																			</a>
																			<ul class="menu-mobile-container_1" style="display: none;">
																				<script>
																					$(window).ready(function() {
																						$('.navigation_mobile_1 .arrow_1').click(function() {
																							if ($(this).attr('class') == 'arrow_1 class_test') {
																								$('.navigation_mobile_1 .arrow_1').removeClass('class_test');
																								$('.navigation_mobile_1').removeClass('active');
																								$('.navigation_mobile_1').find('.menu-mobile-container_1').hide("slow");
																							} else {
																								$('.navigation_mobile_1 .arrow_1').addClass('class_test');
																								$('.navigation_mobile_1').addClass('active');
																								$('.navigation_mobile_1').find('.menu-mobile-container_1').show("slow");
																							}
																						});
																					});
																				</script>
																				<li class=" li-sub-mega">
																					<a tabindex="-1" href="./collections-all.html">Kitchen</a>
																				</li>
																				<li class=" li-sub-mega">
																					<a tabindex="-1" href="./collections-all.html">Bed Room</a>
																				</li>
																				<li class=" li-sub-mega">
																					<a tabindex="-1" href="./collections-all.html">Garden</a>
																				</li>
																			</ul>
																		</li>
																		<li class=" li-sub-mega">
																			<a tabindex="-1" href="./blog.html">Baby &amp; Mom</a>
																		</li>
																		<li class=" li-sub-mega">
																			<a tabindex="-1" href="./blog.html">Beauty &amp; Skin Care</a>
																		</li>
																		<li class=" li-sub-mega">
																			<a tabindex="-1" href="./blog.html">Food</a>
																		</li>
																		<li class=" li-sub-mega">
																			<a tabindex="-1" href="./blog.html">News</a>
																		</li>
																		<li class=" li-sub-mega">
																			<a tabindex="-1" href="./blog.html">Smartphone &amp; Tablet</a>
																		</li>
																		<li class=" li-sub-mega">
																			<a tabindex="-1" href="./blog.html">Furniture</a>
																		</li>
																	</ul>
																</li>
																<li class="nav-item  navigation_mobile">
																	<a href="./about-us.html" class="menu-mobile-link">
																		Pages
																	</a>
																	<a href="javascript:void(0)" class="arrow">
																		<i class="fa fa-angle-down"></i>
																	</a>
																	<div class="menu-mobile-container" style="display: none;">
																		<ul class="sub-mega-menu">
																			<li class="mega1-collumn1">
																				<ul>
																					<li class="list-unstyled li-sub-mega">
																						<a href="./about-us.html">About Us</a>
																					</li>
																					<li class="list-unstyled li-sub-mega">
																						<a href="./faqs.html">Shopping Guide</a>
																					</li>
																					<li class="list-unstyled li-sub-mega">
																						<a href="./lookbook.html">Delivery Information</a>
																					</li>
																					<li class="list-unstyled li-sub-mega">
																						<a href="./services.html">Privacy Policy</a>
																					</li>
																					<li class="list-unstyled li-sub-mega">
																						<a href="./contact.html">Sitemap</a>
																					</li>
																				</ul>
																			</li>
																			<li class="mega1-collumn2">
																				<ul>
																					<li class="list-unstyled li-sub-mega">
																						<a href="./account.html">My account</a>
																					</li>
																					<li class="list-unstyled li-sub-mega">
																						<a href="./login.html">Login</a>
																					</li>
																					<li class="list-unstyled li-sub-mega">
																						<a href="./cart.html">My cart</a>
																					</li>
																					<li class="list-unstyled li-sub-mega">
																						<a href="./wish-list.html">Wishlist</a>
																					</li>
																					<li class="list-unstyled li-sub-mega">
																						<a href="./cart.html">Checkout</a>
																					</li>
																				</ul>
																			</li>
																		</ul>
																	</div>
																</li>
																<li class="nav-item  navigation_mobile">
																	<a href="./collections.html" class="menu-mobile-link">
																		Category
																	</a>
																	<a href="javascript:void(0)" class="arrow">
																		<i class="fa fa-angle-down"></i>
																	</a>
																	<div class="menu-mobile-container" style="display: none;">
																		<ul class="sub-mega-menu">
																			<li class="mega2-collumn1">
																				<ul>
																					<li class="list-title">Book &amp; office supply</li>
																					<li class="list-unstyled li-sub-mega">
																						<a href="./collections.html">Science</a>
																					</li>
																					<li class="list-unstyled li-sub-mega">
																						<a href="./collections.html">Economic</a>
																					</li>
																					<li class="list-unstyled li-sub-mega">
																						<a href="./collections.html">Office Supply</a>
																					</li>
																				</ul>
																			</li>
																			<li class="mega2-collumn2">
																				<ul>
																					<li class="list-title">Food Cupboard</li>
																					<li class="list-unstyled li-sub-mega">
																						<a href="./collections.html">Breakfast Cereals</a>
																					</li>
																					<li class="list-unstyled li-sub-mega">
																						<a href="./collections.html">Jam, Honey &amp; Spreads</a>
																					</li>
																					<li class="list-unstyled li-sub-mega">
																						<a href="./collections.html">Crisps, Snacks &amp; Nuts</a>
																					</li>
																				</ul>
																			</li>
																			<li class="mega2-collumn3">
																				<ul>
																					<li class="list-title">Home &amp; garden</li>
																					<li class="list-unstyled li-sub-mega">
																						<a href="./collections.html">Kitchen</a>
																					</li>
																					<li class="list-unstyled li-sub-mega">
																						<a href="./collections.html">Bed Room</a>
																					</li>
																					<li class="list-unstyled li-sub-mega">
																						<a href="./collections.html">Garden</a>
																					</li>
																				</ul>
																			</li>
																		</ul>
																	</div>
																</li>
																<li class="nav-item  navigation_mobile">
																	<a href="./collections-all.html" class="menu-mobile-link">
																		Products
																	</a>
																	<a href="javascript:void(0)" class="arrow">
																		<i class="fa fa-angle-down"></i>
																	</a>
																	<div class="menu-mobile-container" style="display: none;">
																		<ul class="sub-mega-menu">
																			<li class="mega3-collumn1">
																				<ul>
																					<li class="list-title">Category</li>
																					<li class="list-unstyled li-sub-mega">
																						<a href="./collections.html">Foods</a>
																					</li>
																					<li class="list-unstyled li-sub-mega">
																						<a href="./collections.html">Hot Deal</a>
																					</li>
																					<li class="list-unstyled li-sub-mega">
																						<a href="./collections.html">Fashion</a>
																					</li>
																					<li class="list-unstyled li-sub-mega">
																						<a href="./collections.html">Travel</a>
																					</li>
																					<li class="list-unstyled li-sub-mega">
																						<a href="./collections.html">Other Services</a>
																					</li>
																					<li class="list-unstyled li-sub-mega">
																						<a href="./collections.html">Healthy &amp; Beauty</a>
																					</li>
																				</ul>
																			</li>
																			<li class="mega3-collumn2">
																				<ul>
																					<li class="list-title">Pages</li>
																					<li class="list-unstyled li-sub-mega">
																						<a href="./collections.html">Shopping cart</a>
																					</li>
																					<li class="list-unstyled li-sub-mega">
																						<a href="./cart.html">Checkout</a>
																					</li>
																					<li class="list-unstyled li-sub-mega">
																						<a href="./cart.html">Track order</a>
																					</li>
																					<li class="list-unstyled li-sub-mega">
																						<a href="./account.html">My account</a>
																					</li>
																					<li class="list-unstyled li-sub-mega">
																						<a href="./login.html">Login</a>
																					</li>
																					<li class="list-unstyled li-sub-mega">
																						<a href="./register.html">Register</a>
																					</li>
																				</ul>
																			</li>
																		</ul>
																	</div>
																</li>
																<li class="nav-item  navigation_mobile">
																	<a href="./super-deal.html" class="menu-mobile-link">
																		Top Brands
																	</a>
																	<a href="javascript:void(0)" class="arrow">
																		<i class="fa fa-angle-down"></i>
																	</a>
																	<div class="menu-mobile-container" style="display: none;">
																		<ul class="sub-mega-menu">
																			<li class="mega4-collumn1">
																				<ul>
																					<li class="list-title">Blogs</li>
																					<li class="list-unstyled li-sub-mega">
																						<a href="./blog.html">Home &amp; Garden</a>
																					</li>
																					<li class="list-unstyled li-sub-mega">
																						<a href="./blog.html">Baby &amp; Mom</a>
																					</li>
																					<li class="list-unstyled li-sub-mega">
																						<a href="./blog.html">Beauty &amp; Skin Care</a>
																					</li>
																					<li class="list-unstyled li-sub-mega">
																						<a href="./blog.html">Food</a>
																					</li>
																					<li class="list-unstyled li-sub-mega">
																						<a href="./blog.html">News</a>
																					</li>
																					<li class="list-unstyled li-sub-mega">
																						<a href="./blog.html">Smartphone &amp; Tablet</a>
																					</li>
																					<li class="list-unstyled li-sub-mega">
																						<a href="./blog.html">Furniture</a>
																					</li>
																				</ul>
																			</li>
																			<li class="mega4-collumn2">
																				<ul>
																					<li class="list-title">List Pages</li>
																					<li class="list-unstyled li-sub-mega">
																						<a href="./about-us.html">About us</a>
																					</li>
																					<li class="list-unstyled li-sub-mega">
																						<a href="./contact.html">Contact</a>
																					</li>
																					<li class="list-unstyled li-sub-mega">
																						<a href="./faqs.html">FAQs</a>
																					</li>
																					<li class="list-unstyled li-sub-mega">
																						<a href="./lookbook.html">Lookbook</a>
																					</li>
																					<li class="list-unstyled li-sub-mega">
																						<a href="./price-table.html">Price Table</a>
																					</li>
																					<li class="list-unstyled li-sub-mega">
																						<a href="./services.html">Services</a>
																					</li>
																					<li class="list-unstyled li-sub-mega">
																						<a href="./super-deal.html">Super Deal</a>
																					</li>
																				</ul>
																			</li>
																		</ul>
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
						</div>
					</div>
				</section>
				<section class="navigation-header">
					<div class="navigation-header-wrapper">
						<div class="container clearfix">
							<div class="row">
								<div class="main-navigation-inner">
									<div class="navigation_area">
										<div class="navigation_left">
											<div class="group_navbtn">
												<a href="./collections.html" class="dropdown-toggle" data-toggle="dropdown">                     
													<span class="dropdown-toggle">
													  Danh Mục
													</span>
													<i class="fa fa-bars" aria-hidden="true"></i>
												</a>
												<ul class="navigation_links_left dropdown-menu" style="display: none;">
													@foreach ($cates as $cate)
													<li class="nav-item _icon">
														<a href="{{route('slug.url',['slug'=> $cate->getSlug()])}}">
															<span>{{$cate->ten_danh_muc}}</span>
														</a>
													</li>
													@endforeach
												</ul>
											</div>
										</div>
										<div class="navigation_right">
											<ul class="navigation_links">
												<li class="nav-item active">
													<a href="{{route('index')}}">
														<span>Trang chủ</span>
													</a>
												</li>
												<li class="nav-item dropdown navigation">
													<a href="./blog.html" class="dropdown-toggle dropdown-link" data-toggle="dropdown">
														<span>Mệnh</span>
														<i class="fa fa-angle-down"></i>
														<i class="sub-dropdown1  visible-sm visible-md visible-lg"></i>
														<i class="sub-dropdown visible-sm visible-md visible-lg"></i>
													</a>
													<ul class="dropdown-menu">
														@foreach ($menh as $m)
														<li class="li-sub-mega">
															<a tabindex="-1" href="{{route('slug.url',['slug'=> $m->getSlug()])}}">{{$m->ten_menh}}</a>
														</li>
														@endforeach
													</ul>
												</li>
												<li class="nav-item active">
													<a href="{{route('khuyenmai')}}">
														<span>Khuyến mãi</span>
													</a>
												</li>
												<li class="nav-item active">
													<a href="{{route('tin.tuc.bo.ich')}}">
														<span>Tin Tức</span>
													</a>
												</li>
												@foreach ($info as $i)
													<li class="nav-item active">
													<a href="{{route('info',['id'=>$i->id])}}">
														<span>{{$i->danh_muc}}</span>
													</a>
												</li>
												@endforeach
												
												
											</ul>
										</div>
										<div class="navigation_icon">
											<div class="navigation_icon_group">
												<div class="icon_cart">
													<div class="cart-info-group">
														<a href="./cart.html" class="cart dropdown-toggle dropdown-link" data-toggle="dropdown">
															<i class="sub-dropdown1 visible-sm visible-md visible-lg"></i>
															<i class="sub-dropdown visible-sm visible-md visible-lg"></i> 
															<div class="num-items-in-cart">
																<div class="items-cart-left">
																	<img class="cart_img" src="{{ asset('images/bg-cart.png') }}" alt="Image Cart" title="Image Cart">
																	<span class="cart_text icon"><span class="number">
																		@php
																			$countCart = count($cart);
																			echo $countCart;
																		@endphp
																	</span></span>       
																</div>
															</div>
														</a>
														<div class="dropdown-menu cart-info">
															<div class="cart-content">
																<div class="items control-container">
																	@if (count($cart))
																		@foreach ($cart as $key => $item)
																		<div class="row">
																			<a class="cart-close" title="Remove" href="{{route('removeCart',$item->rowId)}}">
																				<i class="fa fa-times"></i>
																			</a>
																			<div class="cart-left">
																				<a class="cart-image" href="./product.html">
																					<img src="" alt="" title="">
																				</a>
																			</div>
																			<div class="cart-right">
																				<div class="cart-title"><a href="./product.html">{{$item->name}}</a></div>
																				<div class="cart-price"><span class="money" data-currency-usd="$200.00" data-currency="USD">{{$item->price}}</span><span class="x"> x{{$item->qty}}</span></div>
																			</div>
																		</div>
																		@endforeach
																	@endif
																	
																</div>
																<div class="subtotal"><span>Tổng Tiền:</span><span class="cart-total-right money" data-currency-usd="$600.00" data-currency="USD">{{$total}} Đ</span></div>
																<div class="action"><button class="btn" onclick="window.location='{{route('showCart')}}'">View Cart<i class="fa fa-caret-right"></i></button><button class="btn float-right" onclick="window.location='./cart.html'">CHECKOUT<i class="fa fa-caret-right"></i></button></div>
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
				</section>
			</div>
			<script>
				function addaffix(scr) {
					if ($(window).innerWidth() >= 992) {
						if (scr > 170) {
							if (!$('#top').hasClass('affix')) {
								$('#top').addClass('affix').addClass('fadeInDown animated');
							}
						} else {
							if ($('#top').hasClass('affix')) {
								$('#top').prev().remove();
								$('#top').removeClass('affix').removeClass('fadeInDown animated');
							}
						}
					} else $('#top').removeClass('affix');
				}
				$(window).scroll(function() {
					var scrollTop = $(this).scrollTop();
					addaffix(scrollTop);
				});
				$(window).resize(function() {
					var scrollTop = $(this).scrollTop();
					addaffix(scrollTop);
				});
			</script>
		</div>
	</header>