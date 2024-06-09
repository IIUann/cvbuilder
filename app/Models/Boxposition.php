<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boxposition extends Model
{
    protected $fillable = [
        'name_position',
        'title_position',
        'date_position'
    ];
}
