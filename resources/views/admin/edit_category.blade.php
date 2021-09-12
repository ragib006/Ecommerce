@extends('admin.admin_layout')
@section('admin_content')



			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>

					<div class="box-content">
						<form class="form-horizontal" action="{{ url('/category_edit_form_action',$description_category->category_id) }}" method="post">

                    {{ csrf_field() }}

						  <fieldset>

							<div class="control-group">
							  <label class="control-label" for="date01">Category Name</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="category_name" value="{{($description_category->category_name)}}">
							  </div>
							</div>

				      	<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Category Description</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3" name="category_description" >

                       {{($description_category->category_description)}}
								</textarea>
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
