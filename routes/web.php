<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;

Route::get("/", function () {
    return view("welcome");
});

Route::get("/people", [
    PersonController::class,
    "index"
]);

Route::get("/people/create", function () {
    return view("people.create");
});

Route::get("/people/{id}", function ($id) {
    // fetch record with id
    return view("people.show", ["id" => $id]);
});