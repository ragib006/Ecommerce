<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();



class Add_Brand_Controller extends Controller
{

   public function addbrand(){

   return view('admin.add_brand');


   }


}
