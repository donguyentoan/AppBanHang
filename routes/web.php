<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\homeController;

use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\adminController;
use App\Http\Controllers\coffeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\addtocartController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\oder_adminController;
use App\Http\Controllers\Admin\AdminProductController;


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

Route::get('/products/{id}' , [ProductController::class, 'show']);

Route::resource('categories' , CategoriesController::class);

Route::get('/showcart', [addtocartController::class, 'showaddtocart']);
Route::get('/addtocart/{id}', [addtocartController::class, 'addProductToCart']);
Route::get('/deletecart/{id}', [addtocartController::class, 'deleteProductToCart']);

Route::get('/checkout' , [checkoutController::class , 'index']);


Route::get('/coffees', [coffeController::class , 'index']);

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', [RegisterController::class , 'register']);
   
Route::get('/login', function () { return view('login');})->name('login');

Route::post('/login', [AuthController::class, 'login']);


Route::get('/close' , [checkoutController::class, 'close']);
Route::resource('dashboard/products' , AdminProductController::class);

Route::get('/oder' , [oder_adminController::class , 'index']);

Route::get('/' , [homeController::class, 'index'])->middleware('auth');
        


Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});




Route::get('/order' , [OrderController::class, 'index']);




