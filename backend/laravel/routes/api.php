<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/ping', function () {
    return 'Welcome to Design Patterns';
});

Route::namespace('DesignPatterns')->prefix('design_patterns')->group(function () {

    Route::namespace('Strategies')->prefix('strategies')->group(function () {
        Route::prefix('array_formatter')->group(function () {
            Route::get('all_formats', 'ArrayFormatterController@getAllFormats');
        });

    });

});
