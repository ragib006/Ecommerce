@extends('admin.admin_layout')
@section('admin_content')



			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span></h2>



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
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>

					<div class="box-content">
						<form class="form-horizontal" action="{{url('/add_slider_form_action')}}" method="post" enctype="multipart/form-data">

                    {{ csrf_field() }}

						  <fieldset>
								<div class="control-group">
									 <label class="control-label" for="date01">Slider Name :</label>
									 <div class="controls">
									 <input type="text" class="input-xlarge" name="slider_name">
									 </div>
								 </div>


								 <div class="control-group">
									 <label class="control-label" for="date01">Slider Title :</label>
									 <div class="controls" >
									 <input type="text"  style="width:500px;"     class="input-xlarge" name="slider_title">
									 </div>
								 </div>

								 <div class="control-group">
									 <label class="control-label" for="date01">Slider Subtitle :</label>
									 <div class="controls">
									 <input type="text" style="width:500px; height:100px;"  class="input-xlarge" name="slider_subtitle">
									 </div>
								 </div>



              <div class="control-group">
                <label class="control-label" for="fileInput">Slider Image</label>
                <div class="controls">
                <input class="input-file uniform_on" name="slider_image" id="fileInput" type="file" required="">
                </div>
              </div>


              <div class="control-group hidden-phone">
                <label class="control-label" for="textarea2">Publication Status</label>
                <div class="controls">
                <input type="checkbox" name="publication_status" value="1" required="">
                </div>
              </div>


							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Done</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>

					</div>



				</div><!--/span-->

			</div><!--/row-->




@endsection
