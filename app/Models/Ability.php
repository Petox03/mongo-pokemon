<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Ability extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'effect'
    ];

}