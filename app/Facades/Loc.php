<?php namespace App\Facades;

	use App\Locale;
	use Illuminate\Support\Facades\Facade;
	/**
	 * Created by PhpStorm.
	 * User: Jesson
	 * Date: 2018-04-29
	 * Time: 12:36
	 */
	
	class Loc extends Illuminate\Suport\Facades\Facade
	{
		
		/**
		 * Get the registered name of the component.
		 *
		 * @return string
		 */
		protected static function getFacadeAccessor() { return Locale::class; }
	
	}
