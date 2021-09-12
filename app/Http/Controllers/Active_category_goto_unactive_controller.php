<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();


use Illuminate\Http\Request;

class Active_category_goto_unactive_controller extends Controller
{
    public function active_category_unactive($amne){


              DB::table('tb1_category')
              ->where('category_id',$amne)
              ->update(['publication_status' => 0]);
              Session::put('exception','Active category is now unactive');
              return Redirect::to('/all_category');


    }
}
