<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

Route::get('/', function () {
    return view('welcome');
});
// Route::GET('/blocks-secound', [DemoController::class, 'blocksSecound'])->name('blocks-secound');
// Route::GET('/blocks-three', [DemoController::class, 'blocksThree'])->name('blocks-three');
// Route::GET('/blocks-four', [DemoController::class, 'blocksFour'])->name('blocks-four');
