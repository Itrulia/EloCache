<?php namespace Itrulia\EloCache;

use Illuminate\Support\ServiceProvider;

class EloCacheServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 * @var bool
	 */
	protected $defer = true;

	public function boot() {
		$this->package('itrulia/elo-cache');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['cache'] = $this->app->share(function($app)
		{
			return new EloCacheManager($app);
		});
	}

	/**
	 * Get the services provided by the provider.
	 * @return array
	 */
	public function provides() {
		return array('cache');
	}
}