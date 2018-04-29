<?php
	/**
	 * Created by PhpStorm.
	 * User: Jesson
	 * Date: 2018-04-29
	 * Time: 11:57
	 */
	/**
	 * Retrieves Locale Instance
	 * @return App\Locale
	 */
	function locale() {
		
		return app()->make( App\Locale::class );
	}
