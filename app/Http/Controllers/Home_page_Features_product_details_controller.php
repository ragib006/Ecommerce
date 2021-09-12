<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();

class Home_page_Features_product_details_controller extends Controller
{



       public function Featuresproductdetails($amne){


         $all_product_publish_information=DB::table('tb1_products')


                 //  echo "<pre>";
                 //  print_r($all_product_information);
                 //  echo "</pre>";
                 //  exit();
                 ->join('tb1_category','tb1_products.category_id','=','tb1_category.category_id')
                 ->join('tb1_brand','tb1_products.brand_id','=','tb1_brand.brand_id')
              //   ->select('tb1_products.*','tb1_category.category_name','tb1_brand.brand_name')
                 ->where('tb1_products.product_id',$amne)
                 ->where('tb1_products.publication_status',1)


                     ->first();
                      // echo "<pre>";
                  //  print_r($all_product_information);
                      // echo "</pre>";
                    //   exit();





                $manage_product=view('pages.feature_product_details')
                           ->with('feature_productdetails',$all_product_publish_information);
                               return view('layout')
                         ->with('pages.feature_product_details',$manage_product);




       }





}
