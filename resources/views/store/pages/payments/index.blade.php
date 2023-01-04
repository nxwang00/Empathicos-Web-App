@extends('store.layouts.master')
@section('title', '| Payment')
@section('page-css-link')
@endsection
@section('page-css')
@endsection
@section('main-content')
<!-- Page Container -->
<div class="pagecnt-in">
	<div class="container">
		<div class="paymentpage-wrap">
			<div class="page-title">
				<h2>Payment</h2>
			</div>
			<div class="form-theme payform-wrap">
				<div class="formtheme-in">
					<div class="payform-title">
						<div class="payformtitle-in">
							<h2>Your Order</h2>
						</div>
					</div>
					<div class="payform-form">
						<div class="payform-formin">
							<div class="row payformval-row">
								<div class="payformval-col">
									<label>Order Value</label>
								</div>
								<div class="payformprice-col">
									<span>${{ number_format(Cart::getTotal(),2)}}</span>
								</div>
							</div>
							<div class="row payformval-row">
								<div class="payformval-col">
									<label>Shipping charges</label>
								</div>
								<div class="payformprice-col">
									<span>${{ number_format(get_setting_field('shipping_charges'),2)}}</span>
								</div>
							</div>
							<div class="row payformvalsprtr-row">
								<div class="payformvalsprtr-col">
									<div class="payformval-sprtr"></div>
								</div>
							</div>
							<div class="row payformval-row">
								<div class="payformval-col">
									<label>Total</label>
								</div>
								<div class="payformprice-col payformvalresult-col">
									<span>${{ number_format(Cart::getTotal() + get_setting_field('shipping_charges'),2)}}</span>
								</div>
							</div>
							<div class="row payformval-field">
								<div class="payformvalfield-col">
									<div class="checkbox-wrap">
										<div class="checkbox">
											<input name="payment-method" name="payment_method" checked="true" value="stripe" type="radio">
											<label>Credit card</label>
										</div>
										<div class="checkbox">
											<input name="payment-method" name="payment_method" value="paypal" type="radio">
											<label>Paypal</label>
										</div>
									</div>
								</div>
							</div>
							<div class="payment stripe">
								<form role="form" action="{{ route('payments.process') }}" method="post" class="validation"  data-cc-on-file="false"  data-stripe-publishable-key="{{ env('STRIPE_PUBLISH_KEY') }}" id="payment-form">
									@csrf
									<div class='form-row row'>
										<div class='col-xs-12 form-group required'>
											<label class='control-label' style="display: none;">Name on Card</label>
											<input placeholder="Name on Card" class='form-control' size='4' type='text'>
										</div>
									</div>
									<div class='form-row row'>
										<div class='col-xs-12 form-group card required'>
											<label class='control-label' style="display: none;">Card Number</label>
											<input autocomplete='off' placeholder="Card Number" class='form-control card-num' size='20' type='text'>
										</div>
									</div>
									<div class='form-row row'>
										<div class='col-xs-12 col-md-4 form-group cvc required'>
											<label class='control-label' style="display: none;">CVC</label>
											<input autocomplete='off' class='form-control card-cvc' placeholder='e.g 415' size='4' type='text'>
										</div>
										<div class='col-xs-12 col-md-4 form-group expiration required'>
											<label class='control-label' style="display: none;">Expiration Month</label>
											<input class='form-control card-expiry-month' placeholder='MM' size='2'
											type='text'>
										</div>
										<div class='col-xs-12 col-md-4 form-group expiration required'>
											<label class='control-label' style="display: none;">Expiration Year</label> <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
										</div>
									</div>
									<div class='form-row row'>
										<div class='col-md-12 hide error form-group'>
											<div class='alert-danger alert'>Fix the errors before you begin.</div>
										</div>
									</div>
									<div class="paysbtn-wrap">
										<button type="submit" class="btn btn-default btn-theme1">PAY</button>
									</div>
								</form>
							</div>
							<div class="payment paypal" style="display: none;">
								<div class="row payformval-field">
									<div class="payformvalfield-col">
										<div class="form-group payformval-paypal">
											<a href="javascript:void(0);" onclick="event.preventDefault(); document.getElementById('pay-with-paypal').submit();">
			                                    <img class="img-responsive" src="{{asset('/assets/store/images/paypal-link.png')}}" alt="" />
			                                </a>
			                                <form action="{{ route('payments.paypal') }}" id="pay-with-paypal" method="POST" style="display: none;">
			                                    {{ csrf_field() }}
			                                </form>
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
<!-- Page Container -->
@endsection
@section('page-js-link')
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
@endsection
@section('page-js')
<script type="text/javascript">
	$(document).ready(function(){
		$('input[type="radio"]').click(function(){
			var inputValue = $(this).attr("value");
			var targetBox = $("." + inputValue);
			$(".payment").not(targetBox).hide();
			$(targetBox).show();
		});
	});
	$(function() {
		var $form         = $(".validation");
		$('form.validation').bind('submit', function(e) {
			var $form         = $(".validation"),
			inputVal = ['input[type=email]', 'input[type=password]',
			'input[type=text]', 'input[type=file]',
			'textarea'].join(', '),
			$inputs       = $form.find('.required').find(inputVal),
			$errorStatus = $form.find('div.error'),
			valid         = true;
			$errorStatus.addClass('hide');
			$('.is-invalid').removeClass('is-invalid').css('border','none');
			$inputs.each(function(i, el) {
				var $input = $(el);
				if ($input.val() === '') {
					$input.addClass('is-invalid').css('border','1px solid red');
					$errorStatus.removeClass('hide');
					e.preventDefault();
				}
			});
			if (!$form.data('cc-on-file')) {
				e.preventDefault();
				Stripe.setPublishableKey($form.data('stripe-publishable-key'));
				Stripe.createToken({
					number: $('.card-num').val(),
					cvc: $('.card-cvc').val(),
					exp_month: $('.card-expiry-month').val(),
					exp_year: $('.card-expiry-year').val()
				}, stripeHandleResponse);
			}
		});
		function stripeHandleResponse(status, response) {
			if (response.error) {
				$('.error')
				.removeClass('hide')
				.find('.alert')
				.text(response.error.message);
			} else {
				var token = response['id'];
				$form.find('input[type=text]').empty();
				$form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
				$form.get(0).submit();
			}
		}
	});
</script>
@endsection