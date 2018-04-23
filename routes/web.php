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

Route::get('/formation',function(){
    return view("vitrine.formation");
});

Route::get('/news',function(){
    return view("vitrine.news");
});

Route::get('/equivalence-generique',function(){
    return view("vitrine.equivalence-generique");
});

Route::post('/equivalence-generique', [
    'uses' => 'EquivalencegeneriqueController@filtreMedicamentGenerique',
]);
Route::post('/equivalence-generique', [
    'uses' => 'EquivalencegeneriqueController@filtreMedicamentGenerique',
]);

Route::get('/laboratoire', 'LaboratoireController@index');

Route::post('/laboratoire', [
    'as' => 'laboratoire.store',
    'uses' => 'LaboratoireController@filtre'
]);

/*
Route::get('/contact',function(){
    return view("vitrine.contact");
});
*/

Route::get('/contact', [
    'uses' => 'ContactMessageController@create'
]);

Route::post('/contact', [
    'uses' => 'ContactMessageController@store',
    'as' => 'contact.store'
]);

Route::get('/news', 'HomeController@index');

Route::get('/', 'HomeController@returnView');