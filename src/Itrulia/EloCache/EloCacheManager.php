<?php namespace Itrulia\EloCache;

class EloCacheManager extends \Illuminate\Cache\CacheManager {

	/**
	 * Create an instance of the file cache driver.
	 *
	 * @return \Itrulia\EloCache\EloFileStore
	 */
	protected function createFileDriver()
	{
		$path = $this->app['config']['cache.path'];

		return $this->repository(new EloFileStore($this->app['files'], $path));
	}
}