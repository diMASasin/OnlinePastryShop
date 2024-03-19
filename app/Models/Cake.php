<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Cake extends Model
{
    protected $fillable = ['name', 'price', 'category_id', 'weight', 'description', 'filling_id', 'type_id'];
    use HasFactory;
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function filling(): BelongsTo
    {
        return $this->belongsTo(Filling::class);
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }

    public function order(): BelongsToMany
    {
        return $this->belongsToMany(Order::class, 'cake_order');
    }
}
