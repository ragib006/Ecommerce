<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();

class product_edit_controller extends Controller
{


  public function productedit($cat){





  //  $category_description_view=DB::table('tb1_products')

  //  ->join('tb1_category','tb1_products.category_id','=','tb1_category.category_id')
  //  ->join('tb1_brand','tb1_products.brand_id','=','tb1_brand.brand_id')
  //  ->select('tb1_products.*','tb1_category.category_name','tb1_brand.brand_name')

    $brand_description_view=DB::table('tb1_products')
              ->select('*')
              ->where('product_id',$cat)
              ->first();





        $manage_desprition_student=view('admin.edit_product')
                                ->with('description_product',$brand_description_view);
                                 return view('admin.admin_layout')
                                ->with('admin.edit_product',$manage_desprition_student);



  }


}



//public function productedits(){

//  $all_product_information=DB::table('tb1_products')


          //  echo "<pre>";
          //  print_r($all_product_information);
          //  echo "</pre>";
          //  exit();
        //  ->join('tb1_category','tb1_products.category_id','=','tb1_category.category_id')
        //  ->join('tb1_brand','tb1_products.brand_id','=','tb1_brand.brand_id')
        //  ->select('tb1_products.*','tb1_category.category_name','tb1_brand.brand_name')

              //->get();
            //  echo "<pre>";
            // print_r($all_product_information);
            //  echo "</pre>";
          //     exit();





        // $manage_product=view('admin.edit_product')
                //    ->with('description_product',$all_product_information);
                      //  return view('admin.admin_layout')
                  //->with('admin.edit_product',$manage_product);
