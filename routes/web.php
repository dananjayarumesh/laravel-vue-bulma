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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('phonebook');
});

Route::resource('phonebook', 'PhonebookController'); 
Route::post('phonebook/getData', 'PhonebookController@getData'); 

Route::get('/{name}', function () {
    return redirect('/');
})->where('name','[A-Za-z]');
