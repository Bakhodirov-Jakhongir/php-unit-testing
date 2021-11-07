<?php

namespace App\Models;

use App\Services\CurrencyService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getPriceEuroAttribute()
    {
        return (new CurrencyService())->convert($this->price, 'usd', 'eur');
    }
}
