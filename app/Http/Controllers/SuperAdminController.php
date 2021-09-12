<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();

class SuperAdminController extends Controller
{


//ecommerce logo link dynamic

public function logolink(){

   return Redirect::to('/');


}





  //admin dashboard show korilam
  //route no:30   location na   dashboard.blade.php  return view korchi


  public function admin__dashboard(){

       $this->AdminAuthChack();
     return view('admin.dashboard');

  }
  //admin dashboard logout
  //route no:46   location:   admin_layout.blade.php ar layout likher pas a
  public function dashboard_logout(){


               //  Session::put('admin_name',null);
                //Session::put('admin_id',null);
                 Session::flush();
                 return Redirect::to('/backend');

  }




public function AdminAuthChack(){

$admin=Session::get('admin_email');
if($admin){

   return;
}
else{

   return Redirect::to('/backend')->send();


}




}



}
