@extends('layout')




@section('content')

@include('slider')




<h2 class="title text-center">Features Items</h2>


  @foreach($all_product_publish as $show_product)


<div class="col-sm-4">
  <div class="product-image-wrapper">

<!----       {{asset('forntend')}}/images/home/product1.jpg                               ---->

    <div class="single-products">
        <div class="productinfo text-center">
          <img src="{{URL::to($show_product->product_image)}}" style="width:150px; height:130px;" alt="" />
          <h2>{{$show_product->product_price}} TK</h2>
          <p>{{$show_product->product_name}}</p>
          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
        </div>


        <a href="{{URL::to('/Features_product_view/'.$show_product->product_id)}}">
        <div class="product-overlay">
          <div class="overlay-content">
            <h2>{{$show_product->product_price}} TK</h2>
             <p>{{$show_product->product_name}}</p>
             <a href="{{URL::to('/Features_product_view/'.$show_product->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>

          </div>
        </div>
        </a>



    </div>
    <div class="choose">
      <ul class="nav nav-pills nav-justified">
        <li><a href="#"><i class="fa fa-plus-square"></i>{{$show_product->brand_name}} </a></li>
        <li><a href="{{URL::to('/Features_product_view/'.$show_product->product_id)}}"><i class="fa fa-plus-square"></i>view product</a></li>
      </ul>
    </div>
  </div>
</div>


@endforeach












</div><!--features_items-->

<div class="category-tab"><!--category-tab-->
<div class="col-sm-12">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#tshirt" data-toggle="tab">T-Shirt</a></li>
    <li><a href="#blazers" data-toggle="tab">Blazers</a></li>
    <li><a href="#sunglass" data-toggle="tab">Sunglass</a></li>
    <li><a href="#kids" data-toggle="tab">Kids</a></li>
    <li><a href="#poloshirt" data-toggle="tab">Polo shirt</a></li>
  </ul>
</div>
<div class="tab-content">
  <div class="tab-pane fade active in" id="tshirt" >
    <div class="col-sm-3">
      <div class="product-image-wrapper">
        <div class="single-products">
          <div class="productinfo text-center">
            <img src="{{asset('forntend')}}/images/home/gallery1.jpg" alt="" />
            <h2>$56</h2>
            <p>Easy Polo Black Edition</p>
            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
          </div>

        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="product-image-wrapper">
        <div class="single-products">
          <div class="productinfo text-center">
            <img src="{{asset('forntend')}}/images/home/gallery2.jpg" alt="" />
            <h2>$56</h2>
            <p>Easy Polo Black Edition</p>
            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
          </div>

        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="product-image-wrapper">
        <div class="single-products">
          <div class="productinfo text-center">
            <img src="{{asset('forntend')}}/images/home/gallery3.jpg" alt="" />
            <h2>$56</h2>
            <p>Easy Polo Black Edition</p>
            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
          </div>

        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="product-image-wrapper">
        <div class="single-products">
          <div class="productinfo text-center">
            <img src="{{asset('forntend')}}/images/home/gallery4.jpg" alt="" />
            <h2>$56</h2>
            <p>Easy Polo Black Edition</p>
            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div class="tab-pane fade" id="blazers" >
    <div class="col-sm-3">
      <div class="product-image-wrapper">
        <div class="single-products">
          <div class="productinfo text-center">
            <img src="{{asset('forntend')}}/images/home/gallery4.jpg" alt="" />
            <h2>$56</h2>
            <p>Easy Polo Black Edition</p>
            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
          </div>

        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="product-image-wrapper">
        <div class="single-products">
          <div class="productinfo text-center">
            <img src="{{asset('forntend')}}/images/home/gallery3.jpg" alt="" />
            <h2>$56</h2>
            <p>Easy Polo Black Edition</p>
            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
          </div>

        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="product-image-wrapper">
        <div class="single-products">
          <div class="productinfo text-center">
            <img src="{{asset('forntend')}}/images/home/gallery2.jpg" alt="" />
            <h2>$56</h2>
            <p>Easy Polo Black Edition</p>
            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
          </div>

        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="product-image-wrapper">
        <div class="single-products">
          <div class="productinfo text-center">
            <img src="{{asset('forntend')}}/images/home/gallery1.jpg" alt="" />
            <h2>$56</h2>
            <p>Easy Polo Black Edition</p>
            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div class="tab-pane fade" id="sunglass" >
    <div class="col-sm-3">
      <div class="product-image-wrapper">
        <div class="single-products">
          <div class="productinfo text-center">
            <img src="{{asset('forntend')}}/images/home/gallery3.jpg" alt="" />
            <h2>$56</h2>
            <p>Easy Polo Black Edition</p>
            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
          </div>

        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="product-image-wrapper">
        <div class="single-products">
          <div class="productinfo text-center">
            <img src="{{asset('forntend')}}/images/home/gallery4.jpg" alt="" />
            <h2>$56</h2>
            <p>Easy Polo Black Edition</p>
            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
          </div>

        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="product-image-wrapper">
        <div class="single-products">
          <div class="productinfo text-center">
            <img src="{{asset('forntend')}}/images/home/gallery1.jpg" alt="" />
            <h2>$56</h2>
            <p>Easy Polo Black Edition</p>
            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
          </div>

        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="product-image-wrapper">
        <div class="single-products">
          <div class="productinfo text-center">
            <img src="{{asset('forntend')}}/images/home/gallery2.jpg" alt="" />
            <h2>$56</h2>
            <p>Easy Polo Black Edition</p>
            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div class="tab-pane fade" id="kids" >
    <div class="col-sm-3">
      <div class="product-image-wrapper">
        <div class="single-products">
          <div class="productinfo text-center">
            <img src="{{asset('forntend')}}/images/home/gallery1.jpg" alt="" />
            <h2>$56</h2>
            <p>Easy Polo Black Edition</p>
            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
          </div>

        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="product-image-wrapper">
        <div class="single-products">
          <div class="productinfo text-center">
            <img src="{{asset('forntend')}}/images/home/gallery2.jpg" alt="" />
            <h2>$56</h2>
            <p>Easy Polo Black Edition</p>
            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
          </div>

        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="product-image-wrapper">
        <div class="single-products">
          <div class="productinfo text-center">
            <img src="{{asset('forntend')}}/images/home/gallery3.jpg" alt="" />
            <h2>$56</h2>
            <p>Easy Polo Black Edition</p>
            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
          </div>

        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="product-image-wrapper">
        <div class="single-products">
          <div class="productinfo text-center">
            <img src="{{asset('forntend')}}/images/home/gallery4.jpg" alt="" />
            <h2>$56</h2>
            <p>Easy Polo Black Edition</p>
            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div class="tab-pane fade" id="poloshirt" >
    <div class="col-sm-3">
      <div class="product-image-wrapper">
        <div class="single-products">
          <div class="productinfo text-center">
            <img src="{{asset('forntend')}}/images/home/gallery2.jpg" alt="" />
            <h2>$56</h2>
            <p>Easy Polo Black Edition</p>
            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
          </div>

        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="product-image-wrapper">
        <div class="single-products">
          <div class="productinfo text-center">
            <img src="{{asset('forntend')}}/images/home/gallery4.jpg" alt="" />
            <h2>$56</h2>
            <p>Easy Polo Black Edition</p>
            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
          </div>

        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="product-image-wrapper">
        <div class="single-products">
          <div class="productinfo text-center">
            <img src="{{asset('forntend')}}/images/home/gallery3.jpg" alt="" />
            <h2>$56</h2>
            <p>Easy Polo Black Edition</p>
            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
          </div>

        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="product-image-wrapper">
        <div class="single-products">
          <div class="productinfo text-center">
            <img src="{{asset('forntend')}}/images/home/gallery1.jpg" alt="" />
            <h2>$56</h2>
            <p>Easy Polo Black Edition</p>
            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
</div><!--/category-tab-->





<div class="recommended_items"><!--recommended_items-->
<h2 class="title text-center">recommended items</h2>

<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">








    <?php

$pro=DB::table('tb1_products')
    ->where('publication_status',1)
    ->inRandomOrder()
    ->limit(3)

    ->get();
    $i=1;

    foreach($pro as $v_pro){

    if($i==1){

    ?>
    <div class="item active">

      <?php } else{ ?>
        <div class="item">
        <?php } ?>

        @foreach($pro as $v_produc)
      <div class="col-sm-4">
        <div class="product-image-wrapper">
          <div class="single-products">
            <div class="productinfo text-center">
              <img src="{{URL::to($v_produc->product_image)}}" alt="" />
              <h2>$56</h2>
              <p>{{$v_produc->product_name}}</p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
            </div>

          </div>
        </div>
      </div>

      @endforeach


    </div>

<?php $i++; } ?>
  </div>






   <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
    <i class="fa fa-angle-left"></i>
    </a>
    <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
    <i class="fa fa-angle-right"></i>
    </a>
</div>
</div><!--/recommended_items-->


</div>





@endsection
