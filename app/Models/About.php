<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
'firstname',
'lastname',
'email',
'phone',
'city',
'major',
'summary',
  ];
    public function skills()
    {
        return $this->hasMany(Skill::class);
    }
}

