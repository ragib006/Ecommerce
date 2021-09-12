<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();

class Customer_login_controller extends Controller
{

    public function customerlogin(){


      return Redirect::to('/check_out_login');



    }




}
