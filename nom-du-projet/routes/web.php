<?php
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\HomeController;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


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

Route::get('/', [HomeController ::class, 'home']) ->name('app_home');

Route::get('/About', [HomeController ::class, 'about'] )->name('app_about');

Route:: match(['get', 'post'], '/dashbord', [HomeController::class, 'dashboard'])
->middleware('auth')
->name('app_dashbord');

Route::get('/logout', [LoginController::class, 'logout'])->name('app_logout');

Route::get('/exist_email', [LoginController::class, 'existEmail'])->name('app_exist_email');

Route::get('/project', [LoginController::class, 'create_project'])->name('app_create_project');





Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');

