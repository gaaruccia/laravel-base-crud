<?php
Route::get('/', "CagnoliniController@index")->name("home");
Route::get('/show/{id}', "CagnoliniController@show")->name("show");
