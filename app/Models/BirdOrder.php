<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class BirdOrder extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = ['name'];

    public function birdFamilies(): HasMany
    {
        return $this->hasMany(BirdFamily::class);
    }
}
