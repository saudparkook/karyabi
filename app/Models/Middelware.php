<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Middelware extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'user_access',
        'pagename',

    ];
    protected $attributes=[
        'status'=>'',
    ];

    public function getusers()
    {
        return $this->hasMany(User::class,'access','user_access');
    }
}
