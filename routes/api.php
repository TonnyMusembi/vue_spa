<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrCodeController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\Api\PhoneController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CrmController;
use App\Http\Controllers\CupController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RewardController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\TrendController;
use Symfony\Component\HttpKernel\DataCollector\DataCollector;

use App\Http\Controllers\Api\ApiController;

//use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\AuthController;


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

Route::resource('books',BookController::class);
//Route::get('books', [BookController::class]);
//Route::post('books/{book}/ratings', [RatingController::class]);
Route::resource('phones', PhoneController::class);
//Route::post('phones', PhoneController::class);

Route::resource('blogs', BlogController::class);

Route::resource('cups', CupController::class);

Route::resource('trends', TrendController::class);

Route::resource('contacts', ContactController::class);
Route::resource('teams',TeamsController::class);

Route::resource('articles',ArticleController::class);
Route::resource('posts',PostController::class);

Route::resource('sales',SaleController::class);

Route::resource('data',DataController::class);

Route::resource('rewards',RewardController::class);

Route::resource('crms',CrmController::class);

// Route::resource('data',DataCollector::class);

Route::get("list-students", [ApiController::class, "listStudents"]);
Route::get("single-student/{id}", [ApiController::class, "getSingleStudent"]);
Route::post("add-student", [ApiController::class, "CreateStudent"]);
Route::put("update-student/{id}", [ApiController::class, "updateStudent"]);
Route::delete("delete-student/{id}", [ApiController::class, "deleteStudent"]);

//Route::post("/register",[Controllers\Api\AuthController::class,'register']);
//Route::post("/login",[Controllers\Api\AuthController::class,'login']);
Route::post('/register', [AuthController::class, 'register']);
