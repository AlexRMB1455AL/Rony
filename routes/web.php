<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/about', function () {
//    return view('about');
//});
Route::get('/about', [\App\Http\Controllers\AboutController::class, 'about']);
//
////Route::get('/contact', function () {
////    return 'contact';
////});
Route::get('/contact', [\App\Http\Controllers\ContactsController::class, 'contact']);
//
////Route::get('/services', function () {
////    return 'services';
////});
Route::get('/services', [\App\Http\Controllers\MyServicesController::class, 'service']);
//
//Route::get('/example', function () {;
//    return view('example');
Route::get('/trust', [\App\Http\Controllers\PostController::class, 'index']);
//});
//Route::get('/home', function () {
//    return view('myhome');
//});
//Route::get('/home/home2', function () {
//    return view('welcome');
//});
Route::get('/home/home2_index', [\App\Http\Controllers\MyPlaceController::class, 'index']);
Route::get('/rony/create', [\App\Http\Controllers\PostController::class, 'create']);
Route::get('rony/update', [\App\Http\Controllers\PostController::class, 'update']);
Route::get('rony/delete', [\App\Http\Controllers\PostController::class, 'delete']);
Route::get('rony/firstOrCreate', [\App\Http\Controllers\PostController::class, 'firstOrCreate']);
Route::get('rony/updateOrCreate', [\App\Http\Controllers\PostController::class, 'updateOrCreate']);
