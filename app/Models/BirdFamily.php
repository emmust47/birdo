<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class BirdFamily extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = ['name', 'bird_order_id'];

    public function birdOrder(): BelongsTo
    {
        return $this->belongsTo(BirdOrder::class);
    }

    public function birdGenera(): HasMany
    {
        return $this->hasMany(BirdGenus::class);
    }
}
