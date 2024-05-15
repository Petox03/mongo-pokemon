<?php
declare(strict_types=1);
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Relations\HasMany;
use MongoDB\Laravel\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'types',
        'abilities',
        'genres',
        'sprite'
    ];

    public function types()
    {
        return $this->belongsToMany(Type::class);
    }

    public function abilities()
    {
        return $this->belongsToMany(Ability::class);
    }

    public function pc(): HasMany{
        return $this->hasMany(Pc::class);
    }
    public function party(): HasMany{
        return $this->hasMany(Pc::class);
    }
}
