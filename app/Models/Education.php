<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $table = "education";
    protected $primaryKey = 'id';
    // protected $guarded = [
    //     $education->user_id = auth()->user()->id
    // ];

    protected $guarded = ['user_id'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }


}