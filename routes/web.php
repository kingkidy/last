<?php

use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\BookingsController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//admin

Route::prefix('admin')->middleware('auth')->group(function(){
    

});

Route::get('/', [PostsController::class, 'index']);

Route::get('/about', function () {
    return view('about');
});

/*
Route::get('/services', function () {
    return view('services');
});
*/

/*
Route::get('/bookings', function () {
    return view('bookings');
});
*/


Route::get('/index', function () {
    return view('index');
});





Route::resource("/posting", PostsController::class);



Auth::routes(

    
);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/dashboard', [BookingsController::class, 'index'])->middleware('auth');








