<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Apply_job extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'job_id',
        'cv',
        'status',

    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function jobs()
    {
        return $this->belongsTo(Jobs::class, 'job_id', 'id');
    }

    public function corp(){
        return $this->belongsTo(Corp::class, 'user_id', 'id');
    }

}