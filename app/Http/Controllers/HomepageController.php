<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $recipes = Recipe::all();

        return view('homepage', compact('recipes'));
    }

}
