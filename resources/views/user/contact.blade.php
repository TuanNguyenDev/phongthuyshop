@extends('layouts.users.main')
@section('title','Phản Hồi')
@section('content')

	<div class="page-container" id="PageContainer">
		<main class="main-content" id="MainContent" role="main">
			<section class="collection-heading heading-content ">
				<div class="container">
					<div class="row">
						<div class="collection-wrapper">
							<h1 class="collection-title"><span>Phản Hồi</span></h1>
							<div class="breadcrumb-group">
								<div class="breadcrumb clearfix">
									<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
										<a href="{{route('index')}}" title="Sarahmarket 1" itemprop="url"><span itemprop="title">Home</span></a>
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
															<p>Hãy phản hồi cho chúng tôi những ý kiến của bạn để shop ngày một hoàn thiện hơn!</p>
															<h1>Cám ơn bạn rất nhiều vì đã tin tưởng Shop</h1>
														</div>
													</div>
												</div>
											</div>
											<div class="contact-form-group col-md-12">
												<form method="post" action="{{route('send.contact')}}" id="contact_form" class="contact-form" accept-charset="UTF-8" onSubmit="alert('Thank you for your feedback!');">
													{{csrf_field()}}
													<div id="contactFormWrapper">
														
														<p>
															<input type="text" id="ten"  name="ten" 
															@if (isset(Auth::user()->name))
																value="{{Auth::user()->name}}"
															@endif placeholder="Name" required>
														</p>
														<p>
															<input type="email" id="email" name="email" 
															@if (isset(Auth::user()->name))
																value="{{Auth::user()->email}}"
															@endif placeholder="Email" required>
														</p>
														<p>
															<input id="sdt" 
															@if (isset(Auth::user()->name))
																value="{{Auth::user()->sdt}}"
															@endif 
															name="sdt" placeholder="Phone" required >
														</p>
														<p>
															<textarea rows="15" cols="75" id="noi_dung" name="noi_dung" required placeholder="Your message"></textarea>
														</p>
														<p>
															<input type="submit" id="contactFormSubmit" onclick="return validate()" value="Send" class="btn">
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
@section('user_js')
<script type="text/javascript">
	function validate(){
		var name = document.getElementById("ten").value;
		var noi_dung = document.getElementById("noi_dung").value;
		var sdt = document.getElementById("sdt").value;
		var email = document.getElementById("email").value;
		if(name == ""){
			alert("Hãy nhập tên");
			return false;
		}
		if(noi_dung == ""){
			alert("Hãy nhập nội dung phản hồi");
			return false;
		}
		if(sdt == ""){
			alert("Hãy nhập số điện thoại");
			return false;
		}
		if(email == ""){
			alert("Hãy nhập email");
			return false;
		}
	}
</script>
@endsection