<?php
use App\Http\Controllers\FoodsController;
Route::get("/foods/markets",[FoodsController::class,'markets'])->name('foods.markets');
