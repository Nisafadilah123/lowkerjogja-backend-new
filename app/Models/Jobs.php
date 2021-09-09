<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    use HasFactory;
    protected $table ="jobs";
    protected $primaryKey ="id";
    protected $fillable =[
        'id', 
        'corp_id', 
        'description', 
        'position', 
        'last_education', 
        'job_type', 
        'job_category', 
        'deadline', 
        'job_location', 
        'salary_range'
    ];

    public function corp(){
        return $this->hasMany(Corp::class);
    }
}
