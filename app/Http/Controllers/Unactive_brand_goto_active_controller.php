<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();
class Unactive_brand_goto_active_controller extends Controller
{


  public function unactive_brand_active($amne){


            DB::table('tb1_brand')
            ->where('brand_id',$amne)
            ->update(['publication_status' => 1]);
            Session::put('exception','Unctive brand is now active');
            return Redirect::to('/all_brand');


  }






}
