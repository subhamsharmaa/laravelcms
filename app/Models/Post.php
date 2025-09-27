<?php

namespace App\Models;

use App\PostStatus;
use App\PostType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    protected $guarded =[];

    protected $casts =[
        'status' => PostStatus::class,
        'type' => PostType::class
    ];

    public function parent() :BelongsTo
    {
        return $this->belongsTo(self::class);
    }
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
