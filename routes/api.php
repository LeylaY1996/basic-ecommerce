<?php

use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\SliderController;
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

Route::resource('products', ProductController::class);

Route::resource('sliders', SliderController::class);

/* Route::group(['namespace' => 'Api'], function () {
    Route::group(['namespace' => 'Products'], function () {
       
    });

    Route::group(['namespace' => 'Slider'], function () {
    });
   
}); */