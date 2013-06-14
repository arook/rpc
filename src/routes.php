<?php

$uri = Config::get('rpc::uri');

Route::group(array(/*'domain' => '{module}.dev', */'prefix' => $uri, 'before' => 'auth_check'), function() use ($uri)
{
  
	Route::get('/', array(
		'as' => $uri,
		'uses' => 'Bluebanner\Rpc\HomeController@index'
	));
	
	Route::resource('config', 'Bluebanner\Rpc\ConfigurationController');
	
	Route::group(array('prefix' => 'client', 'before' => 'client_bind'), function()
	{
		
		Route::resource('define', 'Bluebanner\Rpc\DefinitionController');
		
	});

});


// 
// Route::group(array('prefix' => $uri, 'before' => 'auth_check|client_choose'), function() use ($uri)
// {
// 	Route::get($uri . '/client/definition/item', array(
// 		'as' => 'rpc_define_item',
// 		'uses' => 'Bluebanner\Rpc\DefinitionController@item'
// 	));
// 	
// 	Route::get($uri . '/client/definition/item/create', array(
// 		'as' => 'rpc_define_item_create',
// 		'uses' => 'Bluebanner\Rpc\DefinitionController@create'
// 	));
// 	
// 	Route::get($uri . '/client/definition/item/save', array(
// 		'as' => 'rpc_define_item_save',
// 		'uses' => 'Bluebanner\Rpc\DefinitionController@save'
// 	));
// 	
// 	Route::get($uri . '/client/definition/item/{id}', array(
// 		'as' => 'rpc_define_item_edit',
// 		'uses' => 'Bluebanner\Rpc\DefinitionController@item'
// 	));
// 	
// 	Route::get($uri . '/client/definition/item/{id}', array(
// 		'as' => 'rpc_define_sop',
// 		'uses' => 'Bluebanner\Rpc\DefinitionController@item'
// 	));
// 	
// 	Route::get($uri . '/client/definition/item/{id}', array(
// 		'as' => 'rpc_define_sop_edit',
// 		'uses' => 'Bluebanner\Rpc\DefinitionController@item'
// 	));
// });
// 
// Route::group(array('before' => 'auth_check'), function() use ($uri)
// {
// 	
// 	Route::get($uri . '/config/definition/item', array(
// 		'as' => 'rpc_config_company',
// 		'uses' => 'Bluebanner\Rpc\DefinitionController@item'
// 	));
// 	
// 	Route::get($uri . '/config/definition/item', array(
// 		'as' => 'rpc_config_users',
// 		'uses' => 'Bluebanner\Rpc\DefinitionController@item'
// 	));
// });
// Route::controller('rpc/configuration', 'Bluebanner\Rpc\DefinitionController');


Route::get('login', function()
{
  return View::make('rpc::login');
});

Route::post('login', function() use ($uri)
{
  $userdata = array(
		'username' => Input::get('username'),
		'password' => Input::get('password'),
		// 'remember' => Input::get('remember'),
	);
	
	if (Auth::attempt($userdata)) {
		return Redirect::to($uri);
	} else {
		return Redirect::to('login')
			->withInput(Input::except('password'))
			->with('login_errors', true);
	}
});

Route::get('logout', function() {
	Auth::logout();
	return Redirect::to('login');
});