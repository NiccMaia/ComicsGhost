<?php

use App\Http\Controllers\GeneroController;

Route::get('/generos', [GeneroController::class, 'index'])->name('generos.index');

