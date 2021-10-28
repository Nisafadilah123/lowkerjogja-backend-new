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

    // public function user()
    // {
    //     return $this->hasOne(User::class, 'id', 'user_id');
    // }

    // public function skill()
    // {
    //     return $this->belongsTo(Skill::class, 'id', 'user_id');
    // }



    // public function jobs()
    // {
    //     return $this->belongsTo(Jobs::class, 'id', 'corp_id');
    // }

    public function apply_jobs()
    {
        return $this->belongsTo(Apply_job::class, 'apply_jobs_id', 'id');
    }
}