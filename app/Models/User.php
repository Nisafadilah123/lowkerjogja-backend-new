<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'address',
        'phoneNumber',
        'profile_photo_path',
        'utype',
        'provinsi',
        'kota'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    protected $table = "users";

    public function education(){
        return $this->hasMany(Education::class);
    }

    public function skill(){
        return $this->hasMany(Skill::class);
    }

    public function corp(){
        return $this->hasOne(Corp::class, 'user_id', 'id');
    }

    public function setProvinsiAttribute($value)
    {
        $this->attributes['provinsi'] = json_encode($value);
    }

    public function getProvinsiAttribute($value)
    {
        return $this->attributes['provinsi'] = json_decode($value);
    }

    // public function kandidat()
    // {
    //     return $this->belongsTo(Candidate::class, 'id', 'user_id');
    // }

    // public function apply_jobs(){
    //     return $this->belongsTo(Apply_job::class, 'user_id', 'id');
    // }

}