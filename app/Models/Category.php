<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $fillable =[
        'name',
        'slug',
        'sort',
        'description',
        'parent_id',
        'active',
        'meta_title',
        'meta_description',
        'meta_keywords'
    ];

    protected $casts=[
        'meta_keywords' => 'json'
    ];

    public function parent(): BelongsTo
    {
        return $this->belongsTo(self::class);
    }

    public function  children() : HasMany 
    {
        return $this->hasMany(self::class);
    }

    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class, 'category_posts');
    }

    // scopes
    public function scopeActive($query)
    {
        return $query->where('active', true);
    }
}
