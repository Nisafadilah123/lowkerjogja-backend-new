<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'company_id',
        'decription',
        'position',
        'last_education',
        'job_type',
        'job_category',
        'last_date',
        'job_location',
        'salary_range'

    ];

    public function company()
    {
        return $this->hasOne(Company::class, 'id', 'user_id');
    }
}