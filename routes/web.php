<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\Controller;

Route::get("/", function () {
    return view("welcome");
});

Route::get("/people", [PersonController::class, "index"])->name("people.index");
Route::get("/people/create", [PersonController::class, "create"])->name("people.create");
Route::get("/people/{id}", [PersonController::class, "show"])->name("people.show");
Route::post("/people", [PersonController::class, "store"])->name("people.store");
Route::fallback([Controller::class, "not_found"])->name("errors.404");
