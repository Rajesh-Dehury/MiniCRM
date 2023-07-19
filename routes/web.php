<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\App;
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

Route::get('/change-locale/{locale}', function () {
    App::setLocale(request()->locale);
    session()->put('locale', request()->locale);
    return redirect()->back();
})->name('change_locale');

Auth::routes(['register' => false]);

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::group(['middlewire' => 'auth'], function () {
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('/company', CompanyController::class);
        Route::resource('/employee', EmployeeController::class);
    });
});
