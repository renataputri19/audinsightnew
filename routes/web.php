<?php

use Illuminate\Support\Facades\Route;
use App\Models\Requirement;

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
    return view('layouts.app');
});

Route::get('/test-manage-requirements', function () {
    $requirements = Requirement::all();
    return view('filament.pages.manage-requirements', compact('requirements'));
});