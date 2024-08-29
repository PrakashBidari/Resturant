<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;

    protected $fillable =[
        'title',
        'slug',
        'author',
        'description',
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


}
