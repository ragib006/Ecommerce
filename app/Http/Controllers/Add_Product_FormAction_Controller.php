<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();


class Add_Product_FormAction_Controller extends Controller
{


  public function addproductformaction(Request $request){

    $data=array();
               $data['product_name']=$request->product_name;
                $data['category_id']=$request->category_id;
                $data['brand_id']=$request->brand_id;
               $data['product_shotr_description']=$request->product_shotr_description;
               $data['product_long_description']=$request->product_long_description;
                $data['product_price']=$request->product_price;
                $data['product_size']=$request->product_size;
                  $data['product_weight']=$request->product_weight;
               $data['product_color']=$request->product_color;
               $data['publication_status']=$request->publication_status;




               $image=$request->file('product_image');

            if($image){


               $random = Str::random(20);

                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$random.'.'.$ext;
                $upload_path='image/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);

             if($success){

                 $data['product_image']=$image_url;
                 DB::table('tb1_products')->insert($data);
                 Session::put('exception','prodect added successfully!!');
                 return Redirect::to('/add_product');


             }



            }

            $data['product_image']='';
                 DB::table('tb1_products')->insert($data);
                 Session::put('exception','product added successfully!!');
                 return Redirect::to('/add_product');






     }






}
