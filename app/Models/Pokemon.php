<?php
declare(strict_types=1);
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
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
        return $this->embedsMany(Ability::class);
    }
}
