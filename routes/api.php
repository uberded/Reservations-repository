<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::get('/user', function (Request $request) {
 //   return $request->user();
//})->middleware('auth:api');

Route::get('', 'Object/APIController@showMinecraftVersions');

Route::get('/{MinecraftVersion}', 'Object/APIController@showObjectType');

Route::get('/{MinecraftVersion}/{ObjectType}', 'Object/APIController@showObjects');

Route::get('/{MinecraftVersion}/{ObjectType}/{ObjectName}', 'Object/APIController@showObjectVersions');

Route::get(('/{MinecraftVersion}/{ObjectType}/{ObjectName}/{ObjectVersion}', 'Object/APIController@showObjectData');
