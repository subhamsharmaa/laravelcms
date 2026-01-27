<?php

namespace App\Models;

use App\PostStatus;
use App\PostType;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Tags\HasTags;

class Post extends Model
{
    use HasTags;
    protected $guarded =[];

    protected $casts =[
        'status' => PostStatus::class,
        'type' => PostType::class,
        'meta_keywords' => "json",
        'published_at' => 'datetime'
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

    public function allComments()
    {
        return $this->hasMany(Comment::class);
    }

    public function comments() :HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function scopePost($query): Builder
    {
        return $query->where('type',PostType::POST);
    }
    
    public function scopePage($query): Builder
    {
        return $query->where('type',PostType::PAGE);
    }

    public function scopePublished($query): Builder
    {
        return $query->where('status',PostStatus::PUBLISHED);
    }
}
