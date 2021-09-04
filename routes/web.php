<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MessageController;

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

/*Route::get('/', function () {
    return view('app');
});*/


route::get('/', [HomeController::class, 'index'])->name('/');
route::get('watch', [HomeController::class, 'watch'])->name('watch');
route::get('News-Details', [HomeController::class, 'details'])->name('details');
route::get('All-News', [HomeController::class, 'news'])->name('all.news');
route::get('Exlusive-News', [HomeController::class, 'excus'])->name('ex.news');
route::get('Home-Search-News', [HomeController::class, 'news_search'])->name('news.search');
route::get('Get-Today-News', [HomeController::class, 'get_today_news'])->name('today.get.news');
route::get('Get-Yesterday-News', [HomeController::class, 'get_yesterday_news'])->name('yesterday.get.news');
route::post('Get-Likes', [HomeController::class, 'like'])->name('news.like');

route::get('Get-Match-Details', [HomeController::class, 'get_match_details'])->name('get.details.match');


route::get('Get-Yesterday-Match', [HomeController::class, 'yesterday_match'])->name('yesterday.get.matches');
route::get('Get-Tomorrow-Match', [HomeController::class, 'tomorrow_match'])->name('tomorrow.get.matches');

route::post('store-comment', [MessageController::class, 'store'])->name('store.comment');

Route::group(['middleware' => ['auth', 'admin']], function () {

    route::get('Dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    route::get('News', [AdminController::class, 'news'])->name('news');
    route::get('Create-News', [AdminController::class, 'create'])->name('create');
    route::post('store-news', [AdminController::class, 'store_news'])->name('store.news');
    route::get('Edit-News', [AdminController::class, 'edit_news'])->name('edit.news');
    route::post('Update-News', [AdminController::class, 'update_news'])->name('update.news');
    route::get('Search-News', [AdminController::class, 'news_search'])->name('search.news');
    route::post('Delete-News', [AdminController::class, 'delete_news'])->name('delete.news');


    route::get('All-Matches', [AdminController::class, 'matches'])->name('matches');
    route::post('store-match', [AdminController::class, 'store_match'])->name('store.match');
    route::get('Create-Match', [AdminController::class, 'create_match'])->name('create.match');
    route::get('Edit-Match', [AdminController::class, 'edit_match'])->name('edit.match');
    route::post('Update-Match', [AdminController::class, 'update_match'])->name('update.match');
    route::post('Delete-Match', [AdminController::class, 'delete_match'])->name('delete.match');
    route::get('Search-Match', [AdminController::class, 'match_search'])->name('search.match');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
