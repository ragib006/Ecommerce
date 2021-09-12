@extends('layout')




@section('content')



<?php

  $feature_item_product=DB::table('tb1_products')
              ->where('publication_status',1)
              ->get();


?>


<h2 class="title text-center">Features Items</h2>


  @foreach($category_wise_product as $show_category_wise_product)


<div class="col-sm-4">
  <div class="product-image-wrapper">

<!----       {{asset('forntend')}}/images/home/product1.jpg                               ---->

    <div class="single-products">
        <div class="productinfo text-center">
          <img src="{{URL::to($show_category_wise_product->product_image)}}" style="width:150px; height:130px;" alt="" />
          <h2>{{$show_category_wise_product->product_price}} TK</h2>
          <p>{{$show_category_wise_product->product_name}}</p>
          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
        </div>
        <div class="product-overlay">
          <div class="overlay-content">
            <h2>{{$show_category_wise_product->product_price}} TK</h2>
            <p>{{$show_category_wise_product->product_name}}</p>
            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
          </div>
        </div>
    </div>
    <div class="choose">
      <ul class="nav nav-pills nav-justified">
        <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
        <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
      </ul>
    </div>
  </div>
</div>

@endforeach












</div><!--features_items-->





































</div>





@endsection
