<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\DashboardController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\RoomController;
use App\Http\Controllers\API\ScheduleController;
use App\Http\Controllers\API\CalendarController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layouts.app');
});

// Admin Login
Route::get('/admin/login', 'AdminAuthController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'AdminAuthController@login');

// Admin Registration
Route::get('/admin/register', 'AdminAuthController@showRegistrationForm')->name('admin.register');
Route::post('/admin/register', 'AdminAuthController@register');

Route::get('/dashboard', 'DashboardController@dashboardView')->name('dashboard');

Route::get('/users', 'UserController@index')->name('users.index');
Route::get('/users/search', 'UserController@searchView')->name('users.search');
Route::get('/users/add', 'UserController@addView')->name('users.add');
Route::get('/users/{id}', 'UserController@editView')->name('users.edit');

Route::get('/rooms', 'RoomController@index')->name('rooms.index');
Route::get('/rooms/add', 'RoomController@addView')->name('rooms.add');
Route::get('/rooms/{id}', 'RoomController@editView')->name('rooms.edit');

Route::get('/schedules', 'ScheduleController@index')->name('schedules.index');
Route::get('/schedules/add', 'ScheduleController@addView')->name('schedules.add');
Route::get('/schedules/{id}', 'ScheduleController@editView')->name('schedules.edit');

Route::get('/calendar', 'CalendarController@index')->name('calendar.index');

