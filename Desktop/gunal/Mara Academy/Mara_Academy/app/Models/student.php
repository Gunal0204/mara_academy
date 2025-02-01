<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    protected $table = 'student__reg';

    protected $fillable = [

        'Full_name',
        'Email',
        'Password',
        'Gender',
    ];
}
