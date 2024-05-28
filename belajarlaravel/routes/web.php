<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

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
// default route
Route::get('/', [HomeController::class,'index']);

route::get('/daftar', [AuthController::class,'daftar']);

route::post('/home',[AuthController::class, 'home']);

route::get('/data-table', function(){
    return view('page.data-table');
});

route::get('table', function(){
    return view('page.table');
});