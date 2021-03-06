@extends('layouts.users.main')
@section('title','Login')
@section('content')

	<div class="page-container" id="PageContainer">
		<main class="main-content" id="MainContent" role="main">
			<section class="collection-heading heading-content ">
				<div class="container">
					<div class="row">
						<div class="collection-wrapper">
							<h1 class="collection-title"><span>Login</span></h1>
							<div class="breadcrumb-group">
								<div class="breadcrumb clearfix">
									<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
										<a href="./index.html" title="Bridal 1" itemprop="url">
											<span itemprop="title">Home</span>
										</a>
									</span>
									<span class="arrow-space">></span>
									<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
										<a href="./login.html" title="Login" itemprop="url">
											<span itemprop="title">Login</span>
										</a>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="login-content">
				<div class="login-content-wrapper">
					<div class="container">
						<div class="row">
							<div class="login-content-inner">
								<div id="customer-login">
									<div id="login" class="">
										<form id="customer_login1" action="./account.html" accept-charset="UTF-8">
											<input type="hidden" value="customer_login" name="form_type">
											<input type="hidden" name="utf8" value="✓">
											<label for="customer_email" class="label">Email</label>
											<input type="email" value="" name="customer[email]" id="customer_email" class="text">
											<label for="customer_password" class="label">Password</label>
											<input type="password" value="" name="customer[password]" id="customer_password" class="text" size="16">
											<div class="action_bottom">
												<input class="btn" type="submit" value="Sign In">
												<a href="#" onclick="showRecoverPasswordForm();return false;">Forgot your password?</a>
											</div>
										</form>
									</div>
									<div id="recover-password" style="display:none;" class="">
										<h2>Reset Password</h2>
										<p class="note">We will send you an email to reset your password.</p>
										<form method="post">
											<input type="hidden" value="recover_customer_password" name="form_type">
											<input type="hidden" name="utf8" value="✓">
											<label class="label">Email</label>
											<input type="email" value="" size="30" name="email" id="recover-email" class="text">
											<div class="action_bottom">
												<input class="btn" type="submit" value="Submit"> or
												<span class="note"><a href="#" onclick="hideRecoverPasswordForm();return false;">Cancel</a></span>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<script type="text/javascript">
				function showRecoverPasswordForm() {
					document.getElementById('recover-password').style.display = 'block';
					document.getElementById('login').style.display = 'none';
				}

				function hideRecoverPasswordForm() {
					document.getElementById('recover-password').style.display = 'none';
					document.getElementById('login').style.display = 'block';
				}

				if (window.location.hash == '#recover') {
					showRecoverPasswordForm()
				}
			</script>
		</main>
	</div>

@endsection