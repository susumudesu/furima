<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'image', 'status', 'description','price','color'];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_categories');
    }
}
