<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }

    public function dashboardLogin()
    {
        return view('auth.login');
    }

    public function dashboard()
    {
       return view('dashboard.dashboardHome');
    }

    public function projects()
    {
        return view('dashboard.projects');
    }

    public function createTags(Request $request)
    {
       $request->validate([
        'name' => 'required|max:225|unique:tags',
        'description' => 'required| max:225',
        'color' => 'required|max:225',
       ]);

        Tag::create([
            'name' => $request->name,
            'description' => $request->description,
            'color' => $request->color,
        ]);

        return response()->json(['message' => 'Tag created successfully', 'status' => 'success']);
    }
}
