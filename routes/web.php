<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
    //return view('layout');
//});

//home_content.blade.php view orthat web site view

Route::get('/','HomeController@index');

//admin backend route  localhost:8000/backend dile login pannel asbe  terpor Login
//hole abmindesh board a jabe

Route::get('/backend','AdminController@admin');

//admin dashboard route
Route::get('/dashboard','SuperAdminController@admin__dashboard');

//
//admin login chack with data base  ata admin_login.blade.php ar form cheeck ar acction route ar madhome  data base ar sat a admin ar $email
//password match korbe ki na seta check korbe

Route::post('/admin-dashboard','AdminController@admin_dashboard_show_with_form_action');

//admin dashboard logo route
//admin dashbord a j metro logo ta asa setate click  korle jate dashboard er home a neya jai
//location:admin_layout.blade.php er  logo er pas a
Route::get('/logo_link','AdminController@dashbordlogolink');

//admin dashboard thek a ber ho our logout route     location::admin_layout.blade.php ar logout likher pas a

Route::get('/logout','SuperAdminController@dashboard_logout');

//add category er route     location::admin_layout.blade.php ar add category likher pas a
Route::get('/add_category','Add_Category_Controller@addcategory');


////add catagory form action route  locacation:add_category.blade.php  a route ar madhome data base acategory add hobe

Route::post('/add_catagory_form_action','Add_Category_FormAction_Controller@addcategoryformaction');

////all category er route     location::admin_layout.blade.php ar all category likher pas a

Route::get('/all_category','All_Category_Controller@allcategory');


//actice category un active kora

Route::get('/active_category_unactive_route/{category_id}','Active_category_goto_unactive_controller@active_category_unactive');

//unactive category active route
Route::get('/unactive_category_active_route/{category_id}','Unactive_category_goto_active_controller@unactive_category_active');

//category delate route
Route::get('/category_delate/{category_id}','Category_delate_controller@categorydelate');

//category edite
Route::get('/category_edit/{category_id}','Category_edit_controller@categoryedit');

//catecory edite form action controller
Route::post('/category_edit_form_action/{category_id}','Category_edit_FormAction_Controller@categoryeditformaction');

//add brand
Route::get('/add_brand','Add_Brand_Controller@addbrand');

//add brand form action route     add_brand.blade.php er form er action a deyoua

Route::post('/add_brand_form_action','Add_Brand_FormAction_Controller@addbrandformaction');


//all brand
Route::get('/all_brand','All_Brand_Controller@allbrand');


//actice brand unactive kora

Route::get('/active_brand_unactive_route/{brand_id}','Active_brand_goto_unactive_controller@active_brand_unactive');

//unactive brand active route
Route::get('/unactive_brand_active_route/{brand_id}','Unactive_brand_goto_active_controller@unactive_brand_active');

//edit brand
Route::get('/brand_edit/{brand_id}','Brand_edit_controller@brandedit');

//catecory edite form action controller
Route::post('/brand_edit_form_action/{brand_id}','Brand_edit_FormAction_Controller@brandeditformaction');

//brand delate controller
Route::get('/brand_delate/{brand_id}','Brand_delate_controller@branddelate');

//add product

Route::get('/add_product','Add_Product_Controller@addproduct');

//add product form action controller
Route::post('/add_product_form_action','Add_Product_FormAction_Controller@addproductformaction');

//all product

Route::get('/all_product','All_Product_Controller@allproduct');

//actice brand unactive kora

Route::get('/active_product_unactive_route/{product_id}','Active_product_goto_unactive_controller@active_product_unactive');

//unactive brand active route
Route::get('/unactive_product_active_route/{product_id}','Unactive_product_goto_active_controller@unactive_product_active');

//product delate route
Route::get('/product_delate/{product_id}','Product_delate_controller@productdelate');

//category edite
Route::get('/product_edit/{product_id}','product_edit_controller@productedit');

//catecory edite form action controller
Route::post('/product_edit_form_action/{product_id}','product_edit_FormAction_Controller@producteditformaction');

//slider route
Route::get('/add_slider','Add_Slider_Controller@addslider');

//add slider form action controller
Route::post('/add_slider_form_action','Add_Slider_FormAction_Controller@addsliderformaction');

//all slider
Route::get('/all_slider','All_Slider_Controller@allslider');

//actice brand unactive kora

Route::get('/active_slider_unactive_route/{slider_id}','Active_slider_goto_unactive_controller@active_slider_unactive');

//unactive brand active route
Route::get('/unactive_slider_active_route/{slider_id}','Unactive_slider_goto_active_controller@unactive_slider_active');

//slider delate
Route::get('/slider_delate/{slider_id}','Slider_delate_controller@sliderdelate');


//

//manage order
Route::get('/manage_order','Manage_order_controller@manageorder');


//unactive order active route
Route::get('/unactive_order_active_route/{order_id}','Unactive_order_goto_active_controller@unactive_order_active');

//active order unactive route
Route::get('/active_order_unactive_route/{order_id}','Active_order_goto_unactive_controller@active_order_UNactive');

//view order
Route::get('/view_order/{order_id}','View_order_controller@vieworder');


//Ecommer ar route



//Category_wise_product show
Route::get('/category_wise_product_show/{category_id}','Category_wise_product_show_controller@categorywiseproductshow');

//Brand wise product show
Route::get('/brand_wise_product_show/{brand_id}','Brand_wise_product_show_controller@brandwiseproductshow');

//ECOMMERCE logo link dynamic
Route::get('/home','SuperAdminController@logolink');


// feature product dedails
Route::get('/Features_product_view/{product_id}','Home_page_Features_product_details_controller@Featuresproductdetails');

//
//// feature product add to cart
Route::post('/feature_product_addtocart','Feature_product_add_to_cart_controller@featureproductaddtocart');

//show cart redirect route Feature product add to cart controller ater madhome add to cart page show hoise
Route::get('/show_cart','Feature_product_add_to_cart_controller@showcart');

//delate feature froduct add to cart
Route::get('/feature_froduct_delate_addtocart/{rowId}','Features_product_delate_addtocart_controller@Featuresproduct_delate_addtocart');

//feature product update quantity add to cart
Route::post('/feature_product_update_quantity_addtocart','Feature_product_update_quantity_addtocart_controller@featureproduct_update_quantity_addtocart');


//checkout and login route
    //log in and registration page
Route::get('/check_out_login','Check_out_login_controller@checkoutlogin');

// customer create a account or sign up location check_out_login.blade.php
Route::post('/customer_createaccount_formaction','Customer_create_account_checkout_controller@customercreateaccountformaction');

//customer registration korar por redirect kore ai  customer information page a asbe
Route::get('/customer_information','Customer_create_account_checkout_controller@customerinformation');

//customer information form action route

Route::post('/customer_information_form_action','Customer_information_form_action_controller@customerinformationformaction');
//redirect route jokhon customer product kothai pathabe information dilo tokhon redirect kore payment page a pathalo
Route::get('/payment','Customer_information_form_action_controller@customerpayment');
//customer logout route
Route::get('/customer_logout','Customer_logout_controller@customerlogout');

//customer login
Route::get('/customer_login','Customer_login_controller@customerlogin');


//customer login his account route
Route::post('/customer_account_login_form_action','Customer_account_login_form_action_controller@customeraccountloginformaction');


//payment order formaction royte
Route::post('/payment_order_form_action','Payment_order_form_action_controller@paymentorderformaction');
