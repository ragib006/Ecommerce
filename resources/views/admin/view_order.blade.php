@extends('admin.admin_layout')

@section('admin_content')










            <?php

                $category_publication=DB::table('tb1_order')

                                     ->get();



            ?>








            <div class="row-fluid sortable">
              <div class="box span12">
                <div class="box-header">
                  <h2><i class="halflings-icon align-justify"></i><span class="break"></span>Order Details</h2>
                  <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                  </div>
                </div>
                <div class="box-content">
                  <table class="table table-bordered table-striped table-condensed">
                      <thead>
                        <tr>
                          <th>Order Id</th>
                          <th>Customer Name</th>
                          <th>Customer phone</th>
                          <th>Shipping First Name</th>
                          <th>Shipping Last Name</th>
                         <th>Shipping phone</th>
                         <th>Shipping Address</th>
                         <th>Shipping City</th>

                          <th>Product name</th>
                          <th>Product Price</th>
                          <th>Product Quantity</th>
                          <th>Product Subtotal</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                          @foreach($orderview as $v_order_view)
                      <tbody>
                      <tr>
                        <td class="center">{{$v_order_view->order_id}}</td>
                        <td class="center">{{$v_order_view->customer_name}}</td>
                        <td class="center">{{$v_order_view->customer_phone}}</td>
                        <td class="center">{{$v_order_view->shipping_first_name}}</td>
                        <td class="center">{{$v_order_view->shipping_last_name}}</td>
                        <td class="center">{{$v_order_view->shipping_phone}}</td>
                        <td class="center">{{$v_order_view->shipping_address}}</td>
                        <td class="center">{{$v_order_view->shipping_city}}</td>

                          <td class="center">{{$v_order_view->product_name}}</td>
                        <td class="center">{{$v_order_view->product_price}}</td>
                        <td class="center">{{$v_order_view->product_quantity}}</td>
                        <td class="center">{{$v_order_view->order_total}}</td>
                        <td class="center">  <a class="btn btn-info" id="delate" href="{{URL::to('/order_delate/'.$v_order_view->shipping_id)}}">
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

























<div class="row-fluid sortable">
  <div class="box span4">
    <div class="box-header">
      <h2><i class="halflings-icon align-justify"></i><span class="break"></span>Customer Details</h2>
      <div class="box-icon">
        <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
        <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
        <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
      </div>
    </div>
    <div class="box-content">
      <table class="table">
          <thead>
            <tr>
                 <th>Customer Name</th>
                 <th>Customer Phone</th>
                 <th>Action</th>


            </tr>
          </thead>

          @foreach($orderview as $v_order_view)
          <tbody>
          <tr>
            <td  class="center">{{$v_order_view->customer_name}}</td>
            <td class="center">{{$v_order_view->customer_phone}}</td>

               <td class="center">  <a class="btn btn-info" id="delate" href="{{URL::to('/order_delate/'.$v_order_view->customer_id)}}">
                  <i class="halflings-icon white trash"></i>

            </a>
            </td>


          </tr>


          </tbody>
          @endforeach
       </table>

    </div>
  </div><!--/span-->

  <div class="box span8">
    <div class="box-header">
      <h2><i class="halflings-icon align-justify"></i><span class="break"></span>Shipping Details</h2>
      <div class="box-icon">
        <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
        <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
        <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
      </div>
    </div>
    <div class="box-content">
      <table class="table table-striped">
          <thead>
            <tr>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Shipping Adress</th>
              <th>Shipping city</th>
              <th>Mobile</th>
              <th>Action</th>

            </tr>
          </thead>
          @foreach($orderview as $v_order_view)
          <tbody>
          <tr>
            <td class="center">{{$v_order_view->shipping_first_name}}</td>
            <td class="center">{{$v_order_view->shipping_last_name}}</td>
            <td class="center">{{$v_order_view->shipping_address}}</td>
            <td class="center">{{$v_order_view->shipping_city}}</td>
            <td class="center">{{$v_order_view->shipping_phone}}</td>
            <td class="center">  <a class="btn btn-info" id="delate" href="{{URL::to('/order_delate/'.$v_order_view->shipping_id)}}">
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






</div><!--/.fluid-container-->

<!-- end: Content -->
</div><!--/#content.span10-->
</div><!--/fluid-row-->

<div class="modal hide fade" id="myModal">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">×</button>
<h3>Settings</h3>
</div>
<div class="modal-body">
<p>Here settings can be configured...</p>
</div>
<div class="modal-footer">
<a href="#" class="btn" data-dismiss="modal">Close</a>
<a href="#" class="btn btn-primary">Save changes</a>
</div>
</div>














@endsection
