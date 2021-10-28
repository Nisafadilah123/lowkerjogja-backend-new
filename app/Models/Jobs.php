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
        return $this->hasMany(Corp::class);
    }

    // public function kandidat()
    // {
    //     return $this->belongsTo(Candidate::class, 'id', 'user_id');
    // }




}
