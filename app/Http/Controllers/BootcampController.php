<?php

namespace App\Http\Controllers;

use App\Models\BootcampApplication; // Import the model
use Illuminate\Http\Request;

class BootcampController extends Controller
{
    public function index()
    {
        return view('bootcamp.index');
    }

    public function apply(Request $request)
    {
        // Validate the application data
        $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|unique:bootcamp_applications,email',
            'phone' => 'required|string|max:15',
            'education' => 'required|string|max:255',
            'career_path' => 'required|string|max:255',
            'computer_literacy' => 'required|string|in:Beginner,Intermediate,Expert',
            'reason_for_joining' => 'required|string|max:255',
        ]);

        // Save application data to the database
        BootcampApplication::create($request->all());

        return redirect()->route('bootcamp.index')->with('success', 'Application submitted successfully!');
    }
}
