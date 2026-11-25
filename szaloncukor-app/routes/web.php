<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SzaloncukorController;

Route::get('/', [SzaloncukorController::class, 'Termekek']);
Route::post('/', [SzaloncukorController::class, 'Hozzaadas']);
