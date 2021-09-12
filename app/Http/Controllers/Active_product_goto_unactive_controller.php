<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();



class Active_product_goto_unactive_controller extends Controller
{

  public function active_product_unactive($amne){

        //  echo $product_id;

               DB::table('tb1_products')
                ->where('product_id',$amne)
               ->update(['publication_status' => 0]);
               Session::put('exception','Active category is now unactive');
              return Redirect::to('/all_product');


  }


}
