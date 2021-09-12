<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();


class All_Category_Controller extends Controller
{


public function allcategory(){

  $this->AdminAuthChack();

  $all_category_information=DB::table('tb1_category')
                  ->get();
$manage_category=view('admin.all_category')
                   ->with('all_category_info',$all_category_information);
          return view('admin.admin_layout')
          ->with('admin.all_category',$manage_category);


}









public function AdminAuthChack(){

$admin=Session::get('admin_email');
if ($admin){

   return;
}
else{

   return Redirect::to('/backend')->send();


}



}

}
