<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\HelloMiddleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('hello', function () {
//     // helloにアクセスすることで以下のreturnを返し、HTMLソースコードがブラウザへ送られる。
//     return '<html><body><h1>Hello</h1><p>This is sample page.</p></body></html>';
// });

// $html = <<<EOF
// <html>
// <head>
// <title>Hello</title>
// <style>
// body { font-size: 16pt; color: #999; }
// h1 { font-size: 100pt; text-align: right; color: #eee; margin: -40px 0px -50px 0px; }
// </style>
// </head>
// <body>
//     <h1>Hello</h1>
//     <p>This is sample page.</p>
//     <p>これは、サンプルで作ったページです。</p>
// </body>
// </html>
// EOF;

// Route::get('hello', function () use ($html){
//     return $html;
// });

/*
Route::get('hello/{msg?}', function ($msg='no message.') {
    // $arch_types = [
    //     [ 'model_num' => 102, 'nick' => "DUEL" ],
    //     [ 'model_num' => 103, 'nick' => "BUSTER" ],
    //     [ 'model_num' => 105, 'nick' => "STRIKE" ],
    //     [ 'model_num' => 207, 'nick' => "BLITZ" ],
    //     [ 'model_num' => 303, 'nick' => "AEGIS" ]
    // ];

    // define("TYPES", "GAT-X");
    // $search_GAT = null;

    // foreach ($arch_types as $GAT_series) {
    //     if ($GAT_series['model_num'] == $msg) {
    //         $search_GAT = $GAT_series;
    //         break;
    //     }
    // }

    // if ($search_GAT) {
    //     $msg = TYPES . $search_GAT['model_num'] . ' ' . $search_GAT['nick'];
    // } else {
    //     $msg = 'Not a GAT series';
    // }

    $html = <<<EOF
    <html>
    <head>
    <title>Hello</title>
    <style>
    body { font-size: 16pt; color: #999; }
    h1 { font-size: 100pt; text-align: right; color: #eee; margin: -40px; 0px; -50px; 0px; }
    </style>
    <body>
        <h1>Hello</h1>
        <p>{$msg}</p>
        <p>これは、サンプルで作ったページです。</p>
    </body>
    </head>
    </html>
    EOF;

    return $html;
});
*/

// Route::get('hello/{id?}/{pass?}', 'App\Http\Controllers\HelloController@index');
// Route::get('hello', 'App\Http\Controllers\HelloController@index');
// Route::get('hello/other', 'App\Http\Controllers\HelloController@other');
// Route::get('hello', 'App\Http\Controllers\HelloController');
// Route::get('hello', 'App\Http\Controllers\HelloController@index');

// Route::get('hello', function() {
//     return view('hello.index');
// });
// Route::get('hello','App\Http\Controllers\HelloController@index');
// Route::get('hello/{id?}', 'App\Http\Controllers\HelloController@index');
// Route::get('hello', 'App\Http\Controllers\HelloController@index');
// Route::post('hello', 'App\Http\Controllers\HelloController@post');

// Route::get('hello', 'App\Http\Controllers\HelloController@index')->middleware(HelloMiddleware::class);
// Route::get('hello', 'App\Http\Controllers\HelloController@index');
// Route::get('hello', 'App\Http\Controllers\HelloController@index')->middleware('hello');

Route::get('hello', 'App\Http\Controllers\HelloController@index');
Route::post('hello', 'App\Http\Controllers\HelloController@post');

Route::get('hello/add', 'App\Http\Controllers\HelloController@add');
Route::post('hello/add', 'App\Http\Controllers\HelloController@create');

Route::get('hello/edit', 'App\Http\Controllers\HelloController@edit');
Route::post('hello/edit', 'App\Http\Controllers\HelloController@update');

Route::get('hello/del', 'App\Http\Controllers\HelloController@del');
Route::post('hello/del', 'App\Http\Controllers\HelloController@remove');

Route::get('hello/show', 'App\Http\Controllers\HelloController@show');
