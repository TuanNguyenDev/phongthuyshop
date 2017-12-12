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

@endsection