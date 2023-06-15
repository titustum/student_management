<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () { return view('welcome'); })->name('welcome');
Route::get('/password/reset', function () { return view('pages.reset_password'); })->name('password.reset');

Route::middleware([App\Http\Middleware\Authenticated::class])->group(function () {
    Route::get('/dashboard', function () { return view('dashboard.home'); })->name('dashboard.home');
    Route::get('/students/view', function () { return view('dashboard.students.view_students'); })->name('students.view');
    Route::get('/students/add', function () { return view('dashboard.students.add_students'); })->name('students.add');
    Route::get('/marks/add', function () { return view('dashboard.marks.add_marks'); })->name('marks.add');
    Route::get('/marks/view', function () { return view('dashboard.marks.view_marks'); })->name('marks.view');
    Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
});

Route::post('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::get('/hash/{text}', [App\Http\Controllers\AuthController::class, 'getHash'])->name('hash');
