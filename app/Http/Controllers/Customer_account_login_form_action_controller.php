<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();

class Customer_account_login_form_action_controller extends Controller
{

  public function customeraccountloginformaction(Request $request){

             $customer_email=$request->customer_email;
             $customer_password=md5($request->customer_password);
             $result=DB::table('tb1_customer')
                   ->where('customer_email',$customer_email)
                   ->where('customer_password',$customer_password)
                   ->first();




                if($result) {

                        Session::put('customer_id',$result->customer_id);

                      return Redirect::to('/customer_information');

                }else{

                    return Redirect::to('/check_out_login');

                }


  }


}
