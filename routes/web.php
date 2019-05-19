<?php

Route::get('/', 'WelcomeController@redirectToWelcome');
Route::get('/welcome', 'WelcomeController@welcome')->name('welcome');
Route::get('/comments/{workId}', 'CommentsController@commentsView')->name('viewComments');
Route::post('/comments/{workId}/add', 'CommentsController@addComment')->name('addComment');
Route::delete('/comments/{id}/delete', 'CommentsController@deleteComment')->where(['id', '[0-9]+'])->name('deleteComments');
