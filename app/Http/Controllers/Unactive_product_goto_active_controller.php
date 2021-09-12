<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();

class Unactive_product_goto_active_controller extends Controller
{


  public function unactive_product_active($joo){
       DB::table('tb1_products')
    ->where('product_id',$joo)
    ->update(['publication_status' => 1]);
    Session::put('exception','unactive category is now active');
    return Redirect::to('/all_product');

  }



}
