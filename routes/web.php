<?php
Route::get('/', function(){
    return redirect()->action('infoIdosoController@index');
});
Route::get('/home', 'infoIdosoController@index');
Route::get('/login', 'infoIdosoController@login');
Route::get('/register','infoIdosoController@register');

Route::post('/funcionarios/cadastro','funcController@cadastro');



Auth::routes();
Route::get('/user', 'funcController@index')->name('user');

Route::get('/idosos', 'IdosoController@lista');

Route::get('/idosos/cadastrar','infoIdosoController@registerIdoso');
Route::get('/remedios/cadastrar','infoIdosoController@registerRemedios');

Route::post('/idosos/cadastro', 'IdosoController@new');
Route::get('/idosos/remove/{id}', 'IdosoController@remove');
Route::get('/idosos/edit/{id}','IdosoController@edit')->name('auth.formedita');
route::get('/idosos/show/{id}','IdosoController@show');
Route::post('/idosos/update','IdosoController@update');

Route::get('/remedios', 'RemedioController@lista');

Route::post('/remedios/cadastro', 'RemedioController@new');
Route::get('/remedios/remove/{id}', 'RemedioController@remove');