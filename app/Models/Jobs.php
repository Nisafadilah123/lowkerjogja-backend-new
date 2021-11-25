<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    use HasFactory;
    protected $table ="jobs";
    protected $primaryKey ="id";
    protected $guarded = [
        'corp_id',
    ];

    public function corp(){
        return $this->belongsTo(Corp::class);
    }

    public function job_type(){
        return $this->hasMany(job_type::class, 'job_type_id', 'id');
    }

    public function job_cat(){
        return $this->hasMany(job_cat::class, 'job_cat_id', 'id');
    }

    public function kandidat(){
        return $this->belongsTo(Candidate::class);
    }



}