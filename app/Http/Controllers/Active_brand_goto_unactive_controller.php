<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();


class Active_brand_goto_unactive_controller extends Controller
{

  public function active_brand_unactive($amne){


            DB::table('tb1_brand')
            ->where('brand_id',$amne)
            ->update(['publication_status' => 0]);
            Session::put('exception','Active brand is now unactive');
            return Redirect::to('/all_brand');


  }



}
