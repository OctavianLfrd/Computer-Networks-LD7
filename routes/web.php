<?php

Route::get('/', function() {
    return redirect()->route('welcome');
});
Route::get('/welcome', 'WelcomeController@welcome')->name('welcome');
