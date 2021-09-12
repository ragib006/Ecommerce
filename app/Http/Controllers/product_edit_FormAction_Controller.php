<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();

class product_edit_FormAction_Controller extends Controller
{




    public function producteditformaction(Request $request,$category){

       $data['product_name']=$request->product_name;
       $data['category_id']=$request->category_id;
       $data['brand_id']=$request->brand_id;
       $data['product_shotr_description']=$request->product_shotr_description;
       $data['product_long_description']=$request->product_long_description;

       $data['product_price']=$request->product_price;
       $data['product_size']=$request->product_size;
       $data['product_color']=$request->product_color;
       $data['publication_status']=$request->publication_status;






                        DB::table('tb1_products')
                            ->where('product_id',$category)
                            ->update($data);


                            Session::put('exception','product information update successfully !!');
                              return Redirect::to('/all_product');




            }




    }
