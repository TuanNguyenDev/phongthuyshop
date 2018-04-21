@extends('layouts.users.main')
@section('title','Product')
@section('content')

	<div class="page-container" id="PageContainer">
		<main class="main-content" id="MainContent" role="main">
			<section class="collection-heading heading-content ">
				<div class="container">
					<div class="row">
						<div class="collection-wrapper">
							<h1 class="collection-title"><span>Contact</span></h1>
							<div class="breadcrumb-group">
								<div class="breadcrumb clearfix">
									<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
										<a href="./index.html" title="Sarahmarket 1" itemprop="url"><span itemprop="title">Home</span></a>
									</span>
									<span class="arrow-space">></span>
									<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
										<a href="./contact.html" title="Contact" itemprop="url"><span itemprop="title">Contact</span></a>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="contact_banner_show-content">
				<div class="blcontact_banner_showog-wrapper">
					<div class="container">
						<div class="row">
							<div class="contact_banner_show-inner">
								<div id="page">
									<div class="page-with-contact-form">
										<div id="shopify-section-contact-template" class="shopify-section">
											<div class="google-maps-content col-md-6">
												<div class="google-maps-wrapper">
													<div class="google-maps-inner">
														<div id="contact_map" class="map">
														</div>
													</div>
												</div>
											</div>
											<div class="contact-form-group col-md-6">
												<form method="post" action="{{route('send.contact')}}" id="contact_form" class="contact-form" accept-charset="UTF-8" onSubmit="alert('Thank you for your feedback!');">
													{{csrf_field()}}
													<div id="contactFormWrapper">
														
														<p>
															<input type="text"  name="ten" 
															@if (isset(Auth::user()->name))
																value="{{Auth::user()->name}}"
															@endif placeholder="Name" required>
														</p>
														<p>
															<input type="email" id="contactFormEmail" name="email" 
															@if (isset(Auth::user()->name))
																value="{{Auth::user()->email}}"
															@endif placeholder="Email" required>
														</p>
														<p>
															<input id="contactFormTelephone" 
															@if (isset(Auth::user()->name))
																value="{{Auth::user()->sdt}}"
															@endif 
															name="sdt" placeholder="Phone" required >
														</p>
														<p>
															<textarea rows="15" cols="75" id="contactFormMessage" name="noi_dung" required placeholder="Your message"></textarea>
														</p>
														<p>
															<input type="submit" id="contactFormSubmit" value="Send" class="btn">
														</p>
													</div>
												</form>
											</div>
											<script>
												$(window).ready(function($) {
													if (jQuery().gMap) {
														if ($('#contact_map').length) {
															$('#contact_map').gMap({
																zoom: 17,
																scrollwheel: false,
																maptype: 'ROADMAP',
																markers: [{
																	address: '474 Ontario St Toronto, ON M4X 1M7 Canada',
																	html: '_address'
																}]
															});
														}
													}
												});
											</script>
										</div>
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