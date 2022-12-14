<?php

use App\Http\Controllers\API\ProgramController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CupController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
//use App\Http\Controllers\QrCodeController;

use App\Http\Controllers\JointableController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TransactionController;

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

// Route::get('{any}', function () {
//     return view('app');
// })->where('any', '.*');

Route::get('/', function () {
    return view('welcome');
});

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


Route::get('join_table', [JointableController::class, 'index']);

Route::resource('api/programs',  App\Http\Controllers\API\ProgramController::class);
Route::get('api/orders',[OrderController::class]);

Route::get('api/transactions',[TransactionController::class,'index']);

Route::resource('api/contacts', 'App\Http\Controllers\ContactController');
Route::get('api/games',[GameController::class]);
Route::get('cups',[CupController::class,'index']);

Route::post("register", [StudentController::class, "register"]);
Route::post("login", [StudentController::class, "login"]);
Route::group(["middleware" => ["auth:sanctum"]], function(){
Route::get("profile", [ProjectController::class, "profile"]);
    Route::get("logout", [StudentController::class, "logout"]);
Route::post("create-project", [ProjectController::class, "createProject"]);
    Route::get("list-project", [ProjectController::class, "listProject"]);
    Route::get("single-project/{id}", [ProjectController::class, "singleProject"]);
    Route::delete("delete-project/{id}", [ProjectController::class, "deleteProject"]);
});
