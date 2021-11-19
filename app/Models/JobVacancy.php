<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobVacancy extends Model
{
    use HasFactory;
    protected $table ="jobs";
    protected $primaryKey ="id";

    protected $fillable = [
        'corp_id',
        'description_job',	
        'position',
        'last_education',	
        'job_type',	
        'job_category',
        'deadline',
        'provinces',
        'final_salary',
        'starting_salary',
        'kuota',	
        'gender',	
        'age',	
        'location',	
        'syarat',
        'email',
        'telp',
        'job_type_id',
        'job_cat_id',
    ];
}