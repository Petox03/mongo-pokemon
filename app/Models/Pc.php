<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Pc extends Model
{
    use HasFactory;

    protected $fillable = ['pokemon_id', 'current_ability', 'gender'];

    public function pokemon()
    {
        return $this->belongsTo(Pokemon::class);
    }
}
