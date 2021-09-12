<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();

class All_Slider_Controller extends Controller
{

  public function allslider(){


    $all_category_information=DB::table('tb1_slider')
                    ->get();
  $manage_category=view('admin.all_slider')
                     ->with('all_slider_info',$all_category_information);
            return view('admin.admin_layout')
            ->with('admin.all_slider',$manage_category);




  }





}
