<?php

Route::get('/', 'WelcomeController@redirectToWelcome');
Route::get('/welcome', 'WelcomeController@welcome')->name('welcome');
Route::get('/comments/{workId}', 'CommentsController@commentsView')->where(['workId', '[0-9]+'])->name('viewComments');
Route::post('/comments/{workId}/add', 'CommentsController@addComment')->name('addComment');
Route::delete('/comments/{id}/delete', 'CommentsController@deleteComment')->where(['id', '[0-9]+'])->name('deleteComments');
Route::get('/questions', 'QuestionsController@viewQuestions')->name('viewQuestions');
Route::post('/questions/{questionId}/answer/add', 'QuestionsController@addAnswer')->where(['questionId' => '[0-9]+'])->name('addAnswer');
Route::delete('/questions/{questionId}/answer/delete', 'QuestionsController@deleteAnswer')->where(['questionId' => '[0-9]+'])->name('deleteAnswer');
