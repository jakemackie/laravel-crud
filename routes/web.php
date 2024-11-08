<?php

use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("welcome");
});

Route::get("/people", function () {
    return view("people.index", [
        "people" => [
            ["name" => "John Doe", "id" => 1, "age" => 19],
            ["name" => "Jane Doe", "id" => 2, "age" => 28],
            ["name" => "John Smith", "id" => 3, "age" => 35],
            ["name" => "Jane Smith", "id" => 4, "age" => 32],
            ["name" => "John Brown", "id" => 5, "age" => 40],
            ["name" => "Jane Brown", "id" => 6, "age" => 38],
            ["name" => "John White", "id" => 7, "age" => 45],
            ["name" => "Jane White", "id" => 8, "age" => 42],
            ["name" => "John Black", "id" => 9, "age" => 50],
            ["name" => "Jane Black", "id" => 10, "age" => 48]
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