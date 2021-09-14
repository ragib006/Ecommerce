<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
 
  public function boot(UrlGenerator $url){
	  
	  if(env('REDIRECT_HTTPS')){
		  
		  $url->formatSchema('https');
		  
	  }
	  
  }
 
 
 public function register(){
	  
	  if(env('REDIRECT_HTTPS')){
		  
		  $this->app['request']->server->set('HTTPS',true);
		  
	  }
	  
  }
 
 
 
 
 
 
 
}
