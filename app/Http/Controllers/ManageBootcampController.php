<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BootcampApplication; // Make sure to include this

class ManageBootcampController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $applications = BootcampApplication::all(); // Fetch all bootcamp applications

        return view('portal.bootcampapplications.index', compact('applications')); // Pass to view
    }

    // Other methods remain unchanged...
}
