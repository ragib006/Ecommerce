<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Category_edit_controller extends Controller
{
  public function categoryedit($cat){



    $category_description_view=DB::table('tb1_category')
              ->select('*')
              ->where('category_id',$cat)
              ->first();

        $manage_desprition_student=view('admin.edit_category')
                                ->with('description_category',$category_description_view);
                                 return view('admin.admin_layout')
                                ->with('admin.edit_category',$manage_desprition_student);



  }


}
