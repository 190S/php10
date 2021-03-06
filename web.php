<?php

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

Route::group(['prefix' => 'admin'], function() {
  Route::get('news/create', 'Admin\NewsController@add');
  Route::get('profile/edit', 'Admin\ProfileController@edit');
});

//課題10-03
//http://XXXXXX.jp/XXX というアクセスが来たときに
//AAAControllerのbbbというAction に渡すRoutingの設定」を書いてみてください。
Route::get('XXX', 'AAA@bbb');

/*10-04.【応用】 前章でAdmin/ProfileControllerを作成し、edit Actionを追加しました。
web.phpを編集してadmin/profile/edit にアクセスしたら
ProfileController の edit Action に割り当てるように設定してください。 */

//行番号20に追記しました。
