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

Route::get('/view', 'Object\WebController@showMinecraftVersions');

Route::get('/view/{MinecraftVersion}', 'Object\WebController@showObjectTypes');

Route::get('/view/{MinecraftVersion}/{ObjectType}', 'Object\WebController@showObjects');

Route::get('/view/{MinecraftVersion}/{ObjectType}/{ObjectName}', 'Object\WebController@showObjectVersions');

Route::get('/view/{MinecraftVersion}/{ObjectType}/{ObjectName}/{ObjectVersion}', 'Object\WebController@showObjectData');

Route::get('/search', 'Object\SearchController@showSearch');

Auth::routes();

Route::get('/home', 'HomeController@index');
