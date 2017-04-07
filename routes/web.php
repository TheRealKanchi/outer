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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('posts', 'PostController');

Route::get('formulario', 'StorageController@index');
	
Route::post('storage/create', 'StorageController@save');


Route::get('storage/{file}', function ($file) {
     $public_path = public_path();
     $url = $public_path.'/storage/'.$file;
     dd($url);
     echo ($url);
     if (Storage::exists($file))
     {
       return response()->download($url);
     }
    
     abort(404);

});

Auth::routes();

Route::get('/home', 'HomeController@index');
