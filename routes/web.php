<?php

//use App\Http\Controllers\AturController;

use App\Http\Controllers\homecontroller;
use app\Http\Controllers\aturcontroller;
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

Route::get('/aa', function () {
    return view('welcome');
});

Route::get('/',[homecontroller::class, 'index']);

Route::get('/input',[homecontroller::class, 'input']);
Route::get('/daftar',[homecontroller::class, 'daftar']);