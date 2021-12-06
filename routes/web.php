<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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

Route::get('/home', function () {
    return view('home');
});

// Rout to users
Route::get('/users', function () {
    return 'Some users';
});

// Route to the best
Route::get('/ilmeglio', function () {
    return "Il meglio è " . env('APP_NAME');
});

// Nuova Routing in laravel 8
Route::get('/products', [ProductsController::class, 'index']);
//Route::get('/products', [ProductsController::class, 'indexWith']);
Route::get('/products/about', [ProductsController::class, 'about']);
//Route::get('/products', 'App\Http\Controllers\ProductsController@index');

// Routing prima di Laravel 8 (che non funziona ora)
//Route::get('/products', 'ProductsController@index');

/*
// Route to JSON(USERS)
Route::get('/users', function () {
    return ['php', 'Leonardo', 'Ramaj'];
});

// Route to users with a JSON as a response
Route::get('/users', function () {
    return response()->json([
        'name' => 'Leonardo',
        'surname' => 'Ramaj'
    ]);
});

// Route back to the home
Route::get('/users', function () {
    return redirect('/');
});*/