<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job_type extends Model
{
    use HasFactory;
    protected $table = "job_types";
    protected $primaryKey = 'id';

    public function jobs()
    {
        return $this->belongsTo(Jobs::class);
    }

    // public function corp(){
    //     return $this->hasMany(Corp::class);
    // }

    public function job_cat(){
        return $this->hasMany(job_cat::class, 'tipe_pekerjaan_id', 'id');
    }

}