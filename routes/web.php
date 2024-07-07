<?php

use App\Http\Controllers\ProductExportController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('export', [ProductExportController::class, 'export']);
