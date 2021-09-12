<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();

class Category_wise_product_show_controller extends Controller
{


     public function categorywiseproductshow($amne){


       $all_product_publish_information=DB::table('tb1_products')


               //  echo "<pre>";
               //  print_r($all_product_information);
               //  echo "</pre>";
               //  exit();
               ->join('tb1_category','tb1_products.category_id','=','tb1_category.category_id')
               ->join('tb1_brand','tb1_products.brand_id','=','tb1_brand.brand_id')
            //   ->select('tb1_products.*','tb1_category.category_name','tb1_brand.brand_name')
               ->where('tb1_category.category_id',$amne)
               ->where('tb1_products.publication_status',1)

               ->limit(300)
                   ->get();
                    // echo "<pre>";
                //  print_r($all_product_information);
                    // echo "</pre>";
                  //   exit();





              $manage_product=view('admin.category_wise_productshow')
                         ->with('category_wise_product',$all_product_publish_information);
                             return view('layout')
                       ->with('admin.category_wise_productshow',$manage_product);




     }





     }
