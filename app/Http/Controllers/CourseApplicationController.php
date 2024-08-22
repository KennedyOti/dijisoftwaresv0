<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CourseApplication; // Make sure to create this model

class CourseApplicationController extends Controller
{
    /**
     * Display the course application form.
     */
    public function index()
    {
        return view('pages.apply', ['title' => 'Course Application']);
    }

    /**
     * Store a newly created course application in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'fullName' => 'required|string|max:255',
            'phoneNumber' => 'required|string|max:15',
            'location' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'course' => 'required|string',
        ]);

        // Create a new CourseApplication record
        CourseApplication::create($validatedData);

        // Redirect or return a response
        return redirect()->back()->with('success', 'Your application has been submitted successfully.');
    }
}
