<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'level',
        'skill',

    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
