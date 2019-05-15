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

Route::any('/', 'Event@coming_soon');
Route::any('register/user', 'Event_Register@user');
Route::any('register', 'Event_Register@step1');
Route::any('register/2', 'Event_Register@step2');
Route::any('register/3', 'Event_Register@thankyou');
Route::any('admin', 'Admin@users');
Route::any('admin/event', 'Admin@event');
Route::any('admin/event_details', 'Admin@event_details');
Route::any('admin/event_details/{i}', 'Admin@event_details_code');
Route::any('poc/eventdetails/{k}', 'Admin@event_details_static');
Route::any('admin/details', 'Admin@details');
Route::any('admin/addevent', 'Admin@addevent'); 
Route::any('admin/login', 'Admin@login');
Route::any('admin/sponso', 'Admin@sponsor');
Route::any('user/login', 'User@login');
Route::any('user/reset', 'User@resetpw');
Route::any('user', 'User@user');
Route::any('temp','Event@temporary');
Route::any('all_sponsers','Event@all_sponsors');
Route::any('coming_soon','Event@home');
Route::any('event/{i}', 'Event@display');
Route::any('home', 'Event@hometemp');
Route::any('melange2017', 'Event@home2017');
Route::any('home2', 'Event@home2');
Route::any('home3', 'Event@home3');
Route::any('gallery', 'Event@gallery');
Route::any('flash', 'Event@flash');
Route::any('quizzard', 'Event@quizzard');
Route::get('logout', function () {
	session_start();
	session_destroy();
    return Redirect::to('http://www.melangesimsr.com');
});
