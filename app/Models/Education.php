<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = [
        'university_name',
        'university_location',
        'start_date',
        'end_date',
        'degree',
        'feild_of_study',
        'user_id'
    ];

    protected $table = 'educations';
}
