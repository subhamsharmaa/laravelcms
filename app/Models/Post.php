<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    protected $guarded =[];

    public function parent() :BelongsTo
    {
        return $this->belongsTo(self::class);
    }
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
