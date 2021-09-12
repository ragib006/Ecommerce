@extends('admin.admin_layout')
@section('admin_content')



			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>



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
						<form class="form-horizontal" action="{{url('/add_product_form_action')}}" method="post" enctype="multipart/form-data">

                    {{ csrf_field() }}

						  <fieldset>

							<div class="control-group">
							  <label class="control-label" for="date01">Product Name</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="product_name">
							  </div>
							</div>

              <div class="control-group">
 								<label class="control-label" for="selectError3">Category</label>
 								<div class="controls">





                  <?php

                    $product_all_category_show=DB::table('tb1_category')
                                            ->where('publication_status',1)
                                             ->get();

                  ?>




 								  <select id="selectError3" name="category_id">



                  @foreach($product_all_category_show as $v_category)

 									<option value="{{$v_category->category_id}}">{{$v_category->category_name}}</option>

                     @endforeach
 								  </select>

 								</div>
 							  </div>
                <div class="control-group">
 								<label class="control-label" for="selectError3">Brand Name</label>

                <?php

                  $product_all_brand_show=DB::table('tb1_brand')
                                          ->where('publication_status',1)
                                           ->get();

                ?>

 								<div class="controls">
 								  <select id="selectError3" name="brand_id">

                    @foreach($product_all_brand_show as $v_brand)

   									<option value="{{$v_brand->brand_id}}">{{$v_brand->brand_name}}</option>

                       @endforeach


 								  </select>
 								</div>
 							  </div>

				      	<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Product Short Description</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3" name="product_shotr_description"></textarea>
							  </div>
						  	</div>

                <div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Product Long Description</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3" name="product_long_description"></textarea>
							  </div>
						  	</div>





              <div class="control-group">
							  <label class="control-label" for="date01">Product Price</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="product_price">
							  </div>
							</div>

              <div class="control-group">
                <label class="control-label" for="date01">Product Size</label>
                <div class="controls">
                <input type="text" class="input-xlarge" name="product_size">
                </div>
              </div>


							<div class="control-group">
								<label class="control-label" for="date01">Product Weight</label>
								<div class="controls">
								<input type="text" class="input-xlarge" name="product_weight">
								</div>
							</div>




              <div class="control-group">
                <label class="control-label" for="date01">Product Color</label>
                <div class="controls">
                <input type="text" class="input-xlarge" name="product_color">
                </div>
              </div>


              <div class="control-group">
                <label class="control-label" for="fileInput">Product Image</label>
                <div class="controls">
                <input class="input-file uniform_on" name="product_image" id="fileInput" type="file">
                </div>
              </div>


              <div class="control-group hidden-phone">
                <label class="control-label" for="textarea2">Publication Status</label>
                <div class="controls">
                <input type="checkbox" name="publication_status" value="1">
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
