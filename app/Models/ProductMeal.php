<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class ProductMeal extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
        });
    }

    protected $appends = ["featured_image_url"];

    public function getFeaturedImageUrlAttribute() {
        return Storage::url($this->featured_image);
    }

    public function product() {
        return $this->belongsTo(Product::class);
    }

    public function meal() {
        return $this->belongsTo(Meal::class);
    }
}
