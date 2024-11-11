<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;

Route::get("/", function () {
    return view("welcome");
});

Route::get("/people", [PersonController::class, "index"]);
Route::get("/people/create", [PersonController::class, "create"]);
Route::get("/people/{id}", [PersonController::class, "show"]);
