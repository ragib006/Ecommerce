<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();

class Manage_order_controller extends Controller
{



  public function manageorder(){





      $all_order_info=DB::table('tb1_order')


              //  echo "<pre>";
              //  print_r($all_product_information);
              //  echo "</pre>";
              //  exit();
              ->join('tb1_customer','tb1_order.customer_id','=','tb1_customer.customer_id')


               ->select('tb1_order.*','tb1_customer.customer_name')
               ->get();



                   // echo "<pre>";
               //  print_r($all_product_information);
                   // echo "</pre>";
                 //   exit();


  


             $manage_order=view('admin.manage_order')
                        ->with('order',$all_order_info);
                            return view('admin.admin_layout')
                      ->with('admin.manage_order',$manage_order);








  }











}
