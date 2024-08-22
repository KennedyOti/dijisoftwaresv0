<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CourseApplication extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullName',
        'phoneNumber',
        'location',
        'email',
        'course',
    ];

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'fullName' => 'required|string|max:255',
        'phoneNumber' => 'required|string|max:15',
        'location' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'course' => 'required|string',
    ]);

    CourseApplication::create($validatedData);

    return response()->json(['success' => true]);
}
}
