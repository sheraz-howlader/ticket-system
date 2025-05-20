<?php
require_once 'vendor/autoload.php';
use App\Helpers\Auth;

//start::public route list
Route::get('/', 'AuthController@index');
Route::post('/login', 'AuthController@loginAuth');
Route::get('/signup', 'AuthController@signUp');
Route::post('/register', 'AuthController@createUser');

Route::get('/migration', 'MigrationController@migrate');

//start::auth route list
if (Auth::check()) {
    Route::get('/dashboard', 'DashboardController@home');
    Route::get('/ticket', 'TicketController@index');
}



