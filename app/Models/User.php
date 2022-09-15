<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
    ];

    protected $attributes=[
        'user_access'=>'1',
    ];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function getEducation()
    {
        return $this->hasMany(Education::class,'user_id','id');
    }
    public function getEvidence()
    {
        return $this->hasMany(Evidence::class,'user_id','id');
    }
    public function getSkill()
    {
        return $this->hasMany(Skill::class,'user_id','id');
    }
    public function getlanguage()
    {
        return $this->hasMany(Language::class,'user_id','id');
    }
    public function getMedia()
    {
        return $this->hasMany(Media::class,'user_id','id');
    }
    public function getExperience()
    {
        return $this->hasMany(Experience::class,'user_id','id');
    }

}
