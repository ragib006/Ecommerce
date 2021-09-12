@extends('admin.admin_layout')
@section('admin_content')




			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Tables</a></li>
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
						<h2><i class="halflings-icon user"></i><span class="break"></span>Slider</h2>
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
								  <th style="width:120px;text-align:center;" >Slider Id</th>

								  <th style="text-align:center">Slider Image</th>
			            <th style="text-align:center">Status</th>
								  <th style="text-align:center;width:200px;">Actions</th>

							  </tr>
						  </thead>

							@foreach($all_slider_info as $v_slider)
						  <tbody>
							<tr>
								<td style="text-align:center">{{$v_slider->slider_id}}</td>

                <td ><img style="height:70px;width:150px; margin-left:140px;" src="{{URL::to($v_slider->slider_image)}}"></td>



								<td class="center" style="text-align:center;padding-top:30px;">
									@if($v_slider->publication_status==1)
									<span class="label label-success">{{'Active'}}</span>

									@else
											<span class="label label-danger" >{{'Not Active'}}</span>
									@endif
								</td>




								<!--icon   -->

								<td class="center" style="padding-left:70px;padding-top:20px;">
										@if($v_slider->publication_status==1)
									<a class="btn btn-success"  href="{{URL::to('/active_slider_unactive_route/'.$v_slider->slider_id)}}">
										<i class="halflings-icon white thumbs-down"></i>
										@else
										<a class="btn btn-danger" href="{{URL::to('/unactive_slider_active_route/'.$v_slider->slider_id)}}">
											<i class="halflings-icon white thumbs-up"></i>
										@endif

									</a>







									<a class="btn btn-info" id="delate" href="{{URL::to('/slider_delate/'.$v_slider->slider_id)}}">
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
