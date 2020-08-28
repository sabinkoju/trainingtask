<?php

use App\Http\Controllers\NewsController;
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
    return view('welcome');
});

// Frontend Routes
// Route::group(['namespace' => 'User'], function () {
//     Route::get('post', 'PostController@index')->name('post');
// });

// Backend Dashboard Routes
Route::resource('/admin/dashboard', 'AdminController');
Route::resource('/admin/post', 'PostController');
Route::resource('/admin/news', 'NewsController');
Route::resource('/admin/events', 'EventController');
Route::resource('/admin/resources', 'ResourcesController');

// Frontend Routes
Route::get('/post', 'Frontend\PostController@frontView')->name('frontView');
Route::get('/news', 'Frontend\NewsController@frontNewsView')->name('frontNewsView');
Route::get('/events', 'Frontend\EventController@frontEventsView')->name('frontEventsView');
Route::get('/resources', 'Frontend\ResourcesController@frontResourcesView')->name('frontResourcesView');
