<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();

class Unactive_order_goto_active_controller extends Controller
{




  public function unactive_order_active($joo){
       DB::table('tb1_order')
    ->where('order_id',$joo)
    ->update(['order_status' => 1]);
    Session::put('exception','pending money is now receive');
    return Redirect::to('/manage_order');

  }





}
