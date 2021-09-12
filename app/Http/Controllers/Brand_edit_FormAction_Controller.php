<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();

class Brand_edit_FormAction_Controller extends Controller
{


  public function brandeditformaction(Request $request,$brand){

          $data=array();
          $data['brand_name']=$request->brand_name;

          $data['brand_description']=$request->brand_description;


        DB::table('tb1_brand')
            ->where('brand_id',$brand)
            ->update($data);


            Session::put('exception','brand update successfully !!');
              return Redirect::to('/all_brand');


  }




}
