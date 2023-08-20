<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

/**
 * @mixin Builder
 */
class Survey extends Model
{
    use HasFactory, HasSlug;

    protected $fillable = [
        'user_id',
        'title',
        'image',
        'slug',
        'status',
        'description',
        'expire_date',
    ];

    public function getSlugOptions(): SlugOptions
    {
       return SlugOptions::create()
           ->generateSlugsFrom('title')
           ->saveSlugsTo('slug');
    }
}
