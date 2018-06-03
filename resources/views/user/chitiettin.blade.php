@extends('layouts.users.main')
@section('title','Tin túc hữu ích khi mua hàng')
@section('content')
<div class="container">
	<div class="col-md-12" style="margin-top:0px  30px;">
		<p style="font-size: 28px;">{{$tin->tieu_de}}</p>
		<h2>Người viết: {{get_admin_name($tin->id_tac_gia)}}, {{$tin->created_at}}</h2>
		<p>--------------------------------------------------------------------------</p>
		<p>{!!$tin->noi_dung!!}</p>
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
								<div class="spr-content">
									@if (isset(Auth::user()->name))
										<div class="spr-form" id="form_6537875078" >
											<form method="post" action="{{route('comment.tintuc')}}"  class="new-review-form">
												{{csrf_field()}}
												<input type="hidden" name="id_khach" value="{{Auth::id()}}">
												<input type="hidden" name="id_tin_tuc" value="{{$tin->id}}">
												<h3 class="spr-form-title">Write a review</h3>
												
												<fieldset class="spr-form-review">
													<div class="spr-form-review-body">
														<label class="spr-form-label" for="review_body_6537875078">Body of Review <span class="spr-form-review-body-charactersremaining"></span></label>
														<div class="spr-form-input">
															<textarea class="spr-form-input spr-form-input-textarea " id="review_body_6537875078" data-product-id="6537875078" name="noi_dung" rows="10" placeholder="Write your comments here" required></textarea>
														</div>
													</div>
												</fieldset>
												<fieldset class="spr-form-actions">
													<button type="submit" class="spr-button spr-button-primary button button-primary btn btn-primary">Bình luận</button>
												</fieldset>
											</form>
										</div>
									@else
										<a href="{{route('login')}}" class="btn btn-success">Đăng nhập để bình luận</a>
									@endif
									<div class="spr-reviews" id="reviews_6537875078">
										{{-- @php
											dd($comment_tin_tuc);
										@endphp --}}
										@foreach ($comment_tin_tuc as $c)
											<div class="spr-review" id="spr-review-7003642">
												<div class="spr-review-header">
													<h3 class="spr-review-header-title">{{get_customer_name($c->id_khach)}}</h3>
													<span class="spr-review-header-byline"> on <strong>{{$c->created_at}}</strong></span>
												</div>
												<div class="spr-review-content">
													<p class="spr-review-content-body">{{$c->noi_dung}}</p>
												</div>
												
											</div>
										@endforeach
										<div class="pagination">
											{{$comment_tin_tuc->links()}}
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
@endsection