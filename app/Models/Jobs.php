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

    public function job_types(){
        return $this->belongsTo(job_types::class);
    }




}