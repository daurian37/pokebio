<?php

use Illuminate\Support\Facades\Route;

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

    $menu = DB::table('menu')->get();

    return view('welcome',['menu' =>$menu]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');


Route::get('/reservation', function () {
    return view('pages.reservation');
})->name('reservation');


Route::match(['get','post'],'/gcontact', function () {
    return view('pages.gcontact');
})->name('gcontact');


Route::match(['get','post'],'/gcommande', function () {
    return view('pages.gcommande');
})->name('gcommande');