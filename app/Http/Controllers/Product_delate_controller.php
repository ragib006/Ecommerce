<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();

class Product_delate_controller extends Controller
{

  public function productdelate($delate){


    DB::table('tb1_products')
    ->where('product_id',$delate)
    ->delete();
    return Redirect::to('/all_product');


  }



}
