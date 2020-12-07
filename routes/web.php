<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\HelloMiddleware;

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

Route::get('/', function () {
    return view('home');
});


Route::get('company', 'App\Http\Controllers\CompanyController@index');

Route::get('customer', 'App\Http\Controllers\CustomerController@index');

Route::get('language', 'App\Http\Controllers\LanguageController@index');

Route::get('question', 'App\Http\Controllers\QuestionController@index');
Route::post('question', 'App\Http\Controllers\QuestionController@post');
Route::post('question/re', 'App\Http\Controllers\QuestionController@re');
Route::get('question/edit', 'App\Http\Controllers\QuestionController@edit');
Route::post('question/update', 'App\Http\Controllers\QuestionController@update');
Route::get('question/add', 'App\Http\Controllers\QuestionController@add');
Route::post('question/create', 'App\Http\Controllers\QuestionController@create');

Route::get('information', 'App\Http\Controllers\InformationController@index');
Route::get('information/add', 'App\Http\Controllers\InformationController@add');
Route::post('information/create', 'App\Http\Controllers\InformationController@create');
Route::get('information/edit', 'App\Http\Controllers\InformationController@edit');
Route::post('information/edit', 'App\Http\Controllers\InformationController@update');
Route::get('information/del', 'App\Http\Controllers\InformationController@delete');
Route::post('information/del', 'App\Http\Controllers\InformationController@remove');
Route::get('information/find', 'App\Http\Controllers\InformationController@find');
Route::post('information/find', 'App\Http\Controllers\InformationController@search');

//Route::get('login2', 'App\Http\Controllers\CustomerController@getAuth');
//Route::post('login2/postAuth', 'App\Http\Controllers\Auth\LoginController@authenticate');
//Route::post('login2/postAuth', 'App\Http\Controllers\CustomerController@postAuth');
Route::get('/home2', 'App\Http\Controllers\CustomerController@home2');
//Route::get('auth', 'App\Http\Controllers\CustomerController@add');
//Route::post('auth/post', 'App\Http\Controllers\CustomerController@create');

Route::get('hello', 'App\Http\Controllers\HelloController@index');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('user_q', 'App\Http\Controllers\CustomerController@questionIndex');
Route::get('form', 'App\Http\Controllers\CustomerController@formIndex');
Route::post('form/re', 'App\Http\Controllers\CustomerController@reformIndex');
Route::post('form/create2', 'App\Http\Controllers\QuestionController@create2');

Route::get('kensakuDB', 'App\Http\Controllers\KekkaController@kensakuDB');
//ユーザー側検索
Route::get('/syukuhaku', 'App\Http\Controllers\KensakuController@syukuhaku');
Route::post('/syukuhaku', 'App\Http\Controllers\KensakuController@post');

Route::get('kensakuDB/syukuhaku', 'App\Http\Controllers\KensakuController@syukuhaku');
Route::post('kensakuDB/syukuhaku', 'App\Http\Controllers\KensakuController@post');


Route::get('/insyoku', 'App\Http\Controllers\KensakuController@insyoku');
Route::post('/insyoku', 'App\Http\Controllers\KensakuController@post');

Route::get('kensakuDB/insyoku', 'App\Http\Controllers\KensakuController@insyoku');
Route::post('kensakuDB/insyoku', 'App\Http\Controllers\KensakuController@post');

Route::get('/kankou', 'App\Http\Controllers\KensakuController@kankou');
Route::post('/kankou', 'App\Http\Controllers\KensakuController@post');

Route::get('kensakuDB/kankou', 'App\Http\Controllers\KensakuController@kankou');
Route::post('kensakuDB/kankou', 'App\Http\Controllers\KensakuController@post');

//Route::get('/free', 'App\Http\Controllers\FreeController@index');
//Route::post('/free', 'App\Http\Controllers\FreeController@post');

Route::get('/syukuhakuarea', 'App\Http\Controllers\KensakuController@syukuhakuarea');

Route::get('kensakuDB/syukuhakuarea', 'App\Http\Controllers\KensakuController@syukuhakuarea');

Route::get('/insyokuarea', 'App\Http\Controllers\KensakuController@insyokuarea');
Route::post('/insyokuarea', 'App\Http\Controllers\KensakuController@post');

Route::get('kensakuDB/insyokuarea', 'App\Http\Controllers\KensakuController@insyokuarea');
Route::post('kensakuDB/insyokuarea', 'App\Http\Controllers\KensakuController@post');

Route::get('/kankouarea', 'App\Http\Controllers\KensakuController@kankouarea');

Route::get('kensakuDB/kankouarea', 'App\Http\Controllers\KensakuController@kankouarea');

Route::get('freemap', 'App\Http\Controllers\MapController@index');


Route::get('settei/add', 'App\Http\Controllers\SetteiController@add');
Route::post('settei/create', 'App\Http\Controllers\SetteiController@create');


Route::get('contanct','App\Http\Controllers\ContactController@top');

Route::post('check','App\Http\Controllers\ContactController@check');

Route::get('/key','App\Http\Controllers\KensakuController@key');

Route::get('kensakuDB/keyword','App\Http\Controllers\KekkaController@key');

//Route::get('/keyword','App\Http\Controllers\KekkaController@key');

Route::get('insyoku/keyword','App\Http\Controllers\KensakuController@insyokukey');

Route::get('kankou/keyword','App\Http\Controllers\KensakuController@kankoukey');

Route::get('syukuhaku/keyword','App\Http\Controllers\KensakuController@syukuhakukey');

//追加
Route::get('map','App\Http\Controllers\MapController@index');
