<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable=[
        'title',
        'value',
        'user_access',
    ];

    protected $attributes=[
        'status'=>'0',
    ];
    public function suborder(){
        return $this->hasOne(SubjectsOrder::class, 'id', 'title');
    }
    public function getusers()
    {
        return $this->hasMany(User::class,'access','accesses_id');
    }
}
