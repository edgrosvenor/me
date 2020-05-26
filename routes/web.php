<?php


use App\Http\Controllers\SendLoginLink;
use App\Http\Controllers\Temporary;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Spatie\Browsershot\Browsershot;

/** @todo - Delete this entire group of routes before launch */
Route::group(['prefix' => 'tmp'], function() {
    Route::get('/panic', [Temporary::class, 'panic'])->name('panic-if-launched');
});

Route::get('/login', function () { return response()->noContent(); })->name('login');
Route::post('/logout', \App\Http\Controllers\LogOut::class)->name('logout');

Route::get('/', \App\Http\Controllers\Welcome::class)->name('welcome');
Route::get('/location', \App\Http\Controllers\Location::class)->name('location');
Route::get('/blog', function() {})->name('blog');
Route::get('/open-source', \App\Http\Controllers\OpenSource::class)->name('open-source');
Route::get('/blog', [\App\Http\Controllers\Blog::class, 'index'])->name('blog');
Route::get('/blog/{article}', [\App\Http\Controllers\Blog::class, 'article'])->name('article');
Route::get('/rss', [\App\Http\Controllers\Blog::class, 'rss'])->name('rss');
Route::get('/demo/{demo}', \App\Http\Controllers\Demo::class);
Route::get('/'.config('env.send_login_link'), SendLoginLink::class);
Route::get('/twitter_card/{article?}', \App\Http\Controllers\TwitterCard::class);

Route::get('/home', \App\Http\Controllers\Home::class)->middleware('auth')->name('home');


