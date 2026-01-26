<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about', [
            'name' => 'Aaron Clyde Cervantes',
            'course' => 'Bachelor of Science in Information Technology',
            'university' => 'Central Mindanao University',
        ]);
    }

    public function contact()
    {
        return view('contact', [
            'email' => 's.cervantes.aaronclyde@cmu.edu.ph',
            'phone' => '+63 991 430 7358',
        ]);
    }

    public function projects()
    {
        $projects = [
            [
                'title' => 'Project 1: Laravel Portfolio',
                'description' => 'My first Larabel project',
            ],
            [
                'title' => 'Project 2: ',
                'description' => 'To be Announced',
            ],
            [
                'title' => 'Project 3',
                'description' => 'To be Announced',
            ],
        ];

        return view('projects', compact('projects'));
    }

    public function hobbies()
    {
        return view('hobbies');
    }
    
    public function welcome()
    {
        return view('welcome');
    }
}
