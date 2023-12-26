<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Chirps;
use Illuminate\Http\Request;

class ChirpsController extends Controller
{
    
    public function index()
    {
        return Inertia::render('Chirps/Index', [
            'subtitle' => 'From PHP to JS',
            'title' => 'Chirps Index'
        ]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'message' => ['required', 'max:255']
        ]);


        $request->user()->chirps()->create([
            'message' => $request->input('message')
        ]);
    }
}
