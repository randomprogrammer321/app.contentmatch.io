<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Explore\ExploreController;

Route::middleware('auth')->group(function () {
    Route::get('/explore', [ExploreController::class, 'index'])->name('explore.index');
});
