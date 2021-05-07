<?php

use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class, 'list']);
Route::get('/input', [PagesController::class, 'input']);
Route::get('/generate', [PagesController::class, 'generate']);
Route::get('/sukses', [PagesController::class, 'sukses']);
Route::get('/delete', [PagesController::class, 'delete']);

Route::post('/store', [PagesController::class, 'store']);
Route::post('/generate', [PagesController::class, 'sertifikat']);
