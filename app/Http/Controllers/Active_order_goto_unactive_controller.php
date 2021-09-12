<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();



class Active_order_goto_unactive_controller extends Controller
{


    public function active_order_unactive($joo){
         DB::table('tb1_order')
      ->where('order_id',$joo)
      ->update(['order_status' => 0]);
      Session::put('exception','pending money');
      return Redirect::to('/manage_order');

    }



}
