<?php

use App\Http\Controllers\ChefSchoolController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EquipePedagoController;
use App\Http\Controllers\JuryController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\StudentController;
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


Route::get('/',[DashboardController::class, 'index'])->name('home_path');
Route::get('/dashboard',[DashboardController::class, 'index'])->name('home_path');

// Route::resource('/students', StudentController::class);
Route::resources([
    'students'    => StudentController::class,
    'schools'     => SchoolController::class,
    'chefSchools' => ChefSchoolController::class,
    'equipe-pedago' => EquipePedagoController::class,
    'jury' => JuryController::class
]);
