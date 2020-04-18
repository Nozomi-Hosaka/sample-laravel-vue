<?php

use App\Http\Controllers\Top\ShowTopAction;
use App\Http\Controllers\Vue\ShowSpaAction;
use App\Http\Controllers\Vue\ShowVueAndLaravelPageAction;
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

Route::get('/', ShowTopAction::class)->name('top');
Route::get('/vue_laravel', ShowVueAndLaravelPageAction::class)->name('vue_laravel');
Route::get('/spa', ShowSpaAction::class)->name('spa');

/**
 * Vueのルーティング対策で、これまで無いルーティングはすべてここにVueのSPAルートに集結
 */
// default
Route::get('/{controller?}/{action?}/{any?}', function ($page) {
    return view('pages/spa/index');
});
