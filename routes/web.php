<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;

Route::get("/", function () {
    return view("welcome");
});

Route::get("/people", [PersonController::class, "index"])->name("people.index");
Route::get("/people/create", [PersonController::class, "create"])->name("people.create");
Route::get("/people/{id}", [PersonController::class, "show"])->name("people.show");
