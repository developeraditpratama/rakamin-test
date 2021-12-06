<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

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

Route::group([
    'middleware' => 'api',
    'prefix' => 'message'

], function ($router) {
    Route::get('/', [MessageController::class, 'index'])->name('message.index');
    Route::post('/store', [MessageController::class, 'store'])->name('message.store');
    Route::get('/show/{user_id}/{to_user_id}', [MessageController::class, 'show'])->name('message.showListMessage');
    Route::post('/store/reply', [MessageController::class, 'storeReplay'])->name('message.store.reply');
    Route::get('/allMessage/{user_id}', [MessageController::class, 'allMessage'])->name('message.showAll');
});
