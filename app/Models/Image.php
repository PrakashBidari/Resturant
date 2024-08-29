<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $table = 'images';

    protected $fillable = [
        'image_type',
        'image_id',
        'saved_name',
        'original_name',
        'url',
        'alt_text'
    ];
}
