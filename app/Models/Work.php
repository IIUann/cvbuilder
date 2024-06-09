<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = [
        'work_experience',
        'position',
        'company_name',
        'city',
        'summary',
        'start_date',
        'end_date',
    ];

}
