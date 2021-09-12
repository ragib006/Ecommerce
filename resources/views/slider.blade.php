





  <section id="slider"><!--slider-->
  		<div class="container">
  			<div class="row">
<div class="col-sm-9">
        <div id="slider-carousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#slider-carousel" data-slide-to="1"></li>
            <li data-target="#slider-carousel" data-slide-to="2"></li>
          </ol>

          <div class="carousel-inner">


                      <?php



                        $slider=DB::table('tb1_slider')
                        ->where('publication_status',1)
                        ->get();


                       $i=1;
                       foreach($slider as $v_slider){

                               if($i==1){


                      ?>



            <div class="item active">
            <?php } else{ ?>
          <div class="item">

              <?php } ?>
              <div class="col-sm-6">
                <h1><span></span>{{$v_slider->slider_name}}</h1>
                <h2>{{$v_slider->slider_title}}</h2>
                <p>{{$v_slider->slider_subtitle}}</p>
                <button type="button" class="btn btn-default get">Get it now</button>
              </div>
              <div class="col-sm-6">
                <img style="height:400px;margin-top:60px;"src="{{URL::to($v_slider->slider_image)}}" class="girl img-responsive" alt="" />
                <img src=""  class="pricing" alt="" />
              </div>
            </div>

          <?php $i++; } ?>



          </div>

          <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
            <i class="fa fa-angle-left"></i>
          </a>
          <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
            <i class="fa fa-angle-right"></i>
          </a>
        </div>

      </div>

  			</div>
  		</div>
  	</section><!--/slider-->
