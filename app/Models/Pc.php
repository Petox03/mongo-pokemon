<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Relations\BelongsTo;
use MongoDB\Laravel\Eloquent\Model;

class Pc extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'pokemon_id', 'ability_id'];

    protected $table = 'pc';

    public function pokemon(): BelongsTo
    {
        return $this->belongsTo(Pokemon::class);
    }
    public function ability(): BelongsTo
    {
        return $this->belongsTo(Ability::class);
    }
}
