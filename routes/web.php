<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**
 *  Section Three
 *
 */

Route::prefix('/ch3/')->group(function(){

    Route::get('/index', 'IndexController@index')->name('ch3.index');

    Route::get('/news', 'NewsController@news')->name('news');

    Route::get('/announcements', 'AnnouncementController@announcements')->name('announcements');

    Route::get('/lessons', 'LessonController@lessons')->name('lessons');

    Route::get('/duties', 'DutyController@duties')->name('duties');

});

/**
 *
 *      Section Two
 *
 */

Route::prefix('/ch2/')->group(function() {

    Route::get('/index', 'SectionTwoController@index')->name('ch2.index');

    Route::get('/articles', 'SectionTwoController@articles')->name('articles');

    Route::get('/cats', 'SectionTwoController@cats')->name('cats');

    Route::get('/p/{id}', 'SectionTwoController@read')->name('read');

    Route::get('/fags', 'SectionTwoController@fags')->name('fags');
});