<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Meal extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public static function boot() {
        parent::boot();
        static::creating(function ($model) {
            $model->meal_id = (string) Str::uuid();
        });
    }

    protected $appends = ["featured_image_url"];

    public function getFeaturedImageUrlAttribute() {
        return Storage::url($this->featured_image);
    }

    //relationships
    public function ingridients() {
        return $this->morphMany(Ingridient::class, "ingridientable");
    }

    public function products() {
        return $this->belongsToMany(Product::class, ProductMeal::class)->withPivot([
            "featured_image",
        ]);
    }
}
