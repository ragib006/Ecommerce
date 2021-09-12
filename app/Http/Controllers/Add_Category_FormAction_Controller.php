<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();



class Add_Category_FormAction_Controller extends Controller
{
    public function addcategoryformaction(Request $request){

        $data=array();

        $data['category_id']=$request->category_id;
        $data['category_name']=$request->category_name;
        $data['category_description']=$request->category_description;
        $data['publication_status']=$request->publication_status;

      //   echo "<pre>";
      //   print_r($data);
      //    echo "<pre>";


      DB::table('tb1_category')->insert($data);
      Session::put('exception','category added successfully !!');
      return Redirect::to('/all_category');

    }
}
