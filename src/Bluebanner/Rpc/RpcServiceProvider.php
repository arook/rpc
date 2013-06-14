<?php namespace Bluebanner\Rpc;

use Illuminate\Support\ServiceProvider;

class RpcServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('bluebanner/rpc');
		
		include __DIR__.'/../../filters.php';
		
		include __DIR__.'/../../routes.php';
		
		$app = $this->app;
		
		if ($app['config']->get('rpc::enabled', true)) {
		  
		}
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
	  $this->app['rpc'] = $this->app->share(function ($app)
	  {
	    return new Rpc($app['view']);
	  });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('rpc');
	}

}