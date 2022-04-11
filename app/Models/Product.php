<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $appends = ["featured_image_url"];

    public function getFeaturedImageUrlAttribute() {
        return asset(str_replace("public", "storage", $this->featured_image));
    }

    public static function boot() {
        parent::boot();
        static::creating(function ($model) {
            $model->product_id = (string) Str::uuid();
        });
    }
}
