<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function projects()
    {
        return view('homepage.projects.index');
    }
}
