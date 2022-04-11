<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Collections extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ["name", "description", "featured_image", "collection_id"];

    public function meals() {
        return $this->belongsToMany(Meal::class);
    }
}

