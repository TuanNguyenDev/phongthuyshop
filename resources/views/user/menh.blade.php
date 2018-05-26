@extends('layouts.users.main')
@section('title','Mệnh')
@section('content')
<div class="page-container" id="PageContainer">
	<main class="main-content" id="MainContent" role="main">
			<section class="collection-heading heading-content ">
				<div class="container">
					<div class="row">
							<div class="text-center col-md-12">
								<p style="font-size: 28px;">Danh Mục {{$menh->ten_menh}}</p>
							</div>
							<div class="col-md-12">
								<p>{!!$menh->mo_ta!!}</p>
							</div>
					</div>
				</div>
			</section>
	</main>	
	<main class="main-content" id="MainContent" role="main">
		<section class="collection-heading heading-content ">
			<div class="container">
				<div class="row">
					<div class="collection-wrapper">
						<h1 class="collection-title"><span>Tìm thấy {{count($count)}} sản phẩm </span></h1>
						<div class="breadcrumb-group">
							<div class="breadcrumb clearfix">
								<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="{{route('index')}}" title="Bridal 1" itemprop="url"><span itemprop="title">Home</span></a>
								</span>
								<span class="arrow-space">></span>
								<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
									<a href="./search.html" title="Search for:  'Electronic equipment'" itemprop="url">
										<span itemprop="title">Mệnh {{$menh->ten_menh}}</span>
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
									@foreach ($product as $key => $p)
									<div class="product-item-wrapper col-sm-3">
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
								<div class="pager">
									<div class="col-md-12">
										{{$product->links()}}
									</div>
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