<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetController extends Controller
{
    function greet(Request $request)
    {
        return "Hello, World!";
    }
}
