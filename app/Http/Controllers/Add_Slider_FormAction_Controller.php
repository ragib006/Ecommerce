<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();


class Add_Slider_FormAction_Controller extends Controller
{


  public function addsliderformaction(Request $request){

    $data=array();
               $data['slider_name']=$request->slider_name;
               $data['slider_title']=$request->slider_title;
               $data['slider_subtitle']=$request->slider_subtitle;

               $data['publication_status']=$request->publication_status;


               $image=$request->file('slider_image');

            if($image){


               $random = Str::random(20);

                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$random.'.'.$ext;
                $upload_path='slider/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);

             if($success){

                 $data['slider_image']=$image_url;
                 DB::table('tb1_slider')->insert($data);
                 Session::put('exception','slider added successfully!!');
                 return Redirect::to('/all_slider');


             }



            }

            $data['slider_image']='';
                 DB::table('tb1_slider')->insert($data);
                 Session::put('exception','slider added successfully!!');
                 return Redirect::to('/all_slider');






     }






}
