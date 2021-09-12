<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();


class AdminController extends Controller
{


// admin login pannel show korailam
//route no:27   location na admin_login.blade.php return view korchi
  public function admin(){

        return view('admin.admin_login');


  }



//admin login email and password ckeck  with data base ata admin_login.blade.php ar form chehk ar cction route
//route no:36 location:admin_login.blade.php      form ar action ar vitor

public function admin_dashboard_show_with_form_action(Request $request){


                          $email=$request->admin_email;

                          $password=MD5($request->admin_password);


                          $result=DB::table('tb1_admin')

                         ->where('admin_email',$email)

                         ->where('admin_password',$password)

                         ->first();


      //    echo"<pre>";
      //    print_r($result);
      //    exit();


      if($result){


                  Session::put('admin_email',$result->admin_email);

                   Session::put('admin_password',$result->admin_password    );

                   return Redirect::to('/dashboard');

                }


                else{


                   Session::put('exception','email or password invalied');
                     return Redirect::to('/backend');



                       }


}

//logo link dynamic
//route no:41
//dash boadr er onno page gale orthat jodi add category te click kore  aber jodi dashboard a fire aste chai tahole logo te click korlei hobe
//location:admin_layout.blade.php er logo ar pas a
public function dashbordlogolink(){

   return Redirect::to('/dashboard');

}







}
