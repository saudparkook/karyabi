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
    protected $attributes=[

    ];
    public function getusers()
    {
        return $this->hasMany(Middelware::class,'user_access','id');
    }
}
