<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="{{asset('forntend')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('forntend')}}/css/swiper.min.css" rel="stylesheet">

    <link href="{{asset('forntend')}}/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('forntend')}}/css/prettyPhoto.css" rel="stylesheet">
    <link href="{{asset('forntend')}}/css/price-range.css" rel="stylesheet">
    <link href="{{asset('forntend')}}/css/animate.css" rel="stylesheet">
	<link href="{{asset('forntend')}}/css/main.css" rel="stylesheet">
	<link href="{{asset('forntend')}}/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{asset('forntend')}}/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('forntend')}}/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('forntend')}}/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('forntend')}}/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="{{asset('forntend')}}/images/ico/apple-touch-icon-57-precomposed.png">
  <style>





  	  .paymentWrap {



  }

  .paymentWrap .paymentBtnGroup {
  	max-width: 800px;
  	margin: auto;
  }

  .paymentWrap .paymentBtnGroup .paymentMethod {
  padding:40px;
  	box-shadow: none;
  	position: relative;
  }

  .paymentWrap .paymentBtnGroup .paymentMethod.active {
  	outline: none !important;
  }

  .paymentWrap .paymentBtnGroup .paymentMethod.active .method {
  	border-color: #4cd264;
  	outline: none !important;
  	box-shadow: 0px 3px 22px 0px #7b7b7b;
  }

  .paymentWrap .paymentBtnGroup .paymentMethod .method {
  	position: absolute;
  	right: 3px;
  	top: 3px;
  	bottom: 3px;
  	left: 3px;
  	background-size: contain;
  	background-position: center;
  	background-repeat: no-repeat;
  	border: 2px solid transparent;
  	transition: all 0.5s;
  }

  .paymentWrap .paymentBtnGroup .paymentMethod .method.visa {
  	background-image: url('image/indesFx.png');
  }

  .paymentWrap .paymentBtnGroup .paymentMethod .method.master-card {

  		background-image: url('image/indsdsdvex .png');


  }

  .paymentWrap .paymentBtnGroup .paymentMethod .method.amex {
  	background-image: url('/image/indsdsdvex (1).png');
  }


  .paymentWrap .paymentBtnGroup .paymentMethod .method.ez-cash {
  	background-image: url('image/indexsdf.png');
  }


  .paymentWrap .paymentBtnGroup .paymentMethod .method:hover {
  	border-color: #4cd264;
  	outline: none !important;
  }




</style>


</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->

		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="{{URL::to('/home')}}"><img src="{{asset('forntend')}}/images/home/logo.png" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canada</a></li>
									<li><a href="#">UK</a></li>
								</ul>
							</div>

							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canadian Dollar</a></li>
									<li><a href="#">Pound</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>

                <?php

               $customer_genarl_id=Session::get('customer_id');
               $customer_shipping_id=Session::get('shipping_id');


                ?>


                @if($customer_genarl_id != NULL && $customer_shipping_id==NULL)

               		<li><a href="{{URL::to('/customer_information')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li>


                @elseif($customer_genarl_id != NULL && $customer_shipping_id != NULL)
               <li><a href="{{URL::to('/payment')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li>

                @else
                <li><a href="{{URL::to('/check_out_login')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li>

                @endif



                @if($customer_genarl_id != NULL && $customer_shipping_id==NULL)
              	<li><a href="{{URL::to('/customer_information')}}"><i class="fa fa-crosshairs"></i>Cart</a></li>

                @elseif($customer_genarl_id != NULL && $customer_shipping_id != NULL)
                <li><a href="{{URL::to('/payment')}}"><i class="fa fa-crosshairs"></i>Cart</a></li>
                @else
								<li><a href="{{URL::to('/show_cart')}}"><i class="fa fa-shopping-cart"></i>Cart</a></li>
                @endif



              @if($customer_genarl_id != NULL)
								<li><a href="{{URL::to('/customer_logout')}}"><i class="fa fa-lock"></i> Log out</a></li>
              @else
                <li><a href="{{URL::to('/customer_login')}}"><i class="fa fa-lock"></i>Login</a></li>
              @endif
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->

		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.html" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li>
										<li><a href="product-details.html">Product Details</a></li>




                @if($customer_genarl_id != NULL)

                  <li><a href="{{URL::to('/customer_information')}}"> Checkout</a></li>


                @else


                <li><a href="{{URL::to('/check_out_login')}}"> Checkout</a></li>
                @endif

										<li><a href="{{URL::to('/show_cart')}}">Cart</a></li>

                                    </ul>
                                </li>
								<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li>
								<li><a href="404.html">404</a></li>
								<li><a href="contact-us.html">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->







@yield('slider')



























		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->





            <?php

                $category_publication=DB::table('tb1_category')
                                     ->where('publication_status',1)
                                     ->get();



            ?>


         @foreach( $category_publication as $v_show )


							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="{{URL::to('/category_wise_product_show/'.$v_show->category_id)}}">{{$v_show->category_name}}</a></h4>
								</div>
							</div>

         @endforeach





						</div><!--/category-products-->

						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">




           <?php

              $show_brand=DB::table('tb1_brand')
                        ->where('publication_status',1)
                       ->get();







           ?>






             @foreach($show_brand as $v_brand)

								<ul class="nav nav-pills nav-stacked">
									<li><a href="{{URL::to('/brand_wise_product_show/'.$v_brand->brand_id)}}"> <span class="pull-right">(50)</span>{{$v_brand->brand_name}}</a></li>

								</ul>

               @endforeach

							</div>
						</div><!--/brands_products-->















































































						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div><!--/price-range-->











						<div class="shipping text-center"><!--shipping-->
							<img src="{{asset('forntend')}}/images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->

					</div>
				</div>




























        				<div class="col-sm-9 padding-right">


        					<div class="features_items"><!--features_items-->


        				@yield('content')





			</div>
		</div>
	</section>

	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>e</span>-shopper</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('forntend')}}/images/home/iframe1.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>

						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('forntend')}}/images/home/iframe2.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>

						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('forntend')}}/images/home/iframe3.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>

						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('forntend')}}/images/home/iframe4.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="{{asset('forntend')}}/images/home/map.png" alt="" />
							<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Order Status</a></li>
								<li><a href="#">Change Location</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">T-Shirt</a></li>
								<li><a href="#">Mens</a></li>
								<li><a href="#">Womens</a></li>
								<li><a href="#">Gift Cards</a></li>
								<li><a href="#">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privecy Policy</a></li>
								<li><a href="#">Refund Policy</a></li>
								<li><a href="#">Billing System</a></li>
								<li><a href="#">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Affillate Program</a></li>
								<li><a href="#">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>

	</footer><!--/Footer-->



    <script src="{{asset('forntend')}}/js/jquery.js"></script>
	  <script src="{{asset('forntend')}}/js/bootstrap.min.js"></script>
	  <script src="{{asset('forntend')}}/js/jquery.scrollUp.min.js"></script>
	  <script src="{{asset('forntend')}}/js/price-range.js"></script>
    <script src="{{asset('forntend')}}/js/jquery.prettyPhoto.js"></script>
    <script src="{{asset('forntend')}}/js/main.js"></script>

    <script src="{{asset('forntend')}}/js/swiper.min.js"></script>

  	<script>


  	    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });


    </script>

</body>
</html>
