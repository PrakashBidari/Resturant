<?php

namespace App\Models;

use App\Enum\TrainingCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Training extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'description', 'category'];

    protected $casts = [
        'category' => TrainingCategory::class
    ];


    public function image(): MorphOne
    {
        return $this->morphOne(Image::class,'image');
    }

    public function meta(): MorphOne
    {
        return $this->morphOne(Meta::class, 'metable');
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function getCategoryNameAttribute()
    {
        $categoryValue = $this->attributes['category'];
        return TrainingCategory::tryFrom($categoryValue)?->name ?? 'Unknown';
    }
}
