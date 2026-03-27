<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $fillable = [
        'title',
        'summary',
        'responsibilities',
        'education',
        'experience',
        'eligibility',
        'competencies',
        'work_conditions',
        'address',
        'availability',
        'employment_type',
    ];
}
