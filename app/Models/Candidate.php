<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Candidate extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'apply_job_id',
        'user_id',
        'status',

    ];

    public function corp()
    {
        return $this->belongsToMany(User::class, 'user_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function apply_jobs()
    {
        return $this->belongsTo(Apply_job::class, 'apply_jobs_id', 'id');
    }
}