<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $recipes = [
            [
                'name' => 'Italian Pannacotta',
                'description' => 'Italian pannacotta with low sugar homemade sauce.',
                'image' => 'path/to/image1.jpg',
                'servings' => 6,
                'time' => 30,
                'author' => 'mamihomemade'
            ],
            [
                'name' => 'Mini Cupcakes',
                'description' => 'Homemade mini cupcakes with low-calorie ingredients.',
                'image' => 'path/to/image2.jpg',
                'servings' => 24,
                'time' => 22,
                'author' => 'kirakira'
            ],
            [
                'name' => 'Macaron',
                'description' => 'Homemade authentic tasting chocolate macarons.',
                'image' => 'path/to/image3.jpg',
                'servings' => 6,
                'time' => 40,
                'author' => 'kucinglapar'
            ]
        ];

        return view('homepage', compact('recipes'));
    }

}
