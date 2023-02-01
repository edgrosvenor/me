<?php

use App\Http\Controllers\LikesController;
use App\Http\Controllers\MastodonCallback;
use App\Http\Controllers\MastodonLogin;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RepliesController;
use App\Models\Person;
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

Route::get('/', function () {
    return redirect(route('person', ['person' => Person::first()]));
});

Route::group(['prefix' => '{person:handle}'], function() {
    Route::get('/{filter?}', PersonController::class)->name('person');
    Route::get('/status/{post:uuid}', PostController::class)->name('post');
});

Route::get('login', MastodonLogin::class);
Route::get('callback', MastodonCallback::class);

