<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

use DB;

use Session;
use Cart;

session_start();

class Features_product_delate_addtocart_controller extends Controller
{

       public function Featuresproduct_delate_addtocart($rowId){


               Cart::update($rowId,0);

              return Redirect::to('/show_cart');



       }




}
