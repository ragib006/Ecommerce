<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();


class All_Product_Controller extends Controller
{




  public function allproduct(){


    $all_product_information=DB::table('tb1_products')


            //  echo "<pre>";
            //  print_r($all_product_information);
            //  echo "</pre>";
            //  exit();
            ->join('tb1_category','tb1_products.category_id','=','tb1_category.category_id')
            ->join('tb1_brand','tb1_products.brand_id','=','tb1_brand.brand_id')
            ->select('tb1_products.*','tb1_category.category_name','tb1_brand.brand_name')

                ->get();
              //  echo "<pre>";
              // print_r($all_product_information);
              //  echo "</pre>";
            //     exit();





           $manage_product=view('admin.all_product')
                      ->with('all_product_info',$all_product_information);
                          return view('admin.admin_layout')
                    ->with('admin.all_product',$manage_product);



  }





}
