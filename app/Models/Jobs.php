<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    use HasFactory;
    public function Corp(){
        //setiap profil memiliki satu mahasiswa
        return $this->belongsTo(Corp::class);
    }
}