<?php

use App\Http\Controllers\ElementsPageController;
use App\Http\Controllers\GenericPageController;
use App\Http\Controllers\MainPageController;
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

Route::get('/', [MainPageController::class, 'show']);
Route::get('/main.blade.php', [MainPageController::class, 'show']);
Route::get('/generic.blade.php', [GenericPageController::class, 'show']);
Route::get('/elements.blade.php', [ElementsPageController::class, 'show']);
