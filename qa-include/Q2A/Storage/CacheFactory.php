<?php
/*
	Question2Answer by Gideon Greenspan and contributors
	http://www.question2answer.org/

	File: qa-include/Q2A/Storage/CacheManager.php
	Description: Handler for caching system.


	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

/**
 * Caches data (typically from database queries) to the filesystem.
 */
class Q2A_Storage_CacheFactory
{
	/**
	 * Get the appropriate cache handler.
	 * @return Q2A_Storage_CacheInterface The cache handler.
	 */
	public static function getCacheDriver()
	{
		$config = array(
			'enabled' => (int) qa_opt('caching_enabled') === 1,
			'dir' => defined('QA_CACHE_DIRECTORY') ? QA_CACHE_DIRECTORY : null,
		);

		return new Q2A_Storage_FileCacheDriver($config);
	}
}
