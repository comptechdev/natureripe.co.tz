<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Ingridient extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ["id"];

    public static function boot() {
        parent::boot();
        static::creating(function ($model) {
            $model->ingridient_id = (String) Str::uuid();
        });
    }

    public function ingridientable() {
        return $this->morphTo("ingridientable");
    }
}
