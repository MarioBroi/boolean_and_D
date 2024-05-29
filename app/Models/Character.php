<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Character extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'race',
        'sex',
        'age',
        'alignment',
        'health_points',
        'class',
        'sub_class',
        'level',
        'armour_class',
        'cd',
        'backstory'
    ];

    /**
     * Get the type that owns the Character
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }
}