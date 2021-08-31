<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'level',
        'major',
        'gpa'


    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
