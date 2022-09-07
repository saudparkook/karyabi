<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $guarded = ['user_id'];

    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'edu',
        'uni',
        'avg',
        'description',
        'start_date',
        'end_date',
    ];
}
