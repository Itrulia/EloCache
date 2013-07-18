<?php namespace Itrulia\EloCache;

use Closure;
use Illuminate\Filesystem\Filesystem;


class EloSection extends \Illuminate\Cache\Section {

	/**
	 * Create a new section instance.
	 * @param \Itrulia\EloCache\EloFileStore $name
	 * @param Filesystem                       $files
	 * @param                                  $path
	 */
	public function __construct($name, Filesystem $files, $path) {
		parent::__construct(new EloFileStore($files, $path), $name);
	}

	/**
	 * Remove all items from the cache.
	 * @return void
	 */
	public function flush() {
		unlink($this->store->getDirectory());
	}
}