<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        $people = Person::with("team")->orderBy("created_at", "desc")->paginate(10);

        return view("people.index", ["people" => $people]);
    }

    public function show($id)
    {
        // route -> /people/{id}
        $person = Person::with("team")->findOrFail($id);
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
