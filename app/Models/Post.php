<?php

namespace App\Models;

use App\PostStatus;
use App\PostType;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    protected $guarded =[];

    protected $casts =[
        'status' => PostStatus::class,
        'type' => PostType::class,
        'meta_keywords' => "json"
    ];

    public function parent() :BelongsTo
    {
        return $this->belongsTo(self::class);
    }
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

     public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'category_posts');
    }

    public function scopePost(): Builder
    {
        return $this->where('type',PostType::POST);
    }
    public function scopePage(): Builder
    {
        return $this->where('type',PostType::PAGE);
    }
}
