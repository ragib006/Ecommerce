<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Brand_edit_controller extends Controller
{

  public function brandedit($cat){



    $brand_description_view=DB::table('tb1_brand')
              ->select('*')
              ->where('brand_id',$cat)
              ->first();

        $manage_desprition_student=view('admin.edit_brand')
                                ->with('description_brand',$brand_description_view);
                                 return view('admin.admin_layout')
                                ->with('admin.edit_brand',$manage_desprition_student);



  }



}
