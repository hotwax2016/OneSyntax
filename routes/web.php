<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CountriesController;
use App\Http\Controllers\StatesController;
use App\Http\Controllers\CitiesController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\EmployeesController;


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

Auth::routes();

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.home');

Route::resource('users', UsersController::class)->except('show');
Route::put('/change-password/{user}', [ChangePasswordController::class, 'changePassword']);
Route::resource('countries', CountriesController::class);
Route::resource('states', StatesController::class);
Route::resource('cities', CitiesController::class);
Route::resource('departments', DepartmentsController::class);

Route::get('/employees', [EmployeesController::class, 'getPage']);