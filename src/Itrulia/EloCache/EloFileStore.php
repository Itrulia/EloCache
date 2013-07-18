<?php namespace Itrulia\EloCache;

class EloFileStore extends \Illuminate\Cache\FileStore implements \Illuminate\Cache\StoreInterface {

	/**
	 * Begin executing a new section operation.
	 *
	 * @param  string  $name
	 * @return \Illuminate\Cache\Section
	 */
	public function section($name)
	{
		return new EloSection($name, $this->files, $this->path($name));
	}
}
