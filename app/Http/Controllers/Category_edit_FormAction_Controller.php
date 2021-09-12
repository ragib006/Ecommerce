<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();

class Category_edit_FormAction_Controller extends Controller
{


  public function categoryeditformaction(Request $request,$category){

          $data=array();
          $data['category_name']=$request->category_name;

          $data['category_description']=$request->category_description;


        DB::table('tb1_category')
            ->where('category_id',$category)
            ->update($data);


            Session::put('exception','category update successfully !!');
              return Redirect::to('/all_category');


  }






}
