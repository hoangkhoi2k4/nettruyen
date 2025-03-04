<?php

use App\Http\Controllers\Api\Frontend\CategoryController;
use App\Http\Controllers\Api\Frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\Api\Frontend\StoryController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/config', function () {
    return response()->json([
        'api_base_url' => env('API_BASE_URL')
    ]);
});
    

Route::get('/home', [FrontendHomeController::class, 'index']);
Route::get('/{slug}', [StoryController::class, 'getStory']);
Route::get('/category/{slug}', [CategoryController::class, 'getCategory']);