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

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::match(['get','post'],'/home', function () {


    $commande = DB::table('commandes')->get();
    $users = DB::table('users')->get();
    $menu = DB::table('menu')->get();

    return view('home',['users'=>$users,'commande' =>$commande,'menu' =>$menu]);


})->name('home');


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

Route::match(['get','post'],'/modificationprofil', function () {

    return view('pages.modificationprofil');

})->name('modificationprofil');

Route::match(['get','post'],'/about', function () {

    return view('pages.about');

})->name('about');


Route::match(['get','post'],'/blog', function () {

    $menu = DB::table('menu')->get();

    return view('pages.blog',['menu' =>$menu]);

})->name('blog');

Route::match(['get','post'],'/blog-single', function () {

    return view('pages.blog-single');

})->name('blog-single');


Route::match(['get','post'],'/suppressionCde', function () {

    return view('pages.suppressionCde');

})->name('suppressionCde');

Route::match(['get','post'],'/suppressionMessage', function () {

    return view('pages.suppressionMessage');

})->name('suppressionMessage');

Route::match(['get','post'],'/messagerie', function () {

    $contact = DB::table('contact')->get();

    return view('pages.messagerie',['contact'=>$contact]);

})->name('messagerie');


Route::match(['get','post'],'/suppressionCdeclt', function () {

    return view('pages.suppressionCdeclt');

})->name('suppressionCdeclt');

Route::match(['get','post'],'/mescommandes', function () {

    $commandes = DB::table('commandes')->get();
    $menu = DB::table('menu')->get();
    return view('pages.mescommandes',['commandes'=>$commandes,'menu'=>$menu]);

})->name('mescommandes');

Route::match(['get','post'],'/qrcode', function () {

    
    return view('pages.qrcode');

})->name('qrcode');

Route::match(['get','post'],'/jeu', function () {

    
    return view('pages.jeu');

})->name('jeu');