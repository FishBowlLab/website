<?php

// This is for the shirt app
//use App\Http\Controllers\ShirtDashboardController;
//use App\Http\Controllers\ShirtController;

// These are for the Blockly App

use App\Http\Controllers\BuylistController;
use App\Http\Controllers\LessonsCompletedController;
use App\Http\Controllers\TeachingResourcesController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ModuleController;

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
    return view('welcome');
});

// Temporarily block registration
Auth::routes(['register'=>false]);
//Auth::routes(["verify"=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('teaching', TeachingResourcesController::class);

Route::controller(TeacherController::class)->group(function(){
    Route::get('teacher', "index")->name("teacher.index");
    Route::get('teacher/create/{id}', "create")->name("teacher.create");
    Route::get('teacher/{id}', "show")->name("teacher.show");
    Route::get('teacher/{id}/edit', "edit")->name("teacher.edit");
    Route::put('teacher/{id}', 'update')->name('teacher.update');
    Route::post('teacher', "store")->name("teacher.store");
    Route::delete("teacher/{id}", "destroy")->name("teacher.destroy");
});

Route::resource("buylist", BuylistController::class);
Route::resource("modules", ModuleController::class)->only(['index', 'show']);

Route::resource("student", StudentController::class)->only(["index", "show", "store"]);
Route::resource("student/lessons", LessonsCompletedController::class);

// Routes for shopping cart
// https://www.positronx.io/laravel-livewire-add-product-to-shopping-cart-tutorial/
//Route::resource('dashboard',ShirtDashboardController::class);
/*
Route::get('/dashboard', [ShirtController::class, 'index']);
Route::get('/shopping-cart', [ShirtController::class, 'shirtCart'])->name('shopping.cart');
Route::get('/shirt/{id}', [ShirtController::class, "addShirttoCart"])->name('addshirt.to.cart');
Route::patch('/update-shopping-cart', [ShirtController::class, "updateCart"])->name('update.shopping.cart');
Route::delete('delete-cart-product', [ShirtController::class, 'deleteProduct'])->name('delete.cart.product');
*/