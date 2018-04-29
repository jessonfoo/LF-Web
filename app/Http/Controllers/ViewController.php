<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;

class ViewController extends Controller
{
	public function index(){
		return View::make('welcome');
	}
	
}
