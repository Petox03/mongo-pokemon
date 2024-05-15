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

    public function pokemon(){
        return $this->belongsTo(Pokemon::class);
    }

    public function pc(){
        return $this->hasMany(Pc::class);
    }

}
