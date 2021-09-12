<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();

class Customer_information_form_action_controller extends Controller
{




      public function customerinformationformaction(Request $request){


        $data=array();

        $data['shipping_email']=$request->shipping_email;
        $data['shipping_first_name']=$request->shipping_first_name;
        $data['shipping_last_name']=$request->shipping_last_name;
        $data['shipping_address']=$request->shipping_address;
        $data['shipping_phone']=$request->shipping_phone;
        $data['shipping_city']=$request->shipping_city;

          $customer_info=DB::table('tb1_customer_information')

                        ->insertGetId($data);

                      Session::put('shipping_id',$customer_info);

                      return Redirect::to('/payment');


    }

     public function customerpayment(){


   return view('pages.payment');


   //$all_publish_category=DB::table('tb1_category')
          // ->where('publication_status',1)
        //   ->get();


  //$manage=view('pages.payment')
      //  ->with('all_publish',$all_publish_category);
      //  return view('layout')
      //  ->with('pages.payment',$manage);






     }



}
