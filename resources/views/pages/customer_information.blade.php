@extends('layout')
@section('content')





	<section id="cart_items">
		<div class="container">

      <div class="step-one">
				<p style="margin-top:20px;">FILL UP THIS FORM</p>
			</div>


			<div class="register-req">

			</div><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">

					<div class="col-sm-8 clearfix">
						<div class="bill-to">
							<p>Shipping Address</p>
							<div class="form-one">
								<form action="{{url('/customer_information_form_action')}}" method="post">

									  {{ csrf_field() }}

									<input type="text" placeholder="Email" name="shipping_email" style="background:white;" required="">

									<input type="text" placeholder="First Name" name="shipping_first_name" style="background:white;"  required="">

									<input type="text" placeholder="Last Name" name="shipping_last_name" style="background:white;"  required="">
									<input type="text" placeholder="Address" name="shipping_address" style="background:white;"  required="">
							 <input type="text" placeholder="Phone Number" name="shipping_phone" style="background:white;"  required="">
                <input type="text" placeholder="City" name="shipping_city" style="background:white;"  required="">

              <input type="submit" value="Done" class="btn btn-default">

								</form>
							</div>


						</div>
					</div>

				</div>
			</div>
			<div class="review-payment">
				<h2 style="margin-bottom:40px;">Review & Payment</h2>
			</div>


			<div class="payment-options">
					<span>
						<label><input type="checkbox"> Direct Bank Transfer</label>
					</span>
					<span>
						<label><input type="checkbox"> Check Payment</label>
					</span>
					<span>
						<label><input type="checkbox"> Paypal</label>
					</span>
				</div>
		</div>
	</section> <!--/#cart_items-->














@endsection
