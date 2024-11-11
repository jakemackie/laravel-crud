<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        $people = Person::orderBy("created_at", "desc")->get();

        return view("people.index", ["people" => $people]);
    }

    public function show($id)
    {
        // route -> /people/{id}
        $person = Person::findOrFail($id);
        return view("people.show", ["person" => $person]);
    }

    public function create()
    {
        return view("people.create");
    }

    public function store()
    {
    }
}
