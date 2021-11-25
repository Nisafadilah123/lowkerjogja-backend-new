<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job_cat extends Model
{
    use HasFactory;
    protected $table ="job_category";
    protected $primaryKey ="id";
    protected $guarded = [
        'tipe_pekerjaan_id',
    ];

    public function jobs(){
        return $this->belongsTo(Jobs::class);
    }

    public function job_type(){
        return $this->belongsTo(job_type::class);
    }

}