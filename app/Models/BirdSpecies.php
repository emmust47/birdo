<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BirdSpecies extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'genus_id',
        'slug',
        'common_name',
        'scientific_name',
        'description',
        'habitat',
        'diet',
        'distribution',
        'conservation_status',
        'migration_pattern',
        'breeding_information',
        'image_path',
        'audio_path'
    ];

    public function birdGenus(): BelongsTo
    {
        return $this->belongsTo(BirdGenus::class);
    }

    public function birdReferences(): HasMany
    {
        return $this->hasMany(BirdReference::class);
    }
}
