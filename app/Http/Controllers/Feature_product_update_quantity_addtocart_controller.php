<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;
use Cart;


class Feature_product_update_quantity_addtocart_controller extends Controller
{



 public function featureproduct_update_quantity_addtocart(Request $request){

     $my_quantity=$request->qty;
     $my_id=$request->rowId;

     Cart::update($my_id, $my_quantity);

    return Redirect::to('/show_cart');




 }



}
