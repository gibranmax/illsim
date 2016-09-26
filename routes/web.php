<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home');
});

Route::get('api/config', function (Request $request) {

	$config = File::get("../database/data/Config.json");
	$factory = File::get("../database/data/FactoryFullRandom.json");
	
	$default = json_decode($config, true);
	$default['factory'] = json_decode($factory, true);

	$union = array_replace_recursive($default, $request->all());

	array_walk_recursive($union, function (&$item, $key)
	{
		if(str_contains($item, '%'))
			$item = str_replace('%', '', $item) / 100;
	});

	return $union;

});
