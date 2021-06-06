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

Route::get('/contato', function () {
    return view('contato');
})->name('contato');;;

Auth::routes();

#Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::group(['middleware' => 'auth'], function () {
    Route::get('user', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('profile', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('profile', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::put('profile/password', [App\Http\Controllers\ProfileController::class, 'password'])->name('profile.password');

    Route::get('/eurusd', function () {
        $trends = DB::table('EURUSD')->get();
        return view('eurusd' , compact('trends'));
    })->name('eurusd');;;

    Route::get('/usdjpy', function () {
        $trends = DB::table('USDJPY')->get();
        return view('usdjpy', compact('trends'));
    })->name('usdjpy');;;

    Route::get('/usdcad', function () {
        $trends = DB::table('USDCAD')->get();
        return view('usdcad' , compact('trends'));
    })->name('usdcad');;;

    Route::get('/gbpusd', function () {
        $trends = DB::table('GBPUSD')->get();
        return view('gbpusd', compact('trends'));
    })->name('gbpusd');;;

    Route::get('/usdchf', function () {
        $trends = DB::table('USDCHF')->get();
        return view('usdchf' , compact('trends'));
    })->name('usdchf');;;

    Route::get('/eurgbp', function () {
        $trends = DB::table('EURGBP')->get();
        return view('eurgbp' , compact('trends'));
    })->name('eurgbp');;;

    Route::get('/audusd', function () {
        $trends = DB::table('AUDUSD')->get();
        return view('audusd' , compact('trends'));
    })->name('audusd');;;

    Route::get('/nzdusd', function () {
        $trends = DB::table('NZDUSD')->get();
        return view('nzdusd' , compact('trends'));
    })->name('nzdusd');;;

    Route::get('/xauusd', function () {
        $trends = DB::table('XAUUSD')->get();
        return view('xauusd' , compact('trends'));
    })->name('xauusd');;;


});

Route::group(['middleware' => 'auth'], function () {
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
});

