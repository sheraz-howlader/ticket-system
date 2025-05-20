<?php
require_once 'vendor/autoload.php';
use App\helpers\Auth;

session_start();

//start::public route list
Route::get('/', 'AuthController@index');
Route::post('/login', 'AuthController@loginAuth');
Route::get('/signup', 'AuthController@signUp');
Route::post('/register', 'AuthController@createUser');


//start::auth route list
if (Auth::check()) {
    Route::get('/dashboard', 'DashboardController@home');
    Route::get('/ticket', 'TicketController@index');
}