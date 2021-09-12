<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();

class HomeController extends Controller
{



  ///alll feature product show

  public function index(){

//   return view('pages.home_content');




$all_product_publish_information=DB::table('tb1_products')


        //  echo "<pre>";
        //  print_r($all_product_information);
        //  echo "</pre>";
        //  exit();
        ->join('tb1_category','tb1_products.category_id','=','tb1_category.category_id')
        ->join('tb1_brand','tb1_products.brand_id','=','tb1_brand.brand_id')
        ->select('tb1_products.*','tb1_category.category_name','tb1_brand.brand_name')
        ->where('tb1_products.publication_status',1)
        ->limit(12)
            ->get();
          //  echo "<pre>";
          // print_r($all_product_information);
          //  echo "</pre>";
        //     exit();





       $manage_product=view('pages.home_content')
                  ->with('all_product_publish',$all_product_publish_information);
                      return view('layout')
                ->with('pages.home_content',$manage_product);




  }



}
