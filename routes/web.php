<?php

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
Route::middleware(['auth','admin'])->group(function(){
    Route::get('/product/create', [App\Http\Controllers\ProductController::class,'create']);
    Route::post('/product', [App\Http\Controllers\ProductController::class,'store']);
    Route::post('/user', [App\Http\Controllers\ProductController::class,'store']);
    Route::get('/admin/users', [App\Http\Controllers\ProductController::class,'users']); 
    Route::post('/admin/users', [App\Http\Controllers\ProductController::class,'block']);
    Route::get('/userproducts', [\App\Http\Controllers\ProductController::class,'userproduct'])->middleware(['auth']);
    Route::get('/alluserproducts/{userid}', [\App\Http\Controllers\ProductController::class,'usershow']);
});

Route::middleware(['auth'])->group(function(){
    Route::get('/product', [\App\Http\Controllers\ProductController::class,'index'])->middleware(['auth']);
    Route::get('/product/{id}', [\App\Http\Controllers\ProductController::class,'show']);
    Route::get('/userproducts', [\App\Http\Controllers\ProductController::class,'userproduct'])->middleware(['auth']);
    Route::get('/alluserproducts/{userid}', [\App\Http\Controllers\ProductController::class,'usershow']);
    Route::get('/review', [App\Http\Controllers\ProductController::class,'reviewproduct']);
    Route::get('/review/{userid}', [App\Http\Controllers\ProductController::class,'reviewshow']);
    Route::get('/', [\App\Http\Controllers\ProductController::class,'index'])->middleware(['auth']);   
});


Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
