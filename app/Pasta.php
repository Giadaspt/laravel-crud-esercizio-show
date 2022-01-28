<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasta extends Model
{
    protected $fillable = [
        'image',
        'title',
        'type',
        'cooking_time',
        'description',
        'slug'
    ];
}
