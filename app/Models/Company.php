<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'decription',
        'logo',
        'website',
        'industri',
        'location',
        'founded_year'

    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
