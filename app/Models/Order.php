<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order extends Model
{
    use HasFactory;
    public function orders(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function cakes(): BelongsToMany
    {
        return $this->belongsToMany(Cake::class, 'cake_order')
            ->withPivot('amount', 'one_cake_price');
    }
}
