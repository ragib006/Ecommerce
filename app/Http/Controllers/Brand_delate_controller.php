<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();



class Brand_delate_controller extends Controller
{


  public function branddelate($delate){


    DB::table('tb1_brand')
    ->where('brand_id',$delate)
    ->delete();
    return Redirect::to('/all_brand');


  }



}
