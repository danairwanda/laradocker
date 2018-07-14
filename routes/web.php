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

Route::get('/testDatabase', function(){
    App\User::create([
        'email'     => uniqid() . '@example.com',
        'name'      => 'Test User',
        'password'  => 'secret'
    ]);

    return response()->json(App\User::all());
});

Route::get('/testCache', function(){
    Cache::put('someKey', 'foobar', 10);

    return Cache::get('someKey');
});