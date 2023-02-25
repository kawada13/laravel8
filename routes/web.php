<?php

use Illuminate\Support\Facades\Route;
use App\Test\Slack;
use App\Reffect\Myclass;

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

    // $slack = new Slack();
    // $myClass = new Myclass($slack);
    // $myClass->run();
    // dd($slack);


    // app()->bind('myClass', Myclass::class);
    // $myClass = app()->make('myClass');
    // $myClass->run();


    // $myClass = app(Myclass::class);
    // $myClass->run();


    $name = app()->make('myName');
    dd($name);

    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});


Route::get(
    '/register',
    [App\Http\Controllers\RegisterController::class, 'create']
)->middleware('guest')
->name('register');


Route::post(
    '/register',
    [App\Http\Controllers\RegisterController::class, 'store']
)->middleware('guest')
->name('register');


