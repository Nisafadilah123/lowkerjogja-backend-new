<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Save_job extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'job_id',
        'user_id',

    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    public function job()
    {
        return $this->hasOne(Job::class, 'id', 'job_id');
    }
}
