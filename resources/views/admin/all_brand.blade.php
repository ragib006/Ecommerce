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
								  <th>Brand Id</th>
								  <th>Brand Name</th>
								  <th>Brand Description</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>

							@foreach($all_brand_info as $v_brand)
						  <tbody>
							<tr>
								<td>{{$v_brand->brand_id}}</td>
								<td class="center">{{$v_brand->brand_name}}</td>
								<td class="center">{{$v_brand->brand_description}}</td>
								<td class="center">
									@if($v_brand->publication_status==1)
									<span class="label label-success">{{'Active'}}</span>

									@else
											<span class="label label-danger" >{{'Not Active'}}</span>
									@endif
								</td>




								<!--icon   -->

								<td class="center">
								  	@if($v_brand->publication_status==1)
									<a class="btn btn-success"  href="{{URL::to('/active_brand_unactive_route/'.$v_brand->brand_id)}}">
										<i class="halflings-icon white thumbs-down"></i>

										@else
										<a class="btn btn-danger" href="{{URL::to('/unactive_brand_active_route/'.$v_brand->brand_id)}}">
											<i class="halflings-icon white thumbs-up"></i>
                    @endif

									</a>




									<a class="btn btn-info" href="{{URL::to('/brand_edit/'.$v_brand->brand_id)}}">

													<i class="halflings-icon white edit"></i>
									</a>


									<a class="btn btn-info" id="delate" href="{{URL::to('/brand_delate/'.$v_brand->brand_id)}}">
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
