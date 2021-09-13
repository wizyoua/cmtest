<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellerController;

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
});

Route::get('sellers', 'App\Http\Controllers\SellerController@createStepOne')->name('seller.index');
  
Route::get('sellers/create-step-one', 'App\Http\Controllers\SellerController@createStepOne')->name('sellers.create.step.one');
Route::post('sellers/create-step-one', 'App\Http\Controllers\SellerController@postCreateStepOne')->name('sellers.create.step.one.post');
  
Route::get('sellers/create-step-two', 'App\Http\Controllers\SellerController@createStepTwo')->name('sellers.create.step.two');
Route::post('sellers/create-step-two', 'App\Http\Controllers\SellerController@postCreateStepTwo')->name('sellers.create.step.two.post');
  
Route::get('sellers/create-step-three', 'App\Http\Controllers\SellerController@createStepThree')->name('sellers.create.step.three');
Route::post('sellers/create-step-three', 'App\Http\Controllers\SellerController@postCreateStepThree')->name('sellers.create.step.three.post');