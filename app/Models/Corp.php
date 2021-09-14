<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Corp extends Model
{
    use HasFactory;
    protected $table ="corp";
    protected $primaryKey ="id";
    protected $guarded = [
        'user_id',
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function jobs(){
        return $this->hasOne(Jobs::class);
    }

}
