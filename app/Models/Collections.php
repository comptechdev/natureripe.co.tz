<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collections extends Model
{
    use HasFactory;

    protected $fillable = ["name", "description", "featured_image", "collection_id"];

    public function meals() {
        return $this->belongsToMany(Meal::class);
    }
}

