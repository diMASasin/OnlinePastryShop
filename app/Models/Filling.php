<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Filling extends Model
{
    use HasFactory;
    public function cakes(): HasMany
    {
        return $this->hasMany(Cake::class);
    }
}
