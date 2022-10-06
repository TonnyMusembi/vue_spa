<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrCodeController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\Api\PhoneController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CupController;
use App\Http\Controllers\TrendController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('category',App\Http\Controllers\CategoryController::class)->only(['index','store','show','update','destroy']);
Route::get('/qrcode', [QrCodeController::class, 'index']);

Route::get('/users',[UserController::class,'index']);


Route::get('books', [BookController::class]);
Route::post('books/{book}/ratings', [RatingController::class]);
Route::resource('phones', PhoneController::class);
//Route::post('phones', PhoneController::class);

Route::resource('blogs', BlogController::class);

Route::resource('cups', CupController::class);

Route::resource('trends', TrendController::class);
