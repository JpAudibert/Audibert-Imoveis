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


Auth::routes();

//inicio ADMIN
Route::get('/home', 'ImovelController@indexHome')->name('home')->middleware('auth');

Route::get('/visualizar', 'ImovelController@index')->name('visualizar')->middleware('auth');

//Listar conforme tipo ADMIN
Route::get('/apartamento/visualizar', 'ImovelController@indexAdminAp')->name('visualizarAp')->middleware('auth');

Route::get('/casa/visualizar', 'ImovelController@indexAdminCasa')->name('visualizarCasa')->middleware('auth');

Route::get('/comercial/visualizar', 'ImovelController@indexAdminComercial')->name('visualizarComercial')->middleware('auth');

Route::get('/rural/visualizar', 'ImovelController@indexAdminRural')->name('visualizarRural')->middleware('auth');

Route::get('/terreno/visualizar', 'ImovelController@indexAdminTerreno')->name('visualizarTerreno')->middleware('auth');

//criar View Inserir ADMIN
Route::get('terreno/inserir', 'ImovelController@createTerreno')->name('terrenoinserir')->middleware('auth');

Route::get('casa/inserir', 'ImovelController@createCasa')->name('casainserir')->middleware('auth');

Route::get('apartamento/inserir', 'ImovelController@createAp')->name('apinserir')->middleware('auth');

Route::get('rural/inserir', 'ImovelController@createRural')->name('ruralinserir')->middleware('auth');

Route::get('comercial/inserir', 'ImovelController@createComercial')->name('comercialinserir')->middleware('auth');

//inserir ADMIN
Route::post('store', 'ImovelController@store')->name('store')->middleware('auth');

//criar View Alterar ADMIN
Route::get('terreno/alterar/{id}', 'ImovelController@editTerreno')->middleware('auth');

Route::get('casa/alterar/{id}', 'ImovelController@editCasa')->middleware('auth');

Route::get('apartamento/alterar/{id}', 'ImovelController@editAp')->middleware('auth');

Route::get('rural/alterar/{id}', 'ImovelController@editRural')->middleware('auth');

Route::get('comercial/alterar/{id}', 'ImovelController@editComercial')->middleware('auth');

//atualizar ADMIN
Route::post('update', 'ImovelController@update')->name('update')->middleware('auth');

//criar View Mostar ADMIN
Route::get('terreno/ver/{id}', 'ImovelController@showTerreno')->middleware('auth');

Route::get('casa/ver/{id}', 'ImovelController@showCasa')->middleware('auth');

Route::get('apartamento/ver/{id}', 'ImovelController@showAp')->middleware('auth');

Route::get('rural/ver/{id}', 'ImovelController@showRural')->middleware('auth');

Route::get('comercial/ver/{id}', 'ImovelController@showComercial')->middleware('auth');

//listar ADMIN
Route::resource('imovels','ImovelController')->middleware('auth');

//criar View Mostar ADMIN
Route::get('terreno/ver/mais/{id}', 'ImovelController@showTerrenoSite');

Route::get('casa/ver/mais/{id}', 'ImovelController@showCasaSite');

Route::get('apartamento/ver/mais/{id}', 'ImovelController@showApSite');

Route::get('rural/ver/mais/{id}', 'ImovelController@showRuralSite');

Route::get('comercial/ver/mais/{id}', 'ImovelController@showComercialSite');

// listar SITE
Route::get('/', 'ImovelController@indexSite')->name('vendas');

// quem somos SITE
Route::get('quemsomos', 'ImovelController@quemsomos')->name('quemsomos');

//Listar Imóveis por Tipo SITE
Route::get('/apartamento/vendas', 'ImovelController@vendasAp')->name('vendasAp');

Route::get('/casa/vendas', 'ImovelController@vendasCasa')->name('vendasCasa');

Route::get('/comercial/vendas', 'ImovelController@vendasComercial')->name('vendasComercial');

Route::get('/rural/vendas', 'ImovelController@vendasRural')->name('vendasRural');

Route::get('/terreno/vendas', 'ImovelController@vendasTerreno')->name('vendasTerreno');

