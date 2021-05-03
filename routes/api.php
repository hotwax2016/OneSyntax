<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\CountriesController;
use App\Http\Controllers\StatesController;
use App\Http\Controllers\CitiesController;

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

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::resource('employees', EmployeesController::class);

Route::get('/departments', [DepartmentsController::class, 'indexJson']);
Route::get('/countries', [CountriesController::class, 'indexJson']);
Route::get('/states', [StatesController::class, 'indexJson']);
Route::get('/cities', [CitiesController::class, 'indexJson']);
