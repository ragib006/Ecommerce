<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();

class Unactive_slider_goto_active_controller extends Controller
{



    public function unactive_slider_active($joo){
         DB::table('tb1_slider')
      ->where('slider_id',$joo)
      ->update(['publication_status' => 1]);
      Session::put('exception','unactive slider is now active');
      return Redirect::to('/all_slider');

    }




}
