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
    return view('home');
});

Route::get('locale/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'ru'])) {
        Session::put('locale', $locale);
    }
    return back();
});

Auth::routes();

Route::resource('students', 'StudentController');
Route::get('reports', 'ReportController@generate');
Route::get('dashboard', 'DashboardController@index')->name('dashboard.index');
