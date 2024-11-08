<?php

use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("welcome");
});

Route::get("/people", function () {
    return view("people.index", [
        "people" => [
            ["name" => "John Doe", "id" => 1],
            ["name" => "Jane Doe", "id" => 2],
            ["name" => "John Smith", "id" => 3],
            ["name" => "Jane Smith", "id" => 4],
            ["name" => "John Brown", "id" => 5],
            ["name" => "Jane Brown", "id" => 6],
            ["name" => "John White", "id" => 7],
            ["name" => "Jane White", "id" => 8],
            ["name" => "John Black", "id" => 9],
            ["name" => "Jane Black", "id" => 10]
        ],
    ]);
});

Route::get("/people/create", function () {
    return view("people.create");
});

Route::get("/people/{id}", function ($id) {
    // fetch record with id
    return view("people.show", ["id" => $id]);
});