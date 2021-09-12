@extends('layout')

@section('content')





<?php

  $content_item=Cart::content();
 // echo "<pre>";
 // print_r($content_item);
//   echo "</pre>";


?>

<section id="cart_items" style="width:100%;">
  <div class="container col-sm-12">
    <div class="breadcrumbs">
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Shopping Cart</li>
      </ol>
    </div>
    <div class="table-responsive cart_info">





      <table class="table table-condensed">
        <thead>
          <tr class="cart_menu">
            <td class="image">Image</td>
            <td class="description">Name</td>
            <td class="price">Price</td>
            <td class="quantity">Quantity</td>
            <td class="total">Total</td>
            <td>Action</td>
          </tr>
        </thead>
        <tbody>

          @foreach($content_item as $v_content)
          <tr>
            <td class="cart_product">
              <a href=""><img src="{{URL::to($v_content->options->image)}}" style="height:80px;width:80px;" alt=""></a>
            </td>
            <td class="cart_description">
              <h4><a href=""  style="font-family:cursive;font-size:15px;">{{$v_content->name}}</a></h4>

            </td>
            <td class="cart_price">
              <p>{{$v_content->price}}</p>
            </td>
            <td class="cart_quantity">



              <form action="{{url('/feature_product_update_quantity_addtocart')}}" method="post">
                        {{ csrf_field() }}

              <div class="cart_quantity_button">

                <input class="cart_quantity_input" type="text" name="qty" value="{{$v_content->qty}}" autocomplete="off" size="2">
                <input type="hidden" name="rowId" value="{{$v_content->rowId}}">
               <input type="submit" name="submit" value="update" class="btn btn-sm btn-default" style="width:60px;height:27px; text-align:center;border-radius:1px;">
              </div>

           </form>

            </td>
            <td class="cart_total">
              <p class="cart_total_price">{{$v_content->total}}</p>
            </td>
            <td class="cart_delete">
              <a class="cart_quantity_delete" href="{{URL::to('/feature_froduct_delate_addtocart/'.$v_content->rowId)}}"><i class="fa fa-times"></i></a>
            </td>
          </tr>


        @endforeach








        </tbody>
      </table>
    </div>
  </div>
</section> <!--/#cart_items-->




<div class="col-sm-12">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span>{{Cart::subtotal()}}</span></li>
							<li>Eco Tax <span>{{Cart::tax()}} </span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>{{Cart::total()}}</span></li>
						</ul>
							<a class="btn btn-default update" href="">Update</a>

                 <?php

                   $customer_genarl_id=Session::get('customer_id');



                 ?>

           @if( $customer_genarl_id != NULL)
           <a class="btn btn-default check_out" href="{{URL::to('/customer_information')}}">Check Out</a>

          @else
                    <a class="btn btn-default check_out" href="{{URL::to('/check_out_login')}}">Check Out</a>

        @endif

					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->











@endsection
