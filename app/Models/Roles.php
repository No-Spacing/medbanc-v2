<?php

namespace App\Models;

use App\Models\User;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Roles extends Model
{
    protected $fillable = [
        'role'
    ];

    public function user_role(): HasOne
    {
        return $this->hasOne(User::class, 'role_id');
    }
}
