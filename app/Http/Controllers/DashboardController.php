<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BootcampApplication; // Include the model

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get the count of bootcamp applications
        $bootcampCount = BootcampApplication::count();

        // Pass the count to the dashboard view
        return view('portal.dashboard', compact('bootcampCount'));
    }

    // Other methods remain unchanged...
}
