<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();

class Slider_delate_controller extends Controller
{




  public function sliderdelate($delate){


    DB::table('tb1_slider')
    ->where('slider_id',$delate)
    ->delete();
    return Redirect::to('/all_slider');


  }






}
