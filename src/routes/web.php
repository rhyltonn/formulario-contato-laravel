<?php

Route::group(['namespace' => 'Rhyltonn\FormularioContato\Http\Controllers'], function(){
    Route::get('contato', 'FormularioContatoController@index');
    Route::post('contato', 'FormularioContatoController@enviarEmail')->name('contato');
});