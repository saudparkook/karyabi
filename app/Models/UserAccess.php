<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAccess extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'homepage',
        'status'
    ];
    public $timestamps = false;

    protected $attributes=[

    ];



    public function setting()
    {
        return $this->hasMany(setting::class,'user_access','id')->select('user_access','title','value');
    }
    public function middelware()
    {
        return $this->hasMany(Middelware::class,'user_access','id');
    }
}
