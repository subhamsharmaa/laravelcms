<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comment extends Model
{
    protected $fillable = [
        'post_id',
        'user_id',
        'parent_id',
        'guest_name',
        'guest_email',
        'is_approved',
        'body'
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function replies():HasMany
    {
        return $this->hasMany(Comment::class,'parent_id')->with('replies');
    }

    public function scopeApproved(Builder $query):Builder
    {
        return $query->where('is_approved',true);
    }
}
