<?php

use App\Http\Controllers\Dev\Frontend\HomeController;
use App\Http\Controllers\Dev\Frontend\StoryController;
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
Route::controller(HomeController::class) -> group(function(){
    Route::get('/home', 'index') -> name('home');
    Route::get('/', 'index') -> name('home');
});
    
Route::controller(StoryController::class) -> group(function() {
    Route::get('/{slug}', 'getStory') -> name('get.story.by.slug');
});


