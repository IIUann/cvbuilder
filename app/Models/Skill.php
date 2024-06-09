<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class skill extends Model
{
    protected $fillable = [
        'Technical',
        'soft',
        'user_id'

    ];
    public function skills()
    {
        return $this->hasMany(Skill::class);
    }

}
