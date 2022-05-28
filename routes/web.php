<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::controller(OrderController::class)->group(function () {
//     Route::get('/orders', 'index');
//     Route::get('/order/{id}', 'show');
//     Route::get('/order_create', 'create');
//     Route::post('/order_store', 'store');
//     Route::delete('/order_delete/{id}', 'delete');
//     Route::get('/order_edit/{id}', 'edit');
//     Route::put('/order_update/{id}', 'update');
// });

Route::get('/shop', function () {
    return view('shop');
});
