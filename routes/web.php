<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('index');


Route::get('/home', function () {
    return view('home');
});

Route::get('/foo', function (){
	return view('foo');
    //return 'Hello Philippines<br> <a href="/bar">Go to Bar Page</a>'; THIS IS A MANUAL WAY 
})->name('foo');

Route::get('/bar', function (){
	return view('bar');
    //return 'Hello World<br> <a href="/foo"> Go to Foo Page</a>';
})->name('bar');

Route::get('/shoutout/{text}', function ($text){
	$colors=array (
		"red" => "means passion", //key value pair .. the "red" is thwe key and "means passion is the value"
		"green" => "color of nature",
		"blue" =>"color sa dagat",
		"yellow"=>"color sa ngipon nga way toothbrush"
	);
	return view('shoutout', 
		   array('text'=>$text,
		   'colors'=>$colors));
})->name('shoutout');


//==============================================================================================
Route::get('/basic-arithmetic/{operation}/{num1}/{num2}', function ($operation,$num1,$num2){
	
	return view('basic-arithmetic', 
		   array('operation'=>$operation, 
		   	     'num1'=>$num1,
		   	     'num2'=>$num2, 
		   	     'sum'=>$sum=$num1+$num2, 
		   	     'diff'=>$diff=$num1-$num2, 
		   	     'mul'=>$mul=$num1*$num2,
		   	 	 'div'=>$div=$num1/$num2));
})->name('basic-arithmetic');

Route::get('/middleware/{age}', function ($age){
	return view('age', array('age'=>$age));

})->middleware('age');

Route::get('/pages/contact', 'PagesController@contactPage');

Route::get('/pages/middleware/{age}', 'PagesController@middlewareAgePage');
Route::get('/pages/shoutout/{text}', 'PagesController@shoutoutPage')->name('shoutout');

Route::get('/crushes', 'CrushesController@index')->name('crushes.index');

Route::get('/crushes/create', 'CrushesController@create')->name('crushes.create');
Route::post('/crushes/store', 'CrushesController@store')->name('crushes.store');
Route::get('/crushes/{id}/edit', 'CrushesController@edit')->name('crushes.id.edit');
Route::post('/crushes/{id}/update', 'CrushesController@update')->name('crushes.id.update');
Route::get('/crushes/{id}/destroy', 'CrushesController@destroy')->name('crushes.id.destroy');
Route::get('/crushes/profile/{id}', 'QualitiesController@show')->name('crushes.id.show');
Route::get('/crushes/add', 'QualitiesController@add')->name('crushes.add');
Route::post('/crushes/store', 'QualitiesController@store')->name('crushes.store');
//Route::get('/crushes/profile/{id}', 'QualitiesController@qualshow')->name('crushes.id.qualshow');
