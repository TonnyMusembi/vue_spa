<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
//use App\Http\Controllers\QrCodeController;



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

Route::get('{any}', function () {
    return view('app');
})->where('any', '.*');


Route::get('/file-import',[UserController::class,'importView'])->name('import-view');
Route::post('/import',[UserController::class,'import'])->name('import');
Route::get('/export-users',[UserController::class,'exportUsers'])->name('export-users');

//Route::get('/qrcode', [QrCodeController::class, 'index']);
Route::get('send-email-queue', function(){
    $details['email'] = '<EMAIL ADDRESS>';
    dispatch(new App\Jobs\TestEmailJob($details));
    return response()->json(['message'=>'Mail Send Successfully!!']);
});
Route::get('posts', [PostController::class,'index']); // List Posts
Route::post('posts', [PostController::class,'store']); // Create Post
Route::get('posts/{id}', [PostController::class,'show']); // Detail of Post
Route::put('posts/{id}', [PostController::class,'update']); // Update Post
Route::delete('posts/{id}', [PostController::class,'destroy']);

Route::get('countries',[CountryController::class]);
Route::post('countries',[CountryController::class]);
