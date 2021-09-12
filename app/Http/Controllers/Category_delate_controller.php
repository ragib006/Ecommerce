<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();


class Category_delate_controller extends Controller
{
    public function categorydelate($delate){


      DB::table('tb1_category')
      ->where('category_id',$delate)
      ->delete();
      return Redirect::to('/all_category');


    }
}
