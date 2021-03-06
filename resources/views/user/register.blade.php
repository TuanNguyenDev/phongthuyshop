@extends('layouts.users.main')
@section('title','Register')
@section('content')

	<div class="page-container" id="PageContainer">
		<main class="main-content" id="MainContent" role="main">
			<section class="collection-heading heading-content ">
				<div class="container">
					<div class="row">
						<div class="collection-wrapper">
							<h1 class="collection-title"><span>Create Account</span></h1>
							<div class="breadcrumb-group">
								<div class="breadcrumb clearfix">
									<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
										<a href="./index.html" title="Bridal 1" itemprop="url">
											<span itemprop="title">Home</span>
										</a>
									</span>
									<span class="arrow-space">></span>
									<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
										<a href="./register.html" title="Create Account" itemprop="url">
											<span itemprop="title">Create Account</span>
										</a>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="register-content">
				<div class="register-wrapper">
					<div class="container">
						<div class="row">
							<div class="register-inner">
								<div id="customer-register">
									<div id="register" class="">
										<form method="post" action="./register.html" id="create_customer" accept-charset="UTF-8"><input type="hidden" value="create_customer" name="form_type"><input type="hidden" name="utf8" value="✓">
											<div id="first_name1" class="clearfix large_form">
												<label for="first_name2" class="label">First Name</label>
												<input type="text" value="" name="customer[first_name]" id="first_name2" class="text" size="30">
											</div>
											<div id="last_name1" class="clearfix large_form">
												<label for="last_name2" class="label">Last Name</label>
												<input type="text" value="" name="customer[last_name]" id="last_name2" class="text" size="30">
											</div>
											<div id="email1" class="clearfix large_form">
												<label for="email2" class="label">Email</label>
												<input type="email" value="" name="customer[email]" id="email2" class="text" size="30">
											</div>
											<div id="password1" class="clearfix large_form">
												<label for="password2" class="label">Password</label>
												<input type="password" value="" name="customer[password]" id="password2" class="password text" size="30">
											</div>
											<div class="action_bottom">
												<input class="btn" type="submit" value="Create"> or
												<span class="note"><a href="./index.html">Return to Store</a></span>
											</div>
										</form>
									</div>
									<!-- #register -->
								</div>
								<!-- #customer-register -->
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
	</div>

@endsection