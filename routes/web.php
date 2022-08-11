<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\FoodsController;

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

Route::get('/', [PagesController::class, 'index']);

Route::get('/about', [PagesController::class, 'about']);

Route::get('/posts', [PostsController::class, 'index']);

Route::get('/products', [ProductsController::class, 'index']);

// Route::get('/products/{id}', [ProductsController::class, 'detail'])->where('id', ['0-9']);

Route::resource('/foods', FoodsController::class);

// Route::get('/home', function () {
//     return view('home');
//     // return env('MY_NAME');
// });

// Route::get('/users', function() {
//     return 'this is page user';
// });

// Route::get('/foods', function() {
//     return ['sushi', 'sashimi'];
// });

// Route::get('/aboutMe', function() {
//     return response()->json([
//         'name'=> 'Trinh van truong',
//         'email'=> 'truong@gmail.com'
//     ]);
// });

// Route::get('/something', function() {
//     return redirect('/');
// });