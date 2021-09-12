<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

use DB;

use Session;
use Cart;

session_start();


class Customer_logout_controller extends Controller
{


  public function customerlogout(){


           // Session::put('admin_name',null);
                //  Session::put('customer_id',null);
                  Session::flush();
                   return Redirect::to('/');



  }





}
