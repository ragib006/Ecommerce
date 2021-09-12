<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;
use Cart;

session_start();

class Payment_order_form_action_controller extends Controller
{





   public function paymentorderformaction(Request $request){


    // $content_item=Cart::content();

    // echo $content_item;

    $payment=$request->payment_method;
    $paymentdata=array();

    $paymentdata['payment_method']=$payment;
    $paymentdata['payment_status']='pending';
    $payment_id=DB::table('tb1_payment')
             ->insertGetId($paymentdata);


    $orderdata=array();
    $orderdata['customer_id']=Session::get('customer_id');
    $orderdata['shipping_id']=Session::get('shipping_id');
    $orderdata['payment_id']=$payment_id;
    $orderdata['order_total']=Cart::total();
    $orderdata['order_status']='pending';

    $order_id=DB::table('tb1_order')
             ->insertGetId($orderdata);



     $contents=Cart::content();

       $orderdetails=array();

       foreach($contents as $v_content){

       $orderdetails['order_id']=$order_id;
       $orderdetails['product_id']=$v_content->id;
       $orderdetails['product_name']=$v_content->name;
       $orderdetails['product_price']=$v_content->price;
       $orderdetails['product_quantity']=$v_content->qty;

                DB::table('tb1_order_details')
                ->insert($orderdetails);




       }



      if($payment=='handkash'){

          Cart::destroy();
        return view('pages.handkash');


      }

      elseif($payment=='bekash'){

            Cart::destroy();
                return view('pages.bekash');


      }

      elseif($payment=='rocket'){

               Cart::destroy();
                return view('pages.rocket');


      }


      elseif($payment=='paypal'){

                Cart::destroy();
                return view('pages.handkash');


      }

      else{

   echo "not selected";


      }





   }



}
