<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Corp extends Model
{
    use HasFactory;
    protected $table ="corp";
    protected $primaryKey ="id";
    // protected $guarded = [
    //     'user_id',
    // ];

    protected $fillable = [
        'user_id',
        'nama_corp',
        'description',
        'logo',
        'industri',
        'location',
        'work_day',
        'founded_year',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function jobs(){
        return $this->hasMany(Jobs::class, 'corp_id', 'id');
    }

    // public function kandidat(){
    //     return $this->belongsTo(Jobs::class);
    // }

}