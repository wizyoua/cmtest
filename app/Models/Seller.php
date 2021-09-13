<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'portfolio',
        'portfolio_content',
        'online_store',
        'stores_desc',
        'quality_level',
        'experience_level',
        'business_level'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'seller_category');
    }
}
