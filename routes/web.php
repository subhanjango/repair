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
Auth::routes();
Route::group(['middleware' => ['auth']], function () {
Route::group(['prefix' => 'admin/'], function () {
//Login    
Route::get('/', function () {
    return view('auth.login');
})->middleware('guest');
//logout
Route::get('logout',function(){
    Auth::logout();
    return view('auth.login');
});
//Admin Dashboard
Route::get('home', 'Admin\\HomeController@index');
//Setting
Route::get('gsetting', 'Admin\\SettingController@setting');
Route::post('setting/update', 'Admin\\SettingController@update');
//Services
Route::any('service/add', 'Admin\\ServiceController@add');
Route::get('service/list', 'Admin\\ServiceController@list');
Route::get('service/delete/{id}', 'Admin\\ServiceController@delete');
Route::any('service/edit/{id}', 'Admin\\ServiceController@edit');
//Pricing
Route::any('pricing/add', 'Admin\\PricingController@add');
Route::get('pricing/list', 'Admin\\PricingController@list');
Route::any('pricingDetails', 'Admin\\PricingController@details');
Route::any('pricing/edit/{id}', 'Admin\\PricingController@edit');
Route::get('pricing/delete/{id}', 'Admin\\PricingController@delete');
//Works
Route::get('works', 'Admin\\WorksController@works');
Route::post('works/add', 'Admin\\WorksController@add');
//About
Route::get('about', 'Admin\\AboutController@about');
Route::post('about/add', 'Admin\\AboutController@add');
//Blogs
Route::any('blog/add', 'Admin\\BlogController@add');
Route::get('blog/list', 'Admin\\BlogController@list');
Route::get('blog/delete/{id}', 'Admin\\BlogController@delete');
Route::any('blog/edit/{id}', 'Admin\\BlogController@edit');
//Modules
Route::any('modules/add', 'Admin\\ModuleController@add');
Route::get('modules/list', 'Admin\\ModuleController@list');
Route::get('modules/delete/{id}', 'Admin\\ModuleController@delete');
Route::any('modules/edit/{id}', 'Admin\\ModuleController@edit');
Route::any('moduleOptions', 'Admin\\ModuleController@options');
//Modules
Route::any('testimonials/add', 'Admin\\TestimonialController@add');
Route::get('testimonials/list', 'Admin\\TestimonialController@list');
Route::get('testimonials/delete/{id}', 'Admin\\TestimonialController@delete');
Route::any('testimonial/edit/{id}', 'Admin\\TestimonialController@edit');
});

});

//Frontend
Route::get('/', 'Frontend\\HomeController@index');