<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function not_found()
    {
        // 404 page
        return view("errors.404");
    }
}
