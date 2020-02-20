<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user()->id;
});

Route::post('/create/storefront', 'StorefrontController@create')->middleware('auth:api');

// // Route::get('/questions/{id}', 'QuestionsController@all')->middleware('client');
// Route::post('/storefront/{id}/create/question', 'QuestionsController@create')->middleware('client');
// Route::get('/test-email', 'QuestionsController@testEmail');



// USING AUTH:API
Route::get('/storefront/{storefront}/product/{product}/questions', 'QuestionsController@productQuestions')->middleware('auth:api');
Route::get('/storefront/{storefront}/product/{product}/questions/search', 'QuestionsController@search')->middleware('auth:api');

Route::get('/storefront/{id}/questions', 'QuestionsController@all')->middleware('auth:api');
Route::post('/storefront/{id}/create/question', 'QuestionsController@create')->middleware('auth:api');
Route::post('/storefront/{id}/create/answer', 'AnswersController@create')->middleware('auth:api');
Route::post('/create/storefront', 'StorefrontController@create')->middleware('auth:api');

// UPDATES
Route::post('/question/{question}/update-status', 'QuestionsController@updateStatus')->middleware('auth:api');
Route::post('/answer/{answer}/update', 'AnswersController@update')->middleware('auth:api');
