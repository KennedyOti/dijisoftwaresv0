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
}
