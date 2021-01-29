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
Route::get('company3', 'CompanyController3@index')->middleware('auth:company');
Route::post('company/find', 'CompanyController3@find');
Route::get('company/add', 'CompanyController3@add');
Route::post('company/create', 'CompanyController3@create');
Route::post('company/confirm', 'CompanyController3@confirm');
Route::get('company/edit', 'CompanyController3@edit');
Route::post('company/update', 'CompanyController3@update');
Route::get('company/del', 'CompanyController3@del');
Route::post('company/remove', 'CompanyController3@remove');
//確認画面
//Route::post('company/confirm', 'CompanyController3@create');

//お問合せ画面(古い)はりぼて
Route::get('contact', 'CompanyContactController@index');
Route::get('done', 'CompanyContactController@create');
Route::get('confirm1', 'CompanyContactController@done');

//お問い合わせ(新しい)未完成
//Route::get('form', 'ContactController5@form');
//Route::post('form/confirm', 'ContactController5@confirm');
//Route::post('form/process', 'ContactController5@process');

//パスワード変更画面
Route::get('accountedit', 'AccountEditController@index');

Route::get('company', 'CompanyContactController@logout');

//管理者
Route::get('Kanri7_2', 'Kanri7_2Controller@index');

Route::get('Kanri7_3', 'Kanri7_3Controller@index');
Route::get('Kanri7_3/edit', 'Kanri7_3Controller@edit');
Route::post('Kanri7_3/update', 'Kanri7_3Controller@update');
Route::get('Kanri7_3/del', 'Kanri7_3Controller@del');
Route::post('Kanri7_3/remove', 'Kanri7_3Controller@remove');

Route::get('Kanri7_4', 'Kanri7_4Controller@index');
Route::get('Kanri7_4/input', 'Kanri7_4Controller@input');
Route::get('Kanri7_4/output', 'Kanri7_4Controller@output');
Route::post('Kanri7_4/reply', 'Kanri7_4Controller@reply');

Route::get('Kanri7_5', 'Kanri7_5Controlle@index');
Route::get('Kanri7_5/edit', 'Kanri7_5Controlle@edit');
Route::post('Kanri7_5/update', 'Kanri7_5Controlle@update');

Route::get('Kanri7_6', 'Kanri7_6Controller@index');
Route::get('Kanri7_6/edit', 'kanri7_6Controller@edit');
Route::post('Kanri7_6/update', 'Kanri7_6Controller@update');
Route::get('Kanri7_6/del', 'Kanri7_6Controller@del');
Route::post('Kanri7_6/remove', 'Kanri7_6Controller@remove');

Route::get('Kanri7_7', 'Kanri7_7Controller@index');
Route::get('Kanri7_7/edit', 'Kanri7_7Controller@edit');
Route::post('Kanri7_7/update', 'Kanri7_7Controller@update');

Route::get('Kanri7_8', 'Kanri7_8Controller@index');
Route::get('Kanri7_8/edit', 'Kanri7_8Controller@edit');
Route::post('Kanri7_8/update', 'Kanri7_8Controller@update');

//ここまで管理者

//ここからストア

/*　おすすめ商品 */
Route::get('reco', 'StoreController@reco');
/*　おすすめ(トップス)商品 */
Route::get('recotops', 'StoreController@recotops');
/*　おすすめ(トップス(タンクトップ))商品 */
Route::get('recotopstanktop', 'StoreController@recotopstanktop');
/*　おすすめ(トップス(シャツ))商品 */
Route::get('recotopsshirt', 'StoreController@recotopsshirt');
/*　おすすめ(トップス(パーカー))商品 */
Route::get('recotopshoodie', 'StoreController@recotopshoodie');


/*　おすすめ(ボトムス)商品 */
Route::get('recobottoms', 'StoreController@recobottoms');
/*　おすすめ(ボトムス(パンツ))商品 */
Route::get('recobottomspants', 'StoreController@recobottomspants');


/*　おすすめ(アクセサリ)商品 */
Route::get('recoacce', 'StoreController@recoacce');
/*　おすすめ(アクセサリ(シューズ))商品 */
Route::get('recoacceshoes', 'StoreController@recoacceshoes');
/*　おすすめ(アクセサリ(キャップ))商品 */
Route::get('recoaccecap', 'StoreController@recoaccecap');



/*　メンズ商品 */
Route::get('mens', 'StoreController@mens');
/*　メンズ(トップス)商品 */
Route::get('menstops', 'StoreController@menstops');
/*  メンズ(トップス(タンクトップ))商品 */
Route::get('menstopstanktop', 'StoreController@menstopstanktop');
/*  メンズ(トップス(シャツ))商品 */
Route::get('menstopsshirt', 'StoreController@menstopsshirt');
/*　メンズ(トップス(パーカー))商品 */
Route::get('menstopshoodie', 'StoreController@menstopshoodie');


/*　メンズ(ボトムス)商品 */
Route::get('mensbottoms', 'StoreController@mensbottoms');
/*　メンズ(ボトムス(パンツ))商品 */
Route::get('mensbottomspants', 'StoreController@mensbottomspants');


/*　メンズ(アクセサリー)商品 */
Route::get('mensacce', 'StoreController@mensacce');
/*　メンズ(アクセサリ(シューズ))商品 */
Route::get('mensacceshoes', 'StoreController@mensacceshoes');
/*　メンズ(アクセサリ(キャップ))商品 */
Route::get('mensaccecap', 'StoreController@mensaccecap');



/*　レディース商品 */
Route::get('ladies', 'StoreController@ladies');
/*　レディース(トップス)商品 */
Route::get('ladiestops', 'StoreController@ladiestops');
/*  レディース(トップス(タンクトップ))商品 */
Route::get('ladiestopstanktop', 'StoreController@ladiestopstanktop');
/*  レディース(トップス(シャツ))商品 */
Route::get('ladiestopsshirt', 'StoreController@ladiestopsshirt');
/*  レディース(トップス(パーカー))商品 */
Route::get('ladiestopshoodie', 'StoreController@ladiestopshoodie');


/*　レディース(ボトムス)商品 */
Route::get('ladiesbottoms', 'StoreController@ladiesbottoms');
/*  レディース(ボトムス(パンツ))商品 */
Route::get('ladiesbottomspants', 'StoreController@ladiesbottomspants');


/*　レディース(アクセサリー)商品 */
Route::get('ladiesacce', 'StoreController@ladiesacce');
/*　レディース(アクセサリ(シューズ))商品 */
Route::get('ladiesacceshoes', 'StoreController@ladiesacceshoes');
/*　レディース(アクセサリ(キャップ))商品 */
Route::get('ladiesaccecap', 'StoreController@ladiesaccecap');

//ここまでストア

//ここからマイページ

Route::get('mypage', 'MypageController@mypage1');
Route::get('mypage/mypage2', 'MypageController@mypage2');
Route::get('mypage/mypage3', 'MypageController@mypage3');
Route::get('mypage/mypage4', 'MypageController@mypage4');
Route::get('mypage/mypage5', 'MypageController@mypage5');
Route::get('mypage/mypage6', function () {
    return view('mypage/mypage6');
});
Route::get('mypage/mypage7', 'MypageController@mypage7');
Route::get('mypage/mypage8', 'MypageController@mypage8');
Route::get('mypage/mypage9', 'MypageController@mypage9');
Route::get('mypage/mypage10', 'MypageController@mypage10');
Route::get('mypage/mypage11', 'MypageController@mypage11');
Route::get('mypage/mypage12', 'MypageController@mypage12');
Route::get('mypage/mypage13', 'MypageController@mypage13');
Route::post('mypage/mypage14', 'MypageController@mypage14');

Route::get('mypage/edit', 'MypageController@edit');
Route::post('mypage/edit', 'MypageController@update');

Route::get('mypage/del', 'MypageController@del');
Route::post('mypage/del', 'MypageController@remove');

Route::get('mypage/other', 'MypageController@other');

//ここまでマイページ

//トロフィーの画面
Route::get('acti', 'ActivityController@acti');

//レビューの画面
Route::get('activity/rev', 'ActivityController@rev');


//ハンバーガーリストの四画面
Route::get('activity/toro', 'ActivityController@toro');
Route::get('activity/ren', 'ActivityController@ren');
Route::get('activity/kon', 'ActivityController@kon');
Route::get('activity/kozin', 'ActivityController@kozin');

//ここからホームページ
Route::get('HomePage','PageController@index');
Route::get('HomePage/event','pageController@event');
Route::get('homepage/info','pageController@info');
//ここまでホームページ


//ここからスタート

//Route::get('start1', function () {
   // return view('start1.index');
//});

//Route::get('start1', 'Start1Controller@index');
Route::get('start', 'Start1Controller@Start1');
//Route::get('start1', 'Start1Controller@Start2');
Route::get('start1', 'Start1Controller@Start2');
Route::get('start2', 'Start1Controller@Start3');

//ここまでスタート

Auth::routes();

Route::get('/index', 'HomeController@index')->name('index');

//ログイン認証ルーティング
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin')->name('admin-register');

Route::view('/admin', 'admin')->middleware('auth:admin')->name('admin-home');


Route::get('/login/company', 'Auth\LoginController@showCompanyLoginForm');
Route::get('/register/company','Auth\RegisterController@showCompanyRegisterForm');

Route::post('/login/company', 'Auth\LoginController@companyLogin');
Route::post('/register/company', 'Auth\RegisterController@createCompany')->name('company-register');

Route::view('/company', 'company')->middleware('auth:company')->name('company-home');


Route::get('hello/auth', 'HelloController@getAuth');
Route::post('hello/auth', 'HelloController@postAuth');