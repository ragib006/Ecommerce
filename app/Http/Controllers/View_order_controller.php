<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;
use Cart;

session_start();


class View_order_controller extends Controller
{

  public function vieworder(){











          $order_by_view=DB::table('tb1_order')


                  //  echo "<pre>";
                  //  print_r($all_product_information);
                  //  echo "</pre>";
                  //  exit();
                  ->join('tb1_customer','tb1_order.customer_id','=','tb1_customer.customer_id')
                  ->join('tb1_customer_information','tb1_order.shipping_id','=','tb1_customer_information.shipping_id')
                  ->join('tb1_order_details','tb1_order.order_id','=','tb1_order_details.order_id')
                  // ->select('tb1_order.*','tb1_order_details.product_name','tb1_order_details.product_price',
                  // 'tb1_order_details.product_quantity','tb1_order_details.product_price'
                  // ,'tb1_customer.customer_name','tb1_customer.customer_phone')
                  //

                //   ->select('tb1_order.*','tb1_customer.customer_name')
                   ->get();
                       //
                       //
                       //
                       // echo "<pre>";
                       // print_r($order_by_view);
                       // echo "</pre>";
                       // exit();
                       //




                      $view_order=view('admin.view_order')
                        ->with('orderview',$order_by_view);
                               return view('admin.admin_layout')
                          ->with('admin.view_order',$view_order);








  }




}
