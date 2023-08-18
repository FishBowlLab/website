<?php

use App\Http\Controllers\ShirtController;
use App\Http\Controllers\TeachingResourcesController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
//Route::get('/about', 'HomeController@about');

Route::resource('resources', TeachingResourcesController::class);

// Routes for shopping cart
// https://www.positronx.io/laravel-livewire-add-product-to-shopping-cart-tutorial/

Route::get('/dashboard', [ShirtController::class, 'index']);
Route::get('/shopping-cart', [ShirtController::class, 'shirtCart'])->name('shopping.cart');
Route::get('/shirt/{id}', [ShirtController::class, "addShirttoCart"])->name('addshirt.to.cart');
Route::patch('/update-shopping-cart', [ShirtController::class, "updateCart"])->name('update.shopping.cart');
Route::delete('delete-cart-product', [ShirtController::class, 'deleteProduct'])->name('delete.cart.product');
