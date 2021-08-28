<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Corp extends Model
{
    use HasFactory;
    protected $table ="corp";
    protected $primaryKey ="id";
    protected $fillable =[
        'id', 'user_id', 'jobs_id','nama_corp', 'description', 'logo', 'industri', 'location', 'work_day', 'founded_year',
    ];
    public function jobs(){
        //setiap profil memiliki satu mahasiswa
        return $this->hasMany(Jobs::class, 'jobs_id');
    }
}