<?php

Route::filter('auth_check', function ()
{
	// check method move to config file
  if (Auth::guest())
  {
    $login_url = URL::to(Config::get('rpc::auth.login_path'), 'login');
    return Redirect::to($login_url);
  }
});