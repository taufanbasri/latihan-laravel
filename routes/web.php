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
//    return view('welcome');
    $request = app('Illuminate\Http\Request');
    return $request->path();
});

Route::get('/studios', function (){
    return view('studios');
});

Route::get('/motivasi', function (){
    return view('quote.motivasi', [
        "penulis"   => "Joni",
        "kalimat"   => "Jatuh adalah cara maju yang rasanya tidak enak. Bangkit, move on! Jangan menyerah!"
    ]);
});

Route::get('/inspirasi', function() {
    return view('quote.inspirasi');
});

Route::get('/edit-quote/{id}', function($id) {
    $quote = \App\Quote::find($id);
    return view('edit-qoute', compact('quote'));
});

Route::resource('orders', 'OrdersController');

Route::any('/home', 'HomeController@index');

Route::get('registrasi', function (){
    return View::make('registrasi');
});
Route::post('registrasi', 'HomeController@registrasi');

Route::get('upload-form', function() {
    return View::make('upload_form');
});
Route::post('upload-profile-picture', 'HomeController@uploadProfilePicture');

Route::get('generate-cookie', 'HomeController@generateCookie');

Route::get('test-cookie', 'HomeController@testCookie');

Route::get('daftar-buku', function (){
    return response()->json([
        ['judul' => 'Belajar Laravel', 'url' => 'www.google.com'],
        ['judul' => 'Belajar PHP', 'url' => 'www.google.com']
    ]);
});