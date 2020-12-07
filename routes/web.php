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

Route::get('/', function () {
    return view('welcome');
});

//ログイン画面
Route::get('companylogin', 'CompanyController@index');
Route::post('companylogin', 'CompanyController@index');

//トップ画面
Route::get('top', 'CompanyController2@index');

//グッズ編集画面
Route::get('company3', 'CompanyController3@index');
Route::post('company/find', 'CompanyController3@find');
Route::get('company/add', 'CompanyController3@add');
Route::post('company/create', 'CompanyController3@create');
Route::get('company/edit', 'CompanyController3@edit');
Route::post('company/update', 'CompanyController3@update');
Route::get('company/del', 'CompanyController3@del');
Route::post('company/remove', 'CompanyController3@remove');

//お問合せ画面
Route::get('contact', 'CompanyContactController@index');
Route::get('done', 'CompanyContactController@create');

//パスワード変更画面
Route::get('accountedit', 'AccountEditController@index');

Auth::routes();

Route::get('/index', 'HomeController@index')->name('index');
