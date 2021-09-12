@extends('admin.admin_layout')
@section('admin_content')




			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Order</a></li>
			</ul>


			<p class="alert-danger" style="padding-left:30px;width:350px;">
							<?php
							$exception=Session::get('exception');
							if($exception)
							{
							echo $exception;
							Session::put('exception',null);
							}
							?>
							</p>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Order Id</th>
								  <th>Customer Name</th>
								  <th>Order Total</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>

							@foreach($order as $v_order)
						  <tbody>
							<tr>

              	<td class="center">{{$v_order->order_id}}</td>
								<td class="center">{{$v_order->customer_name}}</td>
								<td class="center">{{$v_order->order_total}}</td>
              	<td class="center">{{$v_order->order_status}}</td>






								<td class="center">
									@if($v_order->order_status==1)
									<span class="label label-success">{{'payment ok'}}</span>

									@else
											<span class="label label-danger" >{{'pending'}}</span>
									@endif
								</td>




								<!--icon   -->

								<td class="center">
								  	@if($v_order->order_status==1)
									<a class="btn btn-success"  href="{{URL::to('/active_order_unactive_route/'.$v_order->order_id)}}">
										<i class="halflings-icon white thumbs-down"></i>

										@else
										<a class="btn btn-danger" href="{{URL::to('/unactive_order_active_route/'.$v_order->order_id)}}">
											<i class="halflings-icon white thumbs-up"></i>
                    @endif

									</a>




									<a class="btn btn-info" href="{{URL::to('/view_order/'.$v_order->order_id)}}">

													<i class="halflings-icon white edit"></i>
									</a>


									<a class="btn btn-info" id="delate" href="{{URL::to('/order_delate/'.$v_order->order_id)}}">
								 				<i class="halflings-icon white trash"></i>
									</a>



								</td>
							</tr>





						  </tbody>
						@endforeach
					  </table>
					</div>
				</div><!--/span-->

			</div><!--/row-->



















@endsection
