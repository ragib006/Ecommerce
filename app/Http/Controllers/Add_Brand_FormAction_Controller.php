<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();

class Add_Brand_FormAction_Controller extends Controller
{

  public function addbrandformaction(Request $request){

      $data=array();

      $data['brand_id']=$request->brand_id;
      $data['brand_name']=$request->brand_name;
      $data['brand_description']=$request->brand_description;
      $data['publication_status']=$request->publication_status;

    //   echo "<pre>";
    //   print_r($data);
    //    echo "<pre>";


    DB::table('tb1_brand')->insert($data);
    Session::put('exception','brand added successfully !!');
    return Redirect::to('/all_brand');

  }


}
