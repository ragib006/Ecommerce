<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();

class Customer_create_account_checkout_controller extends Controller
{



public function customercreateaccountformaction(Request $request){

         $data=array();

         $data['customer_name']=$request->customer_name;
         $data['customer_email']=$request->customer_email;
         $data['customer_password']=md5($request->customer_password);
         $data['customer_phone']=$request->customer_phone;

        $customer=DB::table('tb1_customer')
                 ->insertGetId($data);

                 Session::put('customer_id',$customer);
                 Session::put('customer_name',$request->customer_name);

               return Redirect::to('/customer_information');
                              //nis a redirect kora rout
                    //account registration korar porcustomer information page a neya jabe

}


public function customerinformation(){


         return view('pages.customer_information');

}





}
