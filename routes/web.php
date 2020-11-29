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
Route::group(['middleware' => ['lang']], function(){
    Route::get('/', 'VoteController@getIndex');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('home/page','HomeController@getPage');
    Route::post('home/page', 'HomeController@postPage');
    Route::post('/candidat/add', 'CondidatController@create')->name('create');
});
Auth::routes();
Route::post('comment/{id}', 'CommentController@postIndex');
Route::get('/news','NewsController@getIndex');
Route::get('/articles','PageController@getAll');
Route::get('/art/music', 'ArtController@getMusic');
Route::get('/candidats', 'CondidatController@index')->name('candidats');
Route::get('/all', 'CondidatController@getAll');
Route::get('/president', 'VoteController@getOne');
Route::get('/vote', 'VoteController@getVote');
Route::get('/candidat/{id}', 'CondidatController@show')->name('condidat_show');
Route::get('/catalog/{id}', 'CatalogController@getCat');
Route::get('/narod', 'CondidatController@getNarod');
Route::get('/parlament', 'CondidatController@getParlament');
Route::get('/blacklist', 'CondidatController@getBlack');
Route::get('/prisoner', 'CondidatController@getPrisoner');
Route::get('/vote/{id}', 'VoteController@addVote')->name('addVote');
Route::get('/minus_vote/{id}', 'VoteController@minusVote')->name('minusVote');

Route::get('{url}', 'PageController@getIndex');