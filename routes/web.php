<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReportCaseController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ContactUsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use function Ramsey\Uuid\v1;

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

Route::get('/about_us', function () {
    return view('about_us');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/CrimesReported', [DashboardController::class, 'store']);
Route::get('/delete-crimes/{id}', [DashboardController::class, 'destroy']);
Route::get('/Contacts', [DashboardController::class, 'messages']);
// Route::get('/delete-messages/{id}', [DashboardController::class, 'truncate']);
Route::get('/report', [ReportCaseController::class, 'index']);
Route::post('/report', [ReportCaseController::class, 'store']);
Route::get('/', [HomepageController::class, 'index']);
Route::get('/contact_us', [ContactUsController::class, 'index']);
Route::post('/contact_us', [ContactUsController::class, 'store']);






