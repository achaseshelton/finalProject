<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FavoriteRestaurant;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'url',
        'address',
        'price',
        'cuisine'
    ];

    public function favorites()
    {
        return $this->hasMany(FavoriteRestaurant::class);
    }
}
