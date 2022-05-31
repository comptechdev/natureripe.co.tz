<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Collection extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ["id"];

    public static function boot() {
        parent::boot();
        static::creating(function ($model) {
            $model->collection_id = (string) Str::uuid();
        });
    }

    public function meals() {
        return $this->belongsToMany(Meal::class);
    }
}

