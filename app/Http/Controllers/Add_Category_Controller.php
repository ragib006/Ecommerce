<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();



class Add_Category_Controller extends Controller
{
    public function addcategory(){


     return view('admin.add_category');


    }
}
