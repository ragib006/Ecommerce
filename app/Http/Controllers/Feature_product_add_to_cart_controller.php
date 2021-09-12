<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;
use Cart;

session_start();


class Feature_product_add_to_cart_controller extends Controller
{




   public function featureproductaddtocart(Request $request){


             $feature_product=$request->feature_product_quntity;
             $product=$request->product_id;

         $feature_product_info=DB::table('tb1_products')
                              ->where('product_id',$product)
                              ->first();

                          //    echo "<pre>";
                            //  print_r($feature_product_info);

                          //    echo "<pre>";

                   $data['qty']=$feature_product;
                   $data['id']=$feature_product_info->product_id;
                   $data['name']=$feature_product_info->product_name;
                   $data['price']=$feature_product_info->product_price;
                   $data['weight']=$feature_product_info->product_weight;
                   $data['options']['image']=$feature_product_info->product_image;

                   Cart::add($data);

                  return Redirect::to('/show_cart');




   }
            //ata deya u[urer redirect kora route show hois a   oarthat shopping cart show hoice]

         public function showcart(){


          $all_publish_category=DB::table('tb1_category')
                     ->where('publication_status',1)
                     ->get();


            $manage=view('pages.featureproduct_add_to_cart')
                  ->with('all_publish',$all_publish_category);
                  return view('layout')
                  ->with('pages.featureproduct_add_to_cart',$manage);



         }



}
