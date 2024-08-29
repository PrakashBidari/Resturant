<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug'];


    public function meta(): MorphOne
    {
        return $this->morphOne(Meta::class, 'metable');
    }

    public function image(): MorphMany
    {
        return $this->morphMany(Image::class, 'image');
    }


    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
