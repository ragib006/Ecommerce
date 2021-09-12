@extends('layout')

@section('content')




<section id="form"><!--form-->
  <div class="container">
    <div class="row">
      <div class="col-sm-4 col-sm-offset-1">
        <div class="login-form" style=" margin-left:-80px; width:250px;"><!--login form-->
          <h2>Login to your account</h2>



          <form action="{{url('/customer_account_login_form_action')}}" method="post">
                 {{ csrf_field() }}
            <input  style="border:1px solid black; " type="text" name="customer_email" placeholder=" Enter Email Address" />
            <input  style="border:1px solid black;" type="password" name="customer_password" placeholder="Enter Password" />

            <button type="submit" class="btn btn-default">Login</button>
          </form>


        </div><!--/login form-->
      </div>
      <div class="col-sm-1">
        <h2 class="or">OR</h2>
      </div>
      <div class="col-sm-4">
        <div class="signup-form"  style="margin-left:-160px;width:300px;"><!--sign up form-->
          <h2>New User Signup!</h2>
          <form action="{{url('/customer_createaccount_formaction')}}" method="post">

            {{ csrf_field() }}
            <input  style="border:1px solid black;"type="text"  name="customer_name" placeholder="Enter Name" required="" />
            <input  style="border:1px solid black;" type="email" name="customer_email"  placeholder="Email Address" required="" />
            <input  style="border:1px solid black;" type="text"  name="customer_password" placeholder="Phone number" required="" />
            <input  style="border:1px solid black;" type="password" name="customer_phone" placeholder="Password" required="" />
            <button type="submit" class="btn btn-default">Signup</button>
          </form>
        </div><!--/sign up form-->
      </div>
    </div>
  </div>
</section><!--/form-->







@endsection
