<?php

use Carbon\Carbon;
Route::get('/', function () {
    return view('welcome');
});


Route::resource('/posts','PostsController');

Route::get('/dates',function()
{
	$date = new DateTime();
	echo $date->format('M-D-Y');
	echo "<br/>";

	echo Carbon::now();

	echo "<br/>";

	echo Carbon::now()->diffForHumans();
    
    echo "<br/>";
	echo Carbon::now()->addDay(10)->diffForHumans();
	echo "<br/>";

	echo Carbon::yesterday()->diffForHumans();
});