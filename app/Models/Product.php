<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['id'];

    protected $appends = ["featured_image_url"];

    public function getFeaturedImageUrlAttribute() {
        return Storage::url($this->featured_image);
    }

    public static function boot() {
        parent::boot();
        static::creating(function ($model) {
            $model->product_id = (string) Str::uuid();
        });
    }

    public function meals() {
        return $this->hasManyThrough(Meal::class, ProductMeal::class);
    }
}
