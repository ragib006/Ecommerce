<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();

class All_Brand_Controller extends Controller
{



  public function allbrand(){

    $all_brand_information=DB::table('tb1_brand')
                    ->get();
  $manage_brand=view('admin.all_brand')
                     ->with('all_brand_info',$all_brand_information);
            return view('admin.admin_layout')
            ->with('admin.all_brand',$manage_brand);


  }




}
